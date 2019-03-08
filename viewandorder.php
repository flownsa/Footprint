 <?php

session_start();
require("Product.php");
  $new_pro = new Product;

require("Customer.php");
require("metaHead.php");
/*
     <!-- </head> -->
*/

  $pr_id = $_GET['id'];


  // if(!$_SESSION){
  // use cookies (IP ADDRESS as customer ID)
  $cust = new Customer;
  // }

  $pro=$new_pro->find_product($pr_id);

  $cust_view=$cust->view($pr_id, $_SESSION["cust_id"]);


  echo "<link rel='stylesheet' href='footprint.css'>";
  echo "<title>viewproductFT</title>";
include("footprintHeader.php");
// </head> included

?>


<div class="container">
<div class="row">
<!-- body defined -->

  <div class="order-conts  col-6">
  <div class="ord-img-cont">
  <?php
 echo "<img class='pro-img' src=".$pro['pro_image']. ">";
?>
  </div>
  </div>

<div class="col-6 order-conts">
<?php
  echo "<h2 class='order-head'>".$pro['pro_name']."</h2>";
  echo "<p class='write-up'>";
  echo $pro['pro_price']."<br>";
  echo $pro['pro_style']."<br>";
  echo "Get 10% off this item. <br>";
  echo $pro['pro_brand']."<br>";
  echo $pro['pro_cat']."<br>";

  // echo $pro['pro_color'];
  // echo $pro['pro_desc'];
  // echo $pro['pro_size'];
  ?>

   <!-- CART -->
  <a class='btn btn-success'>Order</a>
  <a href="carting.php?id=<?php $pro; ?>" id='carted' class='btn btn-primary carted'>Add to cart</a>


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
  $(".carted").click(function(){
    // x=$(".itnum").text();
    cart_counter=Number($(".itnum").html())+1;
    // alert(x);
    $(".itnum").text(cart_counter);


  });

});

</script>

<script type="text/javascript" src="../bootstrap4/js/popper.min.js"></script>
<script type="text/javascript" src="../bootstrap4/js/bootstrap.js"></script>

<!-- close body from footprintHeader.php -->
</body>
</html>