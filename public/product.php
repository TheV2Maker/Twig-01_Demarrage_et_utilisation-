<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once '../vendor/autoload.php';

$loader = new FilesystemLoader('../src/View');
$twig = new Environment($loader, [
    'cache' => false,
]);


$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];



echo $twig->render('products.html.twig', ['products' => $products]);

