<?php
require "authentification.php";
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
$regular_price = $_POST['regular_price'];
$id=$_POST["id"];
$data = [
    'name' => $name,
    'regular_price' => $regular_price
];
$woocommerce->put('products/'.$id, $data);
header('Location: afficher.php');
  }
  else{
      $id=$_GET["id"]; // on cherche l'id
      $product = json_encode($woocommerce->get('products/'.$id)); // on recupere le produit avec l'id qu'on a cherche
      $product = json_decode($product, true);
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<title>Modifier un Poroduit</title>
</head>
<body>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" placeholder="Nom" value="<?php echo $product['name']; ?>" >
            </div>
            <div class="form-group">
                <label for="regular_price">Prix</label>
                <input type="number" class="form-control" name="regular_price" placeholder="Prix" value="<?php echo $product['regular_price']; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="submit" value="Modifier">
        </form>
</body>
</html>