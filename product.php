 <?php

session_start();
require("metaHead.php");
require("Product.php");

// FIND PRODUCT
// DISPLAY PRODUCTS

// LIKE PRODUCT

// ADD TO CART

  $pro = new Product;

if($_GET['id']==99){
echo "ALL PRODUCTS<br><br><br>";

  $pr=$pro->get_all_products();

  echo '<pre>';
  print_r($pr);
  echo '</pre>';

}

else{

  $pr_id = $_GET['id'];

echo "THIS PRODUCT<br><br><br>";

  // $pr_id=$_GET['id'];
  $all_pro=$pro->find_product($pr_id);

  echo '<pre>';
  print_r($all_pro);
  echo '</pre>';



}



// else if(isset($_GET[1])){
//

   // echo '<pre>';
   // print_r($_GET);
   // echo '</pre>';

// }



// Display Product on top of table

    // echo "Details for ".strtoupper($row["pro_name"]); echo "<br><br>";


// function display_product($row)
//   {

//     echo "<table border=1>";
//       echo "<tr>";
//       for


//     echo "</tr>";
//     echo "</table>";
//       }








// echo '<pre>';
// print_r($_GET);
// echo '</pre>';



 ?>