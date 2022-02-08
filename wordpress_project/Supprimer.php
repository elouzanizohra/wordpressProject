
<?php 
require "authentification.php";
$id=$_GET["id"];
$woocommerce->delete('products/'.$id, ['force' => true]); 
header('Location: afficher.php');
?>