<?php
// To set the active layer on the icon of the navbar for the current page
if (!isset($_POST["course"])& !isset($_POST['Cart']) & !isset($_POST['Pers_account'])){
    $current = 'home';
} else if (isset($_POST['Cart'])){
    $current = 'cart';
} else {
    $current = 'other';
}

// include the title and navbar which will be always there
require_once ('view/headView.php');
//require_once ('model/formation.php');
//require_once ('model/Period.php');
require_once ('model/CartModel.php');

// ---Construction formations of the catalog---
