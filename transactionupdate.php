<?php


require_once("db.php");

if(isset($_POST['tsubmit'])){
  $y_id=$_POST['yid'];
  $y_name=$_POST['yname'];
   $r_id=$_POST['sid'];
  $r_name=$_POST['sname'];
  $amount=$_POST['tamount'];

$query3 = "INSERT INTO transaction (id,sender_Name,receiver_Name,transferred_amount) VALUES ('10011', '$y_name', '$r_name','$amount')";
$sql="Update acbank set customer_balance=customer_balance-$amount where acbank.id='$y_id'";
$sql2="Update acbank set customer_balance=customer_balance+$amount where acbank.id='$r_id'";
$final_query1 = mysqli_query($con,$sql);
$final_query2 = mysqli_query($con,$sql2);
$final_query3 = mysqli_query($con,$query3);
if($final_query1 && $final_query2 && $final_query3){
header('location:transactiondetails.php');
}else{
header('location:transactiondetails.php');
}}

?>
     