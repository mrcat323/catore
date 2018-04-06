<?php

	class SearchController {

		public function methodAll() {
			$connect = Fabric::getClass("Connect");
	        if(!empty($_REQUEST["word"])) {
	            $word = htmlspecialchars(strip_tags($_GET["word"]));
	            $search = SearchControllerModel::search($word);
	        }
	        $count = SearchControllerModel::countRows();
	        $phones = SearchControllerModel::countPhones();
	        $tablets = SearchControllerModel::countTablets();
	        $laptops = SearchControllerModel::countLaptops();
	        $pc = SearchControllerModel::countPC();
	        $headphones = SearchControllerModel::countHeadphones();
	        $earphones = SearchControllerModel::countEarphones();
	        $keyboards = SearchControllerModel::countKeyboards();
	        include("view/search.php");
		}


	}