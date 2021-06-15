<?php
ob_start();
//include header.php file
include ('header.php');
?>

<?php

//include banner area start
    include('Template/_banner-area.php');
//include banner area end


//include top sale start
include ('Template/_top-sale.php');
//include top sale end

//include special price start
include ('Template/_special-price.php');
//include special price end

//include banner adds start
include ('Template/_banner-adds.php');
//include banner adds end

//include new phones start
include ('Template/_new-phones.php');
//include new phones end

//include blogs start
include ('Template/_blogs.php');
//include blogs end
?>


<?php
//include footer.php file
include ('footer.php');
?>