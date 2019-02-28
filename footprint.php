<?php
define("FT", "footprint");

include("metaHead.php");
include("Product.php");


$prod=new Product;


?>
<!-- styles -->
<!-- title -->
<!-- /head -->
<link rel="stylesheet" href="footprint.css">
<title> <?php echo FT ?></title>
</head>

<body id="body">
<!-- container -->
<div class="container-fluid" style="/*padding-right: 0px; padding-left:0px;*/overflow: hidden;">


  <!-- Rustle Menu -->
<div class="row px-1 d-flex justify-content-between align-items-grid" id="rustle-menu" style="background-color: #141428/*background-image:url('images/sneakers/productbg.jpg')*/;">

  <div class="col-md-12 d-flex align-items-grid" style="height:45px;">
      <span class="d-flex align-items-start">We deliver at no cost within Lagos</span>
    <nav class="top-nav">
    <ul class="nav-0-list">
      <li><a href="#">Customer Service</a></li>
      <li><a href="#">Store Finder</a></li>
      <li><a href="#">About</a></li>
      <li><a href="login&regft.php">Login / Register?</a></li>
    </ul>
</nav>
    </div>


<div class="col-md-4"></div>
<div class="col-md-4 d-flex">

   <a href="footprint.php" id="rustleBig" class=" align-self-center justify-self-center navbar-brand mx-auto">Rus<span class="tle">tle</span></a>


</div>

<div class="col-md-4"></div>

<div class="col-md-12 d-flex justify-content-center" style="height:35px">A home of sneakers

    </div>


<!-- ending Rustle Menu -->
    </div>


<div class="row d-flex align-items-grid bg-dark" >

<div class="col-md-12 text-center text-light">
  advertise here
</div>

</div>

<div class="row">
  <nav class="navtwk">
      <div class="logo-cont mr-auto" >

      <a href="footprint.php" id="rustle" class=" navbar-brand"><span>Rus</span><span class="tle">tle</span></a>

      <div class="navformdiv">
      <input type="search" name="navsearch" placeholder=" Search Footprint" class="navinput"/>

      <button type="submit"
      class="btn navsubmit">find</button>
      </div>

      </div>


    <nav class="main-nav mr-auto align-self-end">
  <ul class="mainnavlist" >
    <li><a href="#">MEN</a></li>
    <li><a href="#">WOMEN</a></li>
    <li><a href="#">BRANDS</a></li>
    <li><a href="#">STYLES</a></li>
    <li><a href="#">SHOE COLLECTIONS</a></li>
    <li><a href="accessrustle.php">SNEAKER NEST</a></li>
  </ul>
</nav>

 <ul class="nav-0-list ml-auto mt-auto">
      <li><a href="login&regft.php"><i class="fa fa-user"></i>&nbsp;Login / Register?</a></li>
      <li><a href="#">Cart <i class="fa fa-shopping-cart"></i><span class="itnum"> 0</span></a></li>

    </ul>




    </nav>


</div>
<!-- sticky-top -->


<!-- container space -->




<!-- product display grid -->

<div class="row top-framer">
<div class="col-12 framer m-2 p-3" style="opacity:1; border-radius:10px">
<div class="row product-framer no-gutters p-3">

<div class="col-12 text-light text-center mt-5">
<h3>ALL NEW WEARS</h3>
<div></div>
</div>

<div class="col-12 text-center mb-5">
<!-- <hr style="border:2px solid brown"> -->
<ul class="mininav">
  <li class="miniitems";><a href="#" class="">SHOES</a></li>
  <li class="miniitems"><a href="" class="">SHIRTS</a></li>
  <li class="miniitems"><a href="" class="">JEANS</a></li>
  </ul>
  <!-- <hr> -->
</div>

<?php

$pro_cont=$prod->get_all_products();
  for($c=0; $c<count($pro_cont); $c++){
    $nw=$pro_cont[$c];
    for($n=0; $n<count($nw); $n++) {

// contains all product info and click to order
    echo "<div class='item-frame'>";
      echo "<div class='info-frame'>";

      echo "<img src='$nw[3]' class='img-item'>";

      echo "<p class='item-name'>$nw[1]</p>";
      echo "<p class='item-price'>$nw[2]</p>";
      echo "<span class='btn btn-primary likebtn'>Like</span>";
      echo "<a href='viewandorder.php?id=$nw[0]' class='order-item text-light btn btn-outline-secondary'>View</a>";


      echo "</div>";
      echo "</div>";

    }
}

?>



</div>
</div>
</div>




  <div class="col-md-12 m-3 p-3" style="background-color:brown; height:auto; opacity:0.7; box-shadow:inset 0 0 10px #ccc;">
    <h2> RAMBLINGS ON PRODUCTS AND SERVICES</h2><br><br>
    <p></p>
  </div>  <!-- end colm in row -->

<!-- </div> -->

  <!-- </div> -->

  <!-- images of products CARDS -->
  <div class="row">
    <div class="col-md-6 d-flex align-items-stretch">
    <div class="card card-ad">
      <div class="card-body">
      <h2 class="card-header">Shop Original Big feet Sneakers</h2>

        <img class="d-block w-100 img-fluid"  src="images/sneakers/maxres.jpg">
    </div>
    </div>
    </div>

    <div class="col-md-6 d-flex align-items-stretch">
      <div class="card card-ad">
        <div class="card-body">
        <h2 class="card-header"> Shop Our Original Wears at amazing discounts Give us a try..</h2>
         <img class="d-block w-100 img-fluid" src="images/Vector.jpg" style="height:350px;">
         </div>
      </div>
    </div>


</div>


<!-- </div> -->

</div> <!-- exit container -->
















<script type="text/javascript" src="../bootstrap4/js/jquery-3.3.1.js">
</script>

<script type="text/javascript" src="../bootstrap4/js/popper.min.js">

$(function(){
  $(".carted").click(function(){
    // alert("I have been clicked o!");
    x=$(".itnum").val();
    alert(x);
    // $(".itnum").val()=1;


  });

});

</script>

<script type="text/javascript" src="../bootstrap4/js/bootstrap.js"></script>

</body>
</html>