<?php

class Order
{
  var $db_conn;
  var $ord_id;
  var $ord_stat=['cleared', 'pending', 'dropped'];
  var $ord_by;
  var $ord_cart;
  var $ord_pro;
  var $ord_worth;

  function __construct()
  {
    $this->db_conn = new mysqli("localhost","flow","n0pa55","Rustle");
  }


  /*
  update order/make order
  delete order
  view orders
  */

  function create_order($ord_by, $ord_pro, $ord_ct_id){
    $q_exp = "INSERT INTO order SET 'order_stat'=$this->ord_stat[1], 'order_by'=$ord_by, 'order_prod'=$ord_pro, 'order_cart_id'=$ord_ct_id";
    // 'order_worth'=$ord_wrt
    $run_q = $this->db_conn->query($q_exp);
    if($this->db_conn->affected_rows>0){
      echo "Order made";
    }
    else if($this->db_conn->affected_rows<1){
      echo "not inserted";
      echo $this->db_conn->error;
    }


  }

  function view_orders($cust_id){
    $q_exp="SELECT * FROM orders WHERE 'order_by'= $cust_id";
    $order = $this->db_conn->query($q_exp);
    if(!$order){
      echo "order record not found";
      return 0;
    }
    else if($order){
      return $order->fetch_assoc();
    }
    else{
      echo $this->db_conn->error;
    }
  }





}

$order1 = new Order;

  // function make_order($ord_by, $ord_pro, $ord_ct_id){


$order1->create_order(15, 35, 1)
?>

