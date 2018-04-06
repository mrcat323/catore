<?php

 class SectionController {

     public function methodShow() {
         $db = new Database();
         $connect = Fabric::getClass("Connect");
         $url = $_SERVER["REQUEST_URI"];
         $route = explode("/", $url);
         $id = $route[3];
         $page = new Paginator('9', 'p');
         $stmt = $db->query("SELECT count(id) FROM `products` WHERE `section_id` = $id");
         $row = $stmt->fetch(PDO::FETCH_NUM);
         $total = $row[0];
         $page->set_total($total);
         $d = $db->query("SELECT * FROM `products` WHERE `section_id` = $id ".$page->get_limit());
         $count = SectionControllerModel::countRows();
         $phones = SectionControllerModel::countPhones();
         $tablets = SectionControllerModel::countTablets();
         $laptops = SectionControllerModel::countLaptops();
         $pc = SectionControllerModel::countPC();
         $headphones = SectionControllerModel::countHeadphones();
         $earphones = SectionControllerModel::countEarphones();
         $keyboards = SectionControllerModel::countKeyboards();
         $data = SectionControllerModel::show($id);
         include("view/contik.php");
     }
}
