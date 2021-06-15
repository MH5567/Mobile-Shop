<?php

//require MySQL Connection
require ('database/DBController.php');

//require Product.php connection
require ('database/Product.php');

//require Cart.php connection
require ('database/Cart.php');


//DBController object
$db = new DBController();

//Product object
$product = new Product($db);
$product_shuffle = $product->getData();

//Cart object
$Cart = new Cart($db);

