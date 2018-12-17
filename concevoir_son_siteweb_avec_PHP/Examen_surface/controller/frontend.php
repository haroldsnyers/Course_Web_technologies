<?php 
// ---checks if cart already exist in the current session---
function newCart(){
    $Session_cart = new Cart();
    $_SESSION['Cart'] = serialize($Session_cart);
}

// ---verifies if we are in the formationView or cartView---
function getCatalog(){
    require_once('view/startView.php');
}

// ---lets you see what's in the Cart---
function getCart(){
    require('view/cartView.php');
}

function addFormToCart(){
    if($_POST["add"]=='add'){
        $cara = array ( 
	    'piece' => (string)$_POST['piece'], 
	    'largeur' => (int)$_POST['SelectedLa'], 
	    'longueur' => (int)$_POST['SelectedLa']); 
        $cart = unserialize($_SESSION['Cart']);
        $cart->addToCart($cara);
        $_SESSION['Cart'] = serialize($cart);
        require('view/startView.php');
    }
}

function emptyCart(){
    if($_POST['Cancel']=='empty'){
        $session_cart = new Cart();
        $_SESSION['Cart'] = serialize($session_cart);
        require('view/startView.php');
    }
}