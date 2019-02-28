<?php
class Admin
{
  var $db_conn;
  var $email;
  var $phone;
  var $salary;
  var $admin_name;
  var $admin_priv;
  var $admin_pos;
  var $date_emp;
  var $admin_id;

  function __construct()
  {
    $this->db_conn=new mysqli("localhost","flow","n0pa55","Rustle");
  }

  function admin_login($ad_id, $pwd)
  {
    $q_exp="SELECT * FROM admin WHERE admin_id='$ad_id' and admin_pass='$pwd'";
    $found=$this->db_conn->query($q_exp);


    if(!$found->num_rows) {
      echo "Failed to Login. Try again.";
      return false;
    }
    elseif($found->num_rows){
      $record=$found->fetch_assoc();
      return $record;

      }

    }

  function add_admin($ad_name, $ad_priv, $ad_pos,$date_emp)
  {

    $q_exp="INSERT INTO admin SET admin_name='$ad_name', admin_priv='$ad_priv',admin_pos='$ad_pos',date_employed='$date_emp'";

    $run_q=$this->db_conn->query($q_exp);

    if($run_q->affected_rows) {
      // echo "Successfully added $ad_name to admin";
      $this->admin_id=$this->db_conn->insert_id;
      return 1;
    }

    else {
      // echo "Error! Cannot insert new data without complete credentials";
      return 0;
    }
  }

  function remove_admin($ad_id)
  {
    $q_exp="DELETE FROM admin WHERE admin_id=$ad_id";

    $run_q=$this->db_conn->query($q_exp);

    if($run_q->affected_rows>0){
      return 1;
    }

    elseif($this->db_conn->error){
      return 0;
    }

  }

  function add_customer($pr_nm, $pr_prc, $pr_img, $pr_brn, $pr_sty, $pr_typ)
  {
    $q_exp="INSERT INTO product SET pro_name='$pr_nm', pro_price=$pr_prc, pro_image='$pr_img', pro_brand=$pr_brn, pro_style=$pr_sty, pro_type=$pr_typ";

    $run_q=$this->db_conn->query($q_exp);
    if($run_q->affected_rows>0){
    // echo "$pr_nm was added Successfully";
      return 1;
    }

    else{
      return 0;
    }

    }

    function cust_details($c_em)
  {
// query database for distinct username
    $q_exp="SELECT * FROM customer WHERE cust_email='$c_em'";

    $run_q=$this->db_conn->query($q_exp);

    switch($run_q->num_rows>0) {

      case !true and !$this->db_conn->error:
      // echo "Customer not found";
      return 0;
      break;

      default:
        return $query->fetch_row();
}

}

    function display_customer($row)
  {

    $cust_det=['Customer ID','Customer Name','Customer Phone number','Customer DOB','Customer stat','Customer email','Customer pass','Customer style','Date joined','Gender','Customer address','Customer shipping address',
'Customer nickname','Customer size'];


      echo "<table border=1>";

       echo "<tr>";
       $c=0;
       while($c<count($row)){
        echo "<th>$cust_det[$c]</th>";
        $c++;
      }
        echo "</tr>";
        echo "<tr>";
        foreach ($row as $det => $value) {
        echo "<td>$value</td>";
        }
        echo "</tr>";


        echo "</table>";

    }

  function display_admin($fetch)
  {

    if(!$fetch){
      return false;
    }
    $admNm=$fetch["admin_name"];

    echo "Details for ".strtoupper($admNm);
    echo "<table border=1>";
        echo "<tr><th>admin</th><th>admin properties</th></tr>";
/*$fetch*/
    foreach($fetch as $ad_attr=> $value){
        echo "<tr>";
        echo "<td>$ad_attr</td><td>$value</td>";
        echo "</tr>";
      }
        echo "</table>";
      }

// find a customer/admin detail
// A super admin function
    function fetch_admin($ad_id)
    {

    $q_exp="SELECT * FROM admin WHERE admin_id='$ad_id'";

    $run_q=$this->db_conn->query($q_exp);

    if(!$this->db_conn->error or !$run_q->num_rows>0){
      echo $this->db_conn->error;
      return 0;
    }

    else{
      return $run_q->fetch_assoc();
    }
}

} //closed class function




// $admin_me= new Admin;

// $admin_me->remove_admin(24);

// // $fetch=$admin_me->fetch_admin(7);
// $admin_me->display_admin($admin_me->fetch_admin(23));

// $row=$admin_me->cust_details('modupe@tita.com');
// $admin_me->display_customer($row);

// echo "<pre>";
// print_r($admin_me->display_admin);
// echo "<pre>";

// $admin_me->add_admin("Omoloye Akintunde","ACC_ALL","Staff manager","2019-01-11");
// $admin_me->add_admin("Anderson","ACC_BASC","Sales Rep","2019-02-10");
// $admin_me->fetch_admin("Anderson");

// $admin_me->add_product('Reebok C4 low top', 38000,'Reebokc4.img', 2, 1, 2);

?>

