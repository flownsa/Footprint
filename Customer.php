<?php
class Customer
{
  var $db_conn;
  var $cust_id;
  // define("CART_ID", "$this->cust_id");
  var $cart=array(
    "cart_id"=>0,
    "pro_id"=>[],
    "pro_price"=>[],
    "pro_quant"=>[]
  );

  var $cust_name;
  var $cust_nick;
  var $cust_ph_num;
  var $cust_dob;
  var $cust_status="REG";
  var $likes=[];
  var $cust_size=["shirt"=>"", "shoe"=>"", "jeans"=>""];
  var $cust_email;
  var $cust_pwd;
  var $cust_style=[];
  var $gender;
  var $cust_addr;
  var $cust_ship_addr;

  function __construct()
  {
    $this->db_conn=new mysqli("localhost","flow","n0pa55","Rustle");
  }


  function register($c_nm,$c_gn,$c_nk=" ", $c_pn,$c_pwd,$c_em,$c_addr)
  {
    $this->cust_name=$c_nm;
    $this->gender=$c_gn;
    $this->cust_nick=$c_nk;
    $this->cust_ph_num=$c_pn;
    $c_st=$this->cust_status;
    $this->cust_pwd=$c_pwd;
    $this->cust_email=$c_em;
    $this->cust_addr=$c_addr;


    $q_exp="INSERT INTO customer SET cust_name='$c_nm', gender='$c_gn', cust_nick='$c_nk', cust_ph_num='$c_pn', cust_status='$c_st', cust_pwd='$c_pwd', cust_email='$c_em',cust_addr='$c_addr'";

    $this->db_conn->query($q_exp);

    switch($this->db_conn->affected_rows<1){

      case true:
      echo "Customer not registered. exits...<br>";
      return false;
      break;

      default:
      $this->cust_id=$this->db_conn->insert_id;
// Create unique cart for each customer
      $q2_exp="INSERT INTO carts SET cart_id='$this->cust_id', cart_cust='$this->cust_id'";
      $run_q = $this->db_conn->query($q2_exp);
      if($run_q !=false){
        unset($this->cart["cart_id"]);
      $this->cart["cart_id"]=$this->cust_id;
    }
    else{
      echo $this->db_conn->error;
      return false;
    }

      echo $this->cust_name ." has been successfully registered.<br>";
      echo "UserId = ". $this->cust_id;
      echo"<br>";
      echo "cartId = ". $this->cart["cart_id"];


  }
}


  function login($c_em, $pwd)
  {
    $q_exp="SELECT * FROM customer WHERE cust_email='$c_em'";

    $user=$this->db_conn->query($q_exp);
    // run query

    switch($user->num_rows>0){
// check login
      case false:
      return false;
      break;

      case true:
      $user_r= $user->fetch_assoc();

      switch ($user_r["cust_pwd"]==$pwd) {
        case false:
        // echo "Make sure your passkey is correct<br>";
        $user_r=0;
        return $user_r;
        break;

        case true:
        echo "Login Correct! Welcome :)<br>";
        return $user_r;
      break;
    }
  }
}



function add_to_cart($pro_id, $cust_id, $pro_price, $pro_quant)

{

  // Use constant cart_id
  $this->cart["cart_id"]=$cust_id;
  $this->cart["pro_id"][]=$pro_id;
  $this->cart["pro_price"][]=$pro_price;
  $this->cart["pro_quant"][]=$pro_quant;

  $q_exp = "INSERT INTO cart_items SET cart_cust_id='$cust_id', cart_prod='$pro_id', prod_worth='$pro_price', quantity='$pro_quant'";

  $run_q = $this->db_conn->query($q_exp);
  if($run_q != false){
    return $this->cart;
  }
  else{
    echo $this->db_conn->error;
  }

}



  function remove_style($sty)
  {


    // delete element in style by arguement
    // for($c=0; $c<count($this->cust_style); $c++){
    //   if($this->cust_style[$c]==$sty){

    //   }

    // $this->cust_style;
  }





  function order($prod,$cart_id, $cust)
  {


    // create order id, accounts cart_id, customer id

  }

  function view($v_pro, $v_cust)
  {
    $q_exp = "INSERT INTO viewd SET viewd_pro=$v_pro, viewd_cust_id=$v_cust";


    $add_view = $this->db_conn->query($q_exp);
    if(!$add_view){
      // echo "Not viewed";
      return 0;
    }
    else if ($add_view===true){
      // echo "Viewed";
      return 1;
    }

    // return $this->;
  }
  function pay($ord_id, $sum_paid)
  {

  }
  function like($lk_pro,$lk_sty,$lk_brn)
  {

    $q_exp="INSERT INTO likes SET cust_id='$this->cust_id', liked_prod='$lk_pro', liked_style='$lk_sty', liked_brand='$lk_brn'";
    $this->query_db($q_exp);

  }

  function clear_order()
  {

  }

}



$cust1=new Customer;
// $cust2=new Customer;
// $cust3=new Customer;

// add_to_cart($pro_id, $cust_id $pro_quant, $pro_price)
// $cust=$cust1->login('jemmiles@email.com', 'milepass');

// add_to_cart($pro_id, $pro_quant, $pro_price)

// $cust1->register("Otunba Adewale", "M", "detunba", "0812160311", "password", "otunba@email.com", "n0 30 Asiko Peninsula, off idi-iroko street, Somolu, Lagos");
// $xoc = $cust1->register("Adetutu Oludare", "F", "tutu", "08123410298", "password", "tutu@email.com", "no 45 Astoniga South, off Adams Swave, Sogunle, Lagos");

// var_dump($cust1->add_to_cart(35, 80, 45000, 5 ));

// $ran=[
// 0=>0,
// 1=>1,
// 2=>array('june', 'july')

// ];

// if ($ran>14444){
//   echo "true";
// }
// echo "<pre>";
// print_r($ran);
// echo "</pre>";

// $ran=[];

// echo 0===false;
// echo "<pre>";
// print_r($ran);
// echo "</pre>";

// $cust3->register("jumoke", "F", "jummy", "0998786", "simple", "jum@email.com", "n0 67, logans, marina Lagos");



// $cust1->register("Mufu Daniels","mufulomo","M","munoni","mufuse","08012598622","REG",1,"d_mufu@mailer.com","No 22, Gbadele Ajobo, Halo intercept, An");
// $cust1->cust_details();







// $det=$cust3->login('jemmiles@email.com', 'milepass');

// echo "<pre>";
// print_r($det);
// echo "</pre>";



// $cust2->register("Anderson Chestnut","andernutts","M","2wiceanderson","Swift","08033349824","REG",2,"chestnut@mailing.com","No 23, Okalanda street Off Marley Drive, Jos");

?>