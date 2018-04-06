<?php

	class HomeController {

		public function methodShow() {
			 $connect = Fabric::getClass("Connect");
			 $count = HomeControllerModel::countRows();
	         $phones = HomeControllerModel::countPhones();
	         $tablets = HomeControllerModel::countTablets();
	         $laptops = HomeControllerModel::countLaptops();
	         $pc = HomeControllerModel::countPC();
	         $headphones = HomeControllerModel::countHeadphones();
			 include 'view/home.php';
		}


	}