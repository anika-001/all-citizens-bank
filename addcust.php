<?php


require_once("db.php");

if(isset($_POST['submit'])){
  $c_name=$_POST['cname'];
  $c_email=$_POST['cmail'];
  $c_id=$_POST['cid'];
	$c_bal=$_POST['cbal'];

	 $query = "INSERT INTO acbank (id,customer_email,customer_name,customer_balance)VALUES ('$c_id', '$c_email', '$c_name','$c_bal')";
if (!mysqli_query($con, $query)) {
        die('An error occurred when submitting your review.');
    } else {
      header('location:customerdetails.php');
    }
}
?>