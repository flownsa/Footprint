<?php
session_start();
require("Customer.php");
require("Product.php");

/*
Needed for carting

$cust_id;
$pro_id;
$pro_price;
$pro_quant;
*/

// var_dump($_GET);
$product_id = $_GET["id"];

// echo $product_id;
echo "<br>";
echo "<br>";

// echo "customer id ".$cust_id;

// Add cart item to table

?>


