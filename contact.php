<?php

if(isset($_POST["ok"])){


$nom=htmlspecialchars($_POST['nom']);
$msg=htmlspecialchars($_POST['msg']);
$email=htmlspecialchars($_POST['email']);





try{
$con=new pdo("mysql:host=localhost;dbname=geni;","root","root");
}
catch( PDOException $e) { echo "probleme de connexion"; }





try{
$pre=$con->prepare("insert into message(nom,msg,email) values (?,?,?)");
}
catch( PDOException $e) { echo "probleme d'insertion"; }



try{
$pre->execute(array($nom,$msg,$email));
}
catch( PDOException $e) { echo "probleme d'execution"; }




$con="";

header('Location: ' . $_SERVER['HTTP_REFERER']);

}





?>