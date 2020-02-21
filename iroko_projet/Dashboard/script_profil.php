<?php
session_start();
$bdd = NEW PDO('mysql:host=127.0.0.1;dbname=projet_iroko','root','');
if (isset($_GET['id']) AND $_GET['id'] > 0)
 {
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
	$requser->execute(array($getid));
	$userinfo = $requser->fetch();

 }
?>
