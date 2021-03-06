<?php

class Product
{
  var $db_conn;

  var $pro_id;
  var $pro_name;
  var $pro_size; // NOT UNIQUE TO ALL
  var $pro_cat; //NOT UNIQUE TO ALL
  var $pro_price;
  var $pro_image;
  var $pro_brand;
  var $pro_color=[];
  var $pro_style;
  var $pro_desc;
  var $stock_num=0;

  function __construct()
  {
    $this->db_conn=new mysqli("localhost","flow","n0pa55","Rustle");

  }

  function find_product($pr_id)
    {

    $q_exp="SELECT * FROM product WHERE pro_id=$pr_id";

    $run_q=$this->db_conn->query($q_exp);

    switch($run_q){

      case false:
      echo "Product not found";
      return false;
      break;

      case true:
      $all = $run_q->fetch_assoc();

      return $all;
}
}





   function find_productByName($pr_nm)
    {

    $q_exp="SELECT * FROM product WHERE pro_name LIKE '%$pr_nm%' ORDER BY pro_id DESC";

    $run_q=$this->db_conn->query($q_exp);

    switch($run_q) {

      case false:
      // echo "Product not found";
      return false;
      // break;

      default:
      $all = $run_q->fetch_all(MYSQLI_BOTH);
      $total = $run_q->num_rows;

      // return $all;

      return [$all, $total];
}
}

protected function remove_product($pr_id)
  {
    $q_exp="DELETE FROM product WHERE pro_id=$pr_id";

    $run_q=$this->db_conn->query($q_exp);

    if($this->db_conn->affected_row==true){
      echo "DELETED!";
      return 1;
    }

    else if($this->db_conn->affected_row==false){
      echo "No record match to delete";
      return 0;
    }
    else{
      echo "Unknown error please report to admin.";
      echo $this->db_conn->error;
    }

  }


  function get_all_products()
    {

    $q_exp="SELECT * FROM product";

    $run_q=$this->db_conn->query($q_exp);

      while($all[]=$run_q->fetch_assoc()){
  }
  return $all;
}

  protected function add_product($pr_nm, $pr_prc, $pr_img, $pr_brn, $pr_sty, $pr_cat)
  {
    $q_exp="INSERT INTO product SET pro_name='$pr_nm', pro_price=$pr_prc, pro_image='$pr_img', pro_brand=$pr_brn, pro_style='$pr_sty', pro_cat=$pr_cat;";

    $this->db_conn->query($q_exp);

// Test condition for query output
    switch($this->db_conn->insert_id){

    case $this->db_conn->error:
      // echo "Cannot add product at the moment.";
      echo $this->db_conn->error;
      return false;
      break;

    case true:
      echo "$pr_nm was added Successfully<br>";
      echo "PRODUCT ID: ".$this->db_conn->insert_id;
      $this->stock_num+=1;
      break;

      default:
      echo "Uncaught error. Please contact admin";
  }
    }



}





// $shoe=new Product;

// $pro_cont=$shoe->get_all_products();
// return [$all, $total];

// echo "<pre>";
//       print_r($pro_cont);
//       echo "</pre>";

  //   echo "<br>";
  //   echo "<br>";
  //   echo $pro_cont[1];
  //   foreach($pro_cont[0] as $item) {
      // echo "<pre>";
      // print_r($item);
      // echo "</pre>";
  // }

// var_dump(
// $all=$shoe->find_productByName("nike");

// echo "<pre>";
//       print_r($all);
//       echo "</pre>";

// foreach($all as $item){
// $shoe->views(10, 8);

// $pro_na = $shoe -> remove_product(40);

// echo $pro_na;

// $pro_names = $shoe->get_all_products();


//   echo '<pre>';
//   print_r($pro_names);
//   echo '</pre>';

  //   $pro_na = $shoe->find_product(35);

  // echo '<pre>';
  // print_r($pro_na);
  // echo '</pre>';




// $shoe->add_product("Nike Airmax 1999", 32000, "airmax99.img", 5, 2, 1);

// $shoe->add_product("Nike Boost", 34000, "NBST.img", 1, 2, 1);

 // $shoe->add_product("Fila Disruptor II", 45000, "filadisruptor.img", 1, 3, 1);

// $shoe->add_product("Adidas Yeezus II", 28000, "Yeezy2.img", 5, 2, 1);
// $shoe->add_product("Nike retro 6", 42000, "retro6.img", 1, 2, 1);
// echo("<br>");
// $shoe->product_details(17);


// $shoe->stock_num=5;

// echo "$shoe->stock_num";
// echo "$shoe->stock_num";

?>