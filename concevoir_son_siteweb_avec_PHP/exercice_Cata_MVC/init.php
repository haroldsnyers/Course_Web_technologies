<?php
// To set the active layer on the icon of the navbar for the current page
if (!isset($_POST["course"])& !isset($_POST['Cart']) & !isset($_POST['Pers_account'])){
    $current = 'home';
} else if (isset($_POST['Cart'])){
    $current = 'cart';
} else if (isset($_POST['Pers_account'])){
    $current = 'account';
} else {
    $current = 'other';
}

// include the title and navbar which will be always there
require_once ('view/headView.php');
require_once ('model/formation.php');
require_once ('model/Period.php');
require_once ('model/cartModel.php');

// ---Construction formations of the catalog---

$FormaPHP = new Formation(
    1,
    'PHP',
    'Comprendre les bases de PHP',
    120,
    'Du 15 au 20 décembre 2018',
    'public/images/php-logo.png',
    'A good programmer is someone who always looks both ways before crossing a one-way 
    street.',
    'Doug Linder'
);

$FormaJS = new Formation(
    2,
    'JAVASCRIPT',
    'Comprendre les bases de JAVASCRIPT',
    100,
    'Du 15 au 20 décembre 2018',
    'public/images/javascript-logo.png',
    'There are only two kinds of programming languages: those people always bitch about 
    and those nobody uses.',
    'Bjarne Stroustrup'
);

$FormaPYTHON = new Formation(
    3,
    'PYTHON',
    'Comprendre les bases de PYTHON',
    150,
    'Du 15 au 20 décembre 2018',
    'public/images/Python-Logo.png',
    '"Python\'s a drop-in replacement for BASIC in the sense that Optimus Prime is a 
    drop-in replacement for a truck."',
    'Anonymous'
);

$FormaJAVA = new Formation(
    4,
    'JAVA',
    'Comprendre les bases de JAVA',
    120,
    'Du 15 au 20 décembre 2018',
    'public/images/javalogo.png',
    '"If Java had true garbage collection, most programs would delete themselves upon 
    execution."',
    'Robert Sewell. Programmer.'
);

$FormaC = new Formation(
    5,
    'PROGRAMMATION C',
    'Comprendre les bases de la programmation en C',
    170,
    'Du 15 au 20 décembre 2018',
    'public/images/C-image.png',
    '"It\'s 5.50 a.m.... Do you know where your stack pointer is?"',
    'Anonymous.'
);

$FormaCSHARP = new Formation(
    6,
    'C# - Beginner',
    'Comprendre les bases de CSHARP',
    110,
    'Du 15 au 20 décembre 2018',
    'public/images/Csharp-image.png',
    'The best thing about a boolean is even if you are wrong, you are only off by a bit.',
    'Anonymous'
);

$FormaCSHARP1 = new Formation(
    7,
    'C# - Intermediate',
    'CSHARP intermédiaire',
    150,
    'Du 21 au 26 décembre 2018',
    'public/images/Csharp-image.png',
    'The best thing about a boolean is even if you are wrong, you are only off by a bit.',
    'Anonymous'
);

$FormaCSHARP2 = new Formation(
    8,
    'C# - Advanced',
    'CSHARP Avancé',
    190,
    'Du 27 décemebre 2018 au 1 janvier 2019',
    'public/images/Csharp-image.png',
    'The best thing about a boolean is even if you are wrong, you are only off by a bit.',
    'Anonymous'
);

// ---Regrouping all the formation of the catalog in one array---
$instances = new Period();
$instances->get_instances_of_class('Formation');
$_SESSION['Period'] = serialize($instances);
