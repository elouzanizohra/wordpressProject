<?php 
require "authentification.php";
$id=$_GET["id"];
$woocommerce->delete('customers/'.$id, ['force' => true]); 
header('Location: afficher_client.php');
?>