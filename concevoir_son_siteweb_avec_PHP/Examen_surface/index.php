<?php
Session_start(); //before all things
require_once('init.php');
require_once('controller/frontend.php');

if(empty($_SESSION['Cart'])){
    newCart();
}

if(empty($_POST)& empty($_GET) | isset($_POST['Start'])){
    getCatalog();
}

if(isset($_POST['Cart'])){
    getCart();
}

if(isset($_POST["add"])){
    addFormToCart();
}

if(isset($_POST['Cancel'])){
    emptyCart();
}

