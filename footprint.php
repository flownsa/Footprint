<?php
session_start();
$_SESSION;
define("FT", "footprint");

include("metaHead.php");
include("Product.php");

$prod=new Product;

?>

<link rel="stylesheet" href="footprint.css">
<title> <?php echo FT ?></title>
</head>

<body id="body">
<!-- container -->
<div class="container-fluid" style="/*padding-right: 0px; padding-left:0px;*/overflow: hidden;">


  <!-- Rustle Banner -->
<div class="row px-1 d-flex justify-content-between align-items-grid" id="rustle-menu" style="background-color: #141428/*background-image:url('images/sneakers/productbg.jpg')*/;">

  <div class="col-md-12 d-flex align-items-grid" style="height:45px;">
      <span class="d-flex align-items-start">We deliver at no cost within Lagos</span>
    <nav class="top-nav">
    <ul class="nav-0-list">
      <li><a href="#">Customer Service</a></li>
      <li><a href="#">Store Finder</a></li>
      <li><a href="#">About</a></li>
      <li>
      <?php
      if (isset($_SESSION['cust_name'])){
        echo $_SESSION['cust_name'];
        echo "<a href='logout.php'>";
        echo "Logout";

      }
      else{
      echo "<a href='login&regft.php'>";
        echo "Login / Register?";
      }

      ?>
      </a></li>
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

<!-- ending Rustle welcome banner -->
    </div>


<div class="row d-flex align-items-grid bg-dark" >

<div class="col-md-12 text-center text-light">advertise here</div>

</div>

<div class="row">
<!-- <div class="col-12"> -->
  <nav class="navtwk">

   <ul class="nav-0-list ml-auto">
      <li><a href="login&regft.php"><i class="fa fa-user"></i>&nbsp;Login / Register?</a></li>
      <li><a href="#">Cart <i class="fa fa-shopping-cart"></i><span class="itnum"> 0</span></a></li>

    </ul>

      <div class="logo-cont mr-auto">

      <div style="overflow: hidden;">
      <a href="footprint.php" id="rustle" class=" navbar-brand"><span>Rus</span><span class="tle">tle</span></a>
      </div>

      <div class=" input-group navformdiv">
      <input type="search" name="navsearch" placeholder=" Search Footprint" class="navinput">
      <a type="submit" class="btn btn-outline-secondary navsubmit"><i class="fa fa-search"></i></a>
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




    </nav>
</div>



<!-- images of products CARDS -->
  <div class="row py-3" style="background-color:brown; height:465px; opacity:0.7; box-shadow: 0em 1em 0.5em black; overflow:hidden">
    <div class="col-md-6 advertBlock">
    <div class="advertDisplay bg-light">

        <div id="display-gallery" class="carousel carousel-fade slide" data-ride="carousel">
          <!-- indicators -->
            <ol class="carousel-indicators">
              <li data-target="#display-gallery" class="active" data-slide-to="0"></li>
              <li data-target="#display-gallery" data-slide-to="1"></li>
              <li data-target="#display-gallery" data-slide-to="2"></li>
            </ol>
  <!-- inner carousel -->
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="images/redstar.jpg" alt="allstar">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="images/sneakersketch.jpg" alt="sneakskt">
              </div>

               <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="images/classyBrown.jpg" alt="sneakskt">
              </div>

            </div> <!-- ends carousel inner-->

            <!-- controls -->

            <a href="#display-gallery" class="carousel-control-prev" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true">
              </span>
              <span class="sr-only">Previous</span>
            </a>
            <!-- Nexxt -->
            <a href="#display-gallery" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>

      </div>  <!-- carousel tail-->

  <!-- </div> -->
<!-- closing big display row -->
  </div>



    </div>


<div class="col-md-6 advertBlock">
    <div class="advertDisplay bg-light text-center">
    <h4>Rustle With me ?</h4>
    <div>
        <img class="d-block h-100 w-100 img-fluid" src="images/navbarflip.jpeg">
    </div>
    </div>
    </div>


</div>

<!-- sticky-top -->


<!-- container space -->
<!-- card-ad -->



<!-- product display grid -->

<div class="row top-framer">
<div class="col-12 framer m-2 p-3" style="opacity:1;">
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
      ?>


    <div class='card item-frame'>
    <div class='card-body info-frame text-center'>
    <div class="text-center">

    <img src='<?php echo $nw[3];?>' class='img-item img-fluid w-100'>
    <h4 class="card-footer item-name rustleIntro"><?php echo $nw[1]; ?></h4>

    <h4 class='item-price'><?php echo $nw[2]?></h4>
    <span class='btn btn-primary likebtn'>Like</span>
    <a href="viewandorder.php?id=<?php echo $nw[0]; ?>" class="text-light btn btn-outline-success">View</a>
    </div>
    </div>
    </div>
<?php
    }
  }
    ?>



</div>
</div>
</div>



<div class="ftFooter">
<!--  -->

</div>

</div> <!-- exit container -->
















<script type="text/javascript" src="../bootstrap4/js/jquery-3.3.1.js">
</script>

<script type="text/javascript" src="../bootstrap4/js/popper.min.js">

$(function(){
  $(".carted").click(function(){
    alert("I have been clicked o!");
    x=$(".itnum").val();
    alert(x);
    // $(".itnum").val()=1;


  });

});

</script>

<script type="text/javascript" src="../bootstrap4/js/bootstrap.js"></script>

</body>
</html>