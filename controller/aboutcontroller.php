<?php
	class AboutController {

		public function methodHelp() {
			 $connect = Fabric::getClass("Connect");
			 $count = AboutControllerModel::countRows();
	         $phones = AboutControllerModel::countPhones();
	         $tablets = AboutControllerModel::countTablets();
	         $laptops = AboutControllerModel::countLaptops();
	         $pc = AboutControllerModel::countPC();
	         $headphones = AboutControllerModel::countHeadphones();
			 include('view/help.php');
		}
		public function methodUs() {
			 $connect = Fabric::getClass("Connect");
		     $count = AboutControllerModel::countRows();
	         $phones = AboutControllerModel::countPhones();
	         $tablets = AboutControllerModel::countTablets();
	         $laptops = AboutControllerModel::countLaptops();
	         $pc = AboutControllerModel::countPC();
	         $headphones = AboutControllerModel::countHeadphones();
	         
			 include('view/us.php');
		}
		public function methodStore() {
			 $connect = Fabric::getClass("Connect");
		     $count = AboutControllerModel::countRows();
	         $phones = AboutControllerModel::countPhones();
	         $tablets = AboutControllerModel::countTablets();
	         $laptops = AboutControllerModel::countLaptops();
	         $pc = AboutControllerModel::countPC();
	         $headphones = AboutControllerModel::countHeadphones();
	         
			 include('view/store.php');
		}
		public function methodContacts() {
			 $connect = Fabric::getClass("Connect");
			 $count = AboutControllerModel::countRows();
	         $phones = AboutControllerModel::countPhones();
	         $tablets = AboutControllerModel::countTablets();
	         $laptops = AboutControllerModel::countLaptops();
	         $pc = AboutControllerModel::countPC();
	         $headphones = AboutControllerModel::countHeadphones();
	         
			 include('view/contacts.php');
		}
		public function methodAddhelp() {
			if(!empty($_REQUEST["name"]) && !empty($_REQUEST["email"]) && !empty($_REQUEST["message"])) {
				$name = htmlspecialchars(strip_tags($_POST["name"]));
				$email = htmlspecialchars(strip_tags($_POST["email"]));
				$message = htmlspecialchars(strip_tags($_POST["message"]));
				if(AboutControllerModel::addhelp($name, $email, $message)) {
					return header("Location: /about/success");
				}
			}
		}
		public function methodSuccess() {
			 $connect = Fabric::getClass("Connect");
			 $count = AboutControllerModel::countRows();
	         $phones = AboutControllerModel::countPhones();
	         $tablets = AboutControllerModel::countTablets();
	         $laptops = AboutControllerModel::countLaptops();
	         $pc = AboutControllerModel::countPC();
	         $headphones = AboutControllerModel::countHeadphones();
	         
			 include 'view/success.php';
		}
	}