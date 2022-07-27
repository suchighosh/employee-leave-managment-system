<?php
  
  session_start();
  
  header('location:login.php');
  $con = mysqli_connect('localhost','root');

  mysqli_select_db($con,'userlogin');
  
  $name = $_POST['user_name'];
  $mobile = $_POST['mobile_no'];
  $company = $_POST['company_name'];
  $mail = $_POST['e_mail'];
  $password = $_POST['pass'];

  $q = "select * from signup where username = '$name' and mobile = '$mobile' and company = '$company' and email = '$mail' and password = '$pass'";
  $result = mysqli_query($con, $q);
  $num = mysqli_num_rows($result);
  if($num==1){
  	echo "Duplicate data"
  }
  else{
  	$in = "insert into signup(username , mobile , company , email , password) values($name , $mobile , $company , $mail , $password)";
  	mysqli_query($con,$in);
  }

?>