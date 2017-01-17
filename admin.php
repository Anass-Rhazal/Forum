<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
  <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

  <!--   CSS  File  -->   


    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
  <!-- <link rel="stylesheet" href="css/materialize.min.css"  type="text/css"> -->
<link rel="stylesheet" href="css/style.css"  type="text/css">

 <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
 

</head>
<body>




<?php

session_start();

if(isset($_POST['ok'])) {
      $user=$_POST['user'];   
      
      $pass=$_POST['pass'];   
   if($user=="admin" && $pass=="admin") {

     $_SESSION['ok']=1;


   } 
  else header("location:admin.html");


}


if(isset( $_SESSION['ok'])){

?>




<div class="container-fluid" style="padding-top: 30px;">
<table class="table table-hover">
<thead style="color:#fff;background-color: #0cc;">
<td style="text-align: center;">Nom</td>
<td style="text-align: center;">Message</td>
<td style="text-align: center;">Email</td>
<td style="text-align: center;">MAJ</td>
</thead>
<tbody>
 
<?php
//var_dump(mail("anass@mailinator.com", "test", "ceci est un email de test"));
$con=new pdo("mysql:host=localhost;dbname=geni;","root","root");

$pre=$con->prepare("select * from message");


$pre->execute();

while($res=$pre->fetch()) {


?>



<tr>

<td style="text-align: center;"><?php echo $res['nom']; ?></td>
<td style="text-align: center;"><?php echo $res['msg']; ?></td>
<td style="text-align: center;"><?php echo $res['email']; ?></td>



<td> <a  class="btn btn-warning circle"   data-toggle="tooltip" data-placement="left" title="Répondre" href="#"><span class="glyphicon glyphicon-pencil"></span></a> 
<a class="btn btn-danger circle" data-toggle="tooltip" data-placement="left" title="Supprimer" href="delete.php?id=<?php echo $res['id']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>

</tr>








<?php

}
$con="";

 ?>


  








</tbody>
</table>
</div>

<?php 
}



 else header("location:admin.html"); 

?>



 <script type="text/javascript" src="old/jquery-2.1.1.js"></script>
   

	<script type="text/javascript" src="js/bootstrap.min.js"></script> 
   

   <script>


$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</body>
</html>