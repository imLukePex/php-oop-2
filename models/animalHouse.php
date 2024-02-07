<?php

    class AnimalHouse extends Product {

        private $internalSize;

        public function __construct($id, $title, $image, $price, Category $category, $internalSize) {

            $this -> setId($id);
            $this -> setTitle($title);
            $this -> setImage($image);
            $this -> setPrice($price);
            $this -> setCategory($category);
            $this -> setInternalSize($internalSize);
        }

        public function getInternalSize() {

            return $this -> internalSize;
        }

        public function setInternalSize($internalSize) {

            $this -> internalSize = $internalSize;
        }
    }
?>