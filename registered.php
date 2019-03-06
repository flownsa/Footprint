<?php
require("Customer.php");
include("metaHead.php");


// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

$fname=$_REQUEST["fname"];
$gender=$_REQUEST["gender"];
$nick=$_REQUEST["nick"];
$ph_num=$_REQUEST["ph_num"];
$u_pass=$_REQUEST["pwd"];
$email=$_REQUEST["email"];
// $sty=$_REQUEST["style"];
$addr=$_REQUEST["addr"];


$cust3=new Customer;

$cust3->register($fname, $gender, $nick, $ph_num, $u_pass, $email, $addr);



// ($c_nm,$c_gn,$c_nk="", $c_pn,$c_st="REG",$c_pwd,$c_em,$c_addr)
// $cust3->register('Jeremy Michael', 'M','nick','08033906723','REG','passer','jemmiles@email.com',1,'No 94, Royal palace way, Adegoke peninsula, Okarika, Abia State',1);

// $cust3->register("Robert Pierre", "M", "Robsnick", "01-569773","secret", "rob@myemail.com", "No 3 Farouk Abolaji Crescent, Abafo, Oyo, Oyo");








?>

<!--
echo "<pre>";
print_r($_POST);
echo "</pre>"; -->