<?php
session_start();

/*

------  This is the homepage for registered users
------  Don't display if user is not in session but stay on footprint

*/

require("Customer.php");
require("Product.php");
include("metaHead.php");

$cust=new Customer;


if(!isset($_SESSION["cust_email"])){
  header("location:login&regft.php");
}

$confirm=$cust->login($_REQUEST["email"], $_REQUEST["pwd"]);

if($confirm>1){
   foreach ($confirm as $info => $value) {
    $_SESSION[$info]=$value;
  }


}

else if($confirm==0) {
  // echo "Cannot login. Incorrect data. Try again <br>";
  header("location:login&regft.php");
}
else if($confirm==1) {
  // echo "User data mismatch! <br>";
  header("location:login&regft.php");
}




//   echo "<pre>";
// print_r($_SESSION);
//   echo "</pre>";



  echo "<span class='mr-auto'> ". $c_nk_or_nm ." </span><br>";

  echo "<span class='ml-auto'> $c_mail</span>";
  echo "<br><br><br>";




include("metaTail.php");
?>