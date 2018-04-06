<?php

	class ProductController {


		public function methodList() {
			 $db = new Database();
			 $connect = Fabric::getClass("Connect");
			 $page = new Paginator('9', 'p');
			 $stmt = $db->query('SELECT count(id) FROM `products`');
			 $row = $stmt->fetch(PDO::FETCH_NUM);
			 $total = $row[0];
			 $page->set_total($total);
	         $data = $db->query('SELECT * FROM `products` '.$page->get_limit());
	         $count = ProductControllerModel::countRows();
	         $phones = ProductControllerModel::countPhones();
	         $tablets = ProductControllerModel::countTablets();
	         $laptops = ProductControllerModel::countLaptops();
	         $pc = ProductControllerModel::countPC();
	         $headphones = ProductControllerModel::countHeadphones();
	         $earphones = ProductControllerModel::countEarphones();
	         $keyboards = ProductControllerModel::countKeyboards();
	         include("view/products.php");
		}

		public function methodShow() {
			 $connect = Fabric::getClass("Connect");
	         $url = $_SERVER["REQUEST_URI"];
	         $route = explode("/", $url);
	         $id = $route[3];
	         $product = ProductControllerModel::showProduct($id);
	         $count = ProductControllerModel::countRows();
	         $phones = ProductControllerModel::countPhones();
	         $tablets = ProductControllerModel::countTablets();
	         $laptops = ProductControllerModel::countLaptops();
	         $pc = ProductControllerModel::countPC();
	         $headphones = ProductControllerModel::countHeadphones();
	         $earphones = ProductControllerModel::countEarphones();
	         $keyboards = ProductControllerModel::countKeyboards();
	         $comments = ProductControllerModel::showComments($id);
	         include("view/product.php");
		}
		public function methodAdd() {
	         $url = $_SERVER["HTTP_REFERER"];
	         $route = explode("/", $url);
	         $id = $route[5];
	         $name = htmlspecialchars(strip_tags($_POST["name"]));
	         $rate = htmlspecialchars(strip_tags($_POST["rate"]));
	         if(ProductControllerModel::insert($id, $name, $rate)) {
	             return header("Location: $url");
	         }
	    }


	}