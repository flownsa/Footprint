<?php
session_start();

/*

------  This is the homepage for registered users
------  Don't display if user is not in session but stay on footprint


*/
require("metaHead.php");
include("Customer.php");

// <!-- styles -->


$cust=new Customer;

if(!isset($_SESSION['cust_id']) and !isset($_REQUEST)) {
  header("location:login&regft.php");
}

else if(isset($_REQUEST['email']) and isset($_REQUEST['pwd'])){
//  User may have tried to getin from login page

  $confirm=$cust->login($_REQUEST["email"], $_REQUEST["pwd"]);

if(!$confirm>=1){
  header("location:login&regft.php");

}

else if($confirm>1){
   // collect session data
   foreach ($confirm as $info => $value) {
    $_SESSION[$info]=$value;
}
    $_SESSION;
  header("location:rustle.php");

}


}


// else if(isset($_SESSION)){
  header("location:rustle.php");

// }













// save the session if just coming in

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";










include("metaTail.php");
?>