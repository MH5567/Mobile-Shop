<?php
ob_start();
//include header.php file
include ('header.php');
?>

<?php

//include cart item if it is not empty
count($product->getData('cart')) ? include ('Template/_cart-template.php') : include ('Template/notfound/_cart_notfound.php');
//include top sale end

//include wishlist template start
count($product->getData('wishlist')) ? include ('Template/_wishlist-template.php') : include ('Template/notfound/_wishlist-notfound.php');
//include wishlist templete end

//include top sale start
include ('Template/_new-phones.php');
//include top sale end


?>

<?php
//include footer.php file
include ('footer.php');
?>

