


<?php


$id=$_GET['id'];


$con=new pdo("mysql:host=localhost;dbname=geni;","root","root");


$pre=$con->prepare("delete from  message  where  id=?  ") ; 

$pre->execute(array($id))  ;



$con="";

header("location:admin.php");




?>












 