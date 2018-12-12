<?php
class Cart
{
    // Initialisation variables
    public $cartArray;
    public $count;
    public $quantityArray;


    public function __construct()
    {
        $this->CartArray = [];
        $this->Count = 0;
        $this->QuantityArray = [];
    }

    // ---adding formation to the cart---
    public function addToCart($product)
    {
        // verify if productisn't already in the cart
        if(! in_array($product,$this->CartArray)){
            array_push($this->CartArray, $product);
        }
        // sets quantity to 1
        $this->QuantityArray[$product['Id']] = 1;
        $this->countTotal();
    }

    // ---adds up the price for each formation added => Total price---
    public function countTotal()
    {
        $this->Count = 0; // otherwise keeps adding up without returning to zero
        // example if we put 5 and than 3, if we didn't do line 29, it would
        // multiply the price with 8 and not 3
        for($i=0; $i<count($this->CartArray); $i++){
            $elem = $this->CartArray[$i];
            $price = (int)$elem['Price'];
            $quantity = $this->QuantityArray[$elem['Id']];
            $this->Count += $price * $quantity;
        }
    }

    // ---Changes the quantity of formation you want---
    public function addQuantity($course, $quantity){
        // changes first the quantity the user has demanded
        $this->QuantityArray[$course] = $quantity;
        // adds up again the total from scratch, with the new quantity for the
        // course selected
        for ($i=0; $i<count($this->CartArray); $i++) {
            $elem = $this->CartArray[$i];
            if($elem['Id'] == $course){
                $this->countTotal();
            }
        }
    }

    // ---Delete one formation at a time in the cartView---
    public function delFormation($course){
        for ($i=0; $i < count($this->CartArray); $i++) {
            $elem = $this->CartArray[$i];
            $price = $elem['Price'];
            if ($course==$elem['Id']) {
                $this->Count -=  $price * $this->QuantityArray[$course];
                // removes the course, and changes the keys in consequence
                array_splice($this->CartArray, $i, 1);
                // removes course (number of times), but here keeps the key of
                // each element (important because the key is the id of the
                // course)
                unset($this->QuantityArray[$course]);
            }
        }
    }
}
