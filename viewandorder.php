 <?php

session_start();
require("Product.php");
require("metaHead.php");
/* <!-- styles -->


 <!-- title -->
     <!-- </head> -->
*/

  $pr_id = $_GET['id'];

  $new_pro = new Product;
  $pr_id=$_GET['id'];
  $pro=$new_pro->find_product($pr_id);

  $pro_like=$new_pro->views(17, 9);

  echo "<link rel='stylesheet' href='footprint.css'>";
  echo "<title>viewproductFT</title>";
// title included
include("footprintHeader.php");
// include("Order.php");

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

  // CART
  echo "<a class='btn btn-success'>Order</a>  ";
  echo "<a id='carted' class='btn btn-primary carted'>Add to cart</a>";





  echo "</p>";
  ?>
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