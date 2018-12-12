<?php
Session_start(); //before all things
require_once('init.php');
require_once('controller/frontend.php');

if(empty($_SESSION['Cart'])){
    newCart();
}

if(empty($_POST)& empty($_GET) | isset($_POST['Catalog'])){
    getCatalog();
}

if(isset($_POST['Pers_account'])){
    getAccount();
}

if(isset($_POST["course"])) {
    getFormation();
}

if(isset($_POST['Cart'])){
    getCart();
}

if(isset($_POST["add"])){
    addFormToCart();
}

if(isset($_POST['Selected']) & isset($_POST['qty'])){
    changeQuantity();
}

if(isset($_POST['Cancel'])){
    emptyCart();
}

if(isset($_POST['page_suivante'])){
    getPaymentMethod();
}

if (isset($_POST['del'])){
    deleteFormationFromCart();
}

require_once('view/footer.php');
