<?php
session_start();

if(!isset($_SESSION['cust_email'])){
  header("location:login&regft.php");
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

  if(isset($_SESSION["cust_nick"]) and $_SESSION["cust_nick"]!="")
  {
    $c_nk_or_nm=$_SESSION["cust_nick"];
  }

  else  {
    $c_nk_or_nm=strtoupper($_SESSION["cust_name"]);
  }


/*
    ------  This is the homepage for registered users
*/

include("Product.php");
include("Customer.php");
require("metaHead.php");
$cust=new Customer;


?>
 <!-- styles -->

<title>rustlehmpg</title>
</head>




<div class='rustlecase' style='border:1px solid black'>

<div class="left">
This is rustle left side
<div>
    <a href="footprint.php" class="btn-secondary">Back to Footprint</a>
</div>
</div>

<div class="middle">
This is rustle middle pane
</div>

<div class="right">
This is rustle right pane
<div>
  <a href="logout.php?id=logout" class="btn-danger">Logout</a>
</div>
</div>

</div>



<!-- // save the session if just coming in -->











<?php
include("metaTail.php");
?>