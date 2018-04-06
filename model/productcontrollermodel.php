<?php

	class ProductControllerModel {

		 public static function showProduct($id) {
	         $product = [];
	         $db = new Database();
	         $fetch = $db->get_where("*", "products", "id", $id);
	         while($row = $fetch->fetch()) {
	             $product[] = $row;
	         }
	         return $product;
     	}

     	public static function showAll($page) {
     		 $product = [];
	         $db = new Database();
	         $fetch = $db->query("SELECT * FROM `products` ORDER BY `id` DESC LIMIT ". $page->get_limit());
	         while($row = $fetch->fetchAll()) {
	             $product[] = $row;
	         }
	         return $product;
     	}

     	public static function showComments($id) {
         $comments = [];
         $db = new Database();
         $fetch = $db->get_where("*", "rates", "product_id", $id);
         while($row = $fetch->fetch()) {
             $comments[] = $row;
         }
         return $comments;
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

        public static function removeSlashes(string $uri, string $currentUrl): string
    {
        // Если у текущей ссылки в конце есть слеш
        if (1 != strlen($uri) && '/' == substr($currentUrl, -1)) {
            // Если у заданного роутера нету слеша - добавляем
            if ('/' != substr($uri, -1)) {
                $uri = $uri.'/';
            }
        } elseif (1 != strlen($uri)) { // если у текущей ссылки в конце нету слеша
            // Если у заданного роутера есть слеш - обрезаем
            if ('/' == substr($uri, -1)) {
                mb_internal_encoding("UTF-8");
                $uri = mb_substr($uri, 0, -1);
            }
        }
        return $uri;
    }


     public static function insert($id, $name, $rate) {
         $db = new Database();
         return $db->query("INSERT INTO `rates` SET product_id=?, name=?, rate=?, rate_date=UNIX_TIMESTAMP()", [$id, $name, $rate]);
	 }


	}