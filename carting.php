<?php
session_start();
require("Customer.php");
require("Product.php");

// var_dump($_GET);
$product_id = $_GET["id"];

// echo $product_id;
echo "<br>";
echo "<br>";
$cust_id=$_SESSION["cust_id"];

// echo "customer id ".$cust_id;

// Add cart item to table

?>


