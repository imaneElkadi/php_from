<?php
echo "connection databasee::";
$servername='localhost';
$usernamw='root';
$psw='';
$bd='gestEtudiant';
$cnx= new mysqli($servername,$username,$psw,$bd);

if($cnx->connect_error)
  die("error: $cnx->connect_error");
//test req
 $req="select * from etudiant";


?>
