<?php

	class CartController {

		public function methodAdd() {
			$db = new Database();
			if(!empty($_REQUEST["quantity"])) {
				$code = "'";
				$code .= $_GET["code"];
				$code .= "'";
				$productBycode = $db->query("SELECT * FROM products WHERE code = $code");
				$productByCode = $productBycode->fetch(PDO::FETCH_ASSOC);
				$itemMass = [$productByCode['code'] => ['title' => $productByCode['title'],'code' => $productByCode['code'], 'quantity' => $_POST['quantity'], 'price' => $productByCode['price']]];
				if(!empty($_SESSION["cart_item"])) {
					if(in_array($productByCode['code'], array_keys($_SESSION['cart_item']))) {
						foreach ($_SESSION['cart_item'] as $key => $value) {
							if($productByCode['code'] == $key) {
								if(empty($_SESSION['cart_item'][$key]['quantity'])) {
									$_SESSION['cart_item'][$key]['quantity'] = 0;
								}
								$_SESSION['cart_item'][$key]['quantity'] += $_POST['quantity'];
							}
						}
					}
				 else {
					$_SESSION['cart_item'] = array_merge($_SESSION['cart_item'], $itemMass);
				}
			} else {
				$_SESSION['cart_item'] = $itemMass;
			}
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}

		public function methodList() {
			 if(!isset($_SESSION["cart_item"])) {
			 	return header("Location: /product/list/");
			 }
			 $connect = Fabric::getClass("Connect");
			 $count = CartControllerModel::countRows();
	         $phones = CartControllerModel::countPhones();
	         $tablets = CartControllerModel::countTablets();
	         $laptops = CartControllerModel::countLaptops();
	         $pc = CartControllerModel::countPC();
	         $headphones = CartControllerModel::countHeadphones();
	         $earphones = CartControllerModel::countEarphones();
	         $keyboards = CartControllerModel::countKeyboards();
			 include('view/listcart.php');
		}

		public function methodPlease() {
			if(!empty($_REQUEST["name"]) && !empty($_REQUEST["email"]) && !empty($_REQUEST["address"]) && !empty($_REQUEST["message"])) {
				$name = htmlspecialchars(strip_tags($_POST["name"]));
				$email = htmlspecialchars(strip_tags($_POST["email"]));
				$address = htmlspecialchars(strip_tags($_POST["address"]));
				$message = htmlspecialchars(strip_tags($_POST["message"]));
				if(CartControllerModel::addOrder($name, $email, $address, $message)) {
					return header("Location: /cart/success/");
				}
			}
		}

		public function methodSuccess() {
			if(!isset($_SESSION["cart_item"])) {
			 	return header("Location: /product/list/");
			 }
			 $connect = Fabric::getClass("Connect");
			 $count = CartControllerModel::countRows();
	         $phones = CartControllerModel::countPhones();
	         $tablets = CartControllerModel::countTablets();
	         $laptops = CartControllerModel::countLaptops();
	         $pc = CartControllerModel::countPC();
	         $headphones = CartControllerModel::countHeadphones();
	         $earphones = CartControllerModel::countEarphones();
	         $keyboards = CartControllerModel::countKeyboards();

			 include("view/success2.php");
		}

		public function methodOrder() {
			 if(!isset($_SESSION["cart_item"])) {
			 	return header("Location: /product/list/");
			 }
			 $connect = Fabric::getClass("Connect");
			 $count = CartControllerModel::countRows();
	         $phones = CartControllerModel::countPhones();
	         $tablets = CartControllerModel::countTablets();
	         $laptops = CartControllerModel::countLaptops();
	         $pc = CartControllerModel::countPC();
	         $headphones = CartControllerModel::countHeadphones();
	         $earphones = CartControllerModel::countEarphones();
	         $keyboards = CartControllerModel::countKeyboards();
			 include('view/order.php');
		}

		public function methodRemove() {
			if(!empty($_SESSION["cart_item"])) {
				foreach ($_SESSION["cart_item"] as $key => $value) {
					if($_GET['code'] == $key) {
						unset($_SESSION["cart_item"][$key]);
					}
				}
				header("Location: /cart/list/");
			}
			if(empty($_SESSION["cart_item"])) {
				unset($_SESSION["cart_item"]);
				return header("Location: /product/list/");
			}
			include('view/listcart.php');
		}

		public function methodClear() {
			unset($_SESSION["cart_item"]);
			return header("Location: /product/list/");
		}

}