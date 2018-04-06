<?php

 class SectionControllerModel {
     
     public static function show($id) {
         $data = [];
         $db = new Database();
         $for = $db->query("SELECT * FROM `sections` WHERE `id` = $id");
         while($row = $for->fetch()) {
             $data[] = $row;
         }
         return $data;
     }

     public static function showbyId($id) {
         $d = [];
         $db = new Database();
         $f = $db->get_where("*", "products", "section_id", $id);
         while($row = $f->fetch()) {
             $d[] = $row;
         }
         return $d;
     }

     public static function countRows() {
        $count = [];
        $db = new Database();
        $f = $db->query("SELECT COUNT(id) as rower FROM `products`");
        while($row = $f->fetch()) {
            $count[] = $row;
        }
        return $count;
     }

     public static function countPhones() {
        $phones = [];
        $db = new Database();
        $f = $db->query("SELECT COUNT(*) as phones FROM `products` WHERE `section_id` = 1");
        while ($row = $f->fetch()) {
            $phones[] = $row;
        }
        return $phones;
     }

     public static function countTablets() {
        $tablets = [];
        $db = new Database();
        $f = $db->query("SELECT COUNT(*) as tablets FROM `products` WHERE `section_id` = 2");
        while ($row = $f->fetch()) {
            $tablets[] = $row;
        }
        return $tablets;
     }

     public static function countLaptops() {
        $laptops = [];
        $db = new Database();
        $f = $db->query("SELECT COUNT(*) as laptops FROM `products` WHERE `section_id` = 3");
        while ($row = $f->fetch()) {
            $laptops[] = $row;
        }
        return $laptops;
     }

    public static function countPC() {
        $pc = [];
        $db = new Database();
        $f = $db->query("SELECT COUNT(*) as pc FROM `products` WHERE `section_id` = 4");
        while ($row = $f->fetch()) {
             $pc[] = $row;
        }
        return $pc;
    }

    public static function countHeadphones() {
        $headphones = [];
        $db = new Database();
        $f = $db->query("SELECT COUNT(*) as headphones FROM `products` WHERE `section_id` = 5");
        while ($row = $f->fetch()) {
             $headphones[] = $row;
        }
        return $headphones;
    }

    public static function countEarphones() {
        $earphones = [];
        $db = new Database();
        $f = $db->query("SELECT COUNT(*) as earphones FROM `products` WHERE `section_id` = 6");
        while ($row = $f->fetch()) {
             $earphones[] = $row;
        }
        return $earphones;
    }

    public static function countKeyboards() {
        $keyboards = [];
        $db = new Database();
        $f = $db->query("SELECT COUNT(*) as keyboards FROM `products` WHERE `section_id` = 7");
        while ($row = $f->fetch()) {
             $keyboards[] = $row;
        }
        return $keyboards;
    }

}