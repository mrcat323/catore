<?php
 class Products {
     
     public $title;
     public $about;

     public function __construct() {
         if(isset($this->id)) $this->id = $id;
         if(isset($this->title)) $this->title = $title;
         if(isset($this->about)) $this->about = $about;
     }
     public static function getbyId($id) {
         $db = new Database("localhost", "root", "jojo", "catore", "utf8");
         $this->