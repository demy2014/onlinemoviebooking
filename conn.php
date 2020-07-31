<?php
//$conn=mysqli_connect('localhost','root','');
//$db=mysqli_select_db('reservation',$conn);

$conn = mysqli_connect("localhost","root","","test");
 if ($conn) {
	 echo "Sucess";
 }else{
	 die(mysqli_error($conn));
 }
?>