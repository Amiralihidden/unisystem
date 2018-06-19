<?php
session_start();
$user=$_POST['username'];
$pass=$_POST['password'];
include_once ('db.php');

$q=$connection->prepare("SELECT * FROM karbaran WHERE  user=:user && pass=:pass");
$q->bindParam(':user',$user);
$q->bindParam(':pass',$pass);
$q->execute();
$q->setFetchMode(PDO::FETCH_ASSOC);
$w=$q->fetch();
if ($w>0) {
$_SESSION['shomare']=$w['shomare'];
$_SESSION['semat']=$w['semat'];
    header("Location:./indexx.php");
    exit();
}else{
    header("Location:./login.php");
exit();
}