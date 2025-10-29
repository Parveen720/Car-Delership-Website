<?php
  $car=$_POST['car'];
  $carmodel=$_POST['carmodel'];
  $yourname=$_POST['yourname'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $number=$_POST['number'];
  $youraddress=$_POST['youraddress'];



  $conn=new mysqli('localhost','root','','bookcar');
  if ($conn->connect_error) {
    echo"$conn->connect_error";
  	die( 'connect failed : '.$conn->connect_error);
  }else{
  	$stmt=$conn->prepare("insert into registration(car,carmodel,yourname,gender,email,password,number,youraddress)values(?,?,?,?,?,?,?,?)");
  	$stmt->bind_param("ssssssis",$car,$carmodel,$yourname, $gender, $email, $password, $number,$youraddress);
  	$execval=$stmt->execute();
    echo $execval;
  	echo"you car is booked successfully...<br/>";
  	$stmt->close();
  	$conn->close();
  }
?>