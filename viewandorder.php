 <?php

session_start();
// var_dump($_SESSION);
require("Product.php");
  $product = new Product;
  // use cookies for unregistered and session for registered customers
require("Customer.php");
  $cust = new Customer;
require("metaHead.php");
/*
     <!-- </head> -->

*/
     // var_dump($_GET);
  // $pro_cart = $_GET
  $pr_id = $_GET['id'];
  // var_dump($pr_id);


  // if(!$_SESSION){
  // use cookies (IP ADDRESS as customer ID)
  // $cust = $_SESSION;
  // }

// GET PRODUCT FULL DETAILS
  $prod=$product->find_product($pr_id);
// ADD VIEW TO CUSTOMER ACCOUNT AND DB
  $cust_view=$cust->view($pr_id, $_SESSION["cust_id"]);


  echo "<link rel='stylesheet' href='footprint.css'>";
  echo "<title>viewproductFT</title>";
include("footprintHeader.php"); // </head> included

?>


<div class="container">
<div class="row">
<!-- body defined -->

  <div class="order-conts  col-6">
  <div class="ord-img-cont">
  <?php
 echo "<img class='pro-img' src=".$prod['pro_image']. ">";
?>
  </div>
  </div>

<div class="col-6 order-conts">
<?php
  echo "<h2 class='order-head'>".$prod['pro_name']."</h2>";
  echo "<p class='write-up'>";
  echo $prod['pro_price']."<br>";
  echo $prod['pro_style']."<br>";
  echo "Get 10% off this item. <br>";
  echo $prod['pro_brand']."<br>";
  echo $prod['pro_cat']."<br>";

  // echo $pro['pro_color'];
  // echo $pro['pro_desc'];
  // echo $pro['pro_size'];
  ?>

   <!-- CART -->
  <a class='btn btn-success'>Order</a>
  <a href="carting.php?id=<?php echo $pr_id; ?>" id='carted' class='btn btn-primary carted'>Add to cart</a>


</p>

</div>
  <!-- left side -->


    <!-- order options -->

  <!-- price -->
    <!-- add to cart -->
</div>


</div>

<?php
/*
   (((((  ORDER PAGE )))))




   ***** DISPLAY CART *****
   *****  DISPLAY PRODUCT *****
   *****  LIKE PRODUCT *****

*/



 ?>


<script type="text/javascript" src="../bootstrap4/js/jquery-3.3.1.js">
</script>


<script type="text/javascript">
// $(document).ready(function(){
$(function(){
  var cart_quant = 0;
   $('#carted').click(function(){
    // cart quantity
      // cart_quant += 1;
      // alert(searchvalue);
      $('#itnum').load("carting.php",{in_cart: });
    });



});

</script>

<script type="text/javascript" src="../bootstrap4/js/popper.min.js"></script>
<script type="text/javascript" src="../bootstrap4/js/bootstrap.js"></script>

<!-- close body from footprintHeader.php -->
</body>
</html>