<?php
class Cart
{
    // Initialisation variables
    public $cartArray;
    public $count;


    public function __construct()
    {
        $this->CartArray = [];
        $this->Count = 0;
    }

    // ---adding room to the cart---
    public function addToCart($product)
    {
        array_push($this->CartArray, $product);
        $this->countTotal();
    }

    // ---adds up the surface for each room => Total surface---
    public function countTotal()
    {
        $this->Count = 0; // otherwise keeps adding up without returning to zero
        // example if we put 5 and than 3, if we didn't do line 29, it would
        // multiply the price with 8 and not 3
        for($i=0; $i<count($this->CartArray); $i++){
            $elem = $this->CartArray[$i];
            $surface = (int)$elem['longueur'] * (int)$elem['largeur'];
            $this->Count += $surface;
        }
    }
}