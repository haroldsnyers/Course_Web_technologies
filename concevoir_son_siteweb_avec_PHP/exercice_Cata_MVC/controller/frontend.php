<?php

// ---checks if cart already exist in the current session---
function newCart(){
    $Session_cart = new Cart();
    $_SESSION['Cart'] = serialize($Session_cart);
}

// ---verifies if we are in the formationView or cartView---
function getCatalog(){
    require_once('view/catalog.php');
}

// ---lets you see the specifics of a course---
function getFormation(){
    $instances = unserialize($_SESSION['Period']);
    if (!empty($instances)){
      $catalog = $instances->ListFormation;
    }
    for($i=0;$i < count($catalog); $i++){
        $elem = $catalog[$i];
        $elemArr = (array) $elem;
        if ($_POST["course"]==$elemArr['Id'])
            $Formation = $elemArr;
    }
    $_SESSION['Forms'] = serialize($Formation);
    $formArr = (array)$Formation;
    require('view/formationView.php');
}

// ---lets you see what's in the Cart---
function getCart(){
    require('view/cartView.php');
}

// ---adds the formation to the cart if clicked on---
function addFormToCart(){
    if($_POST["add"]=='Buy'){
        $session_formation = unserialize($_SESSION['Forms']);
        $cart = unserialize($_SESSION['Cart']);
        $cart->addToCart($session_formation);
        $_SESSION['Cart'] = serialize($cart);
        require('view/catalog.php');
    }
}

// ---Changes the quantity of the formation you want to buy---
function changeQuantity(){
    $Shop_Cart = unserialize($_SESSION['Cart']);
    $Shop_Cart->addQuantity($_POST['Selected'], $_POST['qty']);
    $_SESSION['Cart'] = serialize($Shop_Cart);
    require('view/cartView.php');
}

// ---empties cart if clicked on -> redirects to catalog---
function emptyCart(){
    if($_POST['Cancel']=='empty'){
        $session_cart = new Cart();
        $_SESSION['Cart'] = serialize($session_cart);
        require('view/catalog.php');
    }
}

// ---sends user to paiement page---
function getPaymentMethod(){
    require('view/payment.php');
}

// ---if clicked on the cross, deletes the formation---
function deleteFormationFromCart(){
    $cart = unserialize($_SESSION['Cart']);
    $course = $_POST['del'];
    $cart->delFormation($course);
    if (empty($cart)) {
        $session_cart = new Cart();
        $_SESSION['Cart'] = serialize($session_cart);
    } else {
        $_SESSION['Cart'] = serialize($cart);
    }
    require('view/cartView.php');
}

function getAccount(){
    require('view/account.php');
}
