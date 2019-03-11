<?php
include('Product.php');

$search = $_REQUEST['handle'];

// var_dump($search);

//exit;

?>

<?php
	// create object of Mart class
	$products = new Product();

	$allproducts = $products->find_productByName($search);

	if($allproducts[1] >= 1){
		// loop through products records
		foreach($allproducts[0] as $item){
?>


		<div class='card item-frame' style="position: relative;
      height:350px;flex:1 0 185px;">
    <div class='card-body info-frame text-center'>
    <div class="text-center">

    <img src='<?php echo $item["pro_image"];?>' class='img-item img-fluid w-100'>
    <h4 class="card-footer item-name rustleIntro"><?php echo $item["pro_name"]; ?></h4>

    <h4 class='item-price'>&#8358;<?php echo $item["pro_price"]?></h4>
    <span class='btn btn-primary likebtn'>Like</span>
    <a href="viewandorder.php?id=<?php echo $item["pro_id"];?>" class="text-light btn btn-outline-success">View</a>
    </div>
    </div>
    </div>

<?php
		}

	}
	else{
		echo "<div class='alert alert-danger'>No Product Found</div>";
	}
?>