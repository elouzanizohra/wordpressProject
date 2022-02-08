
<?php
require "authentification.php";
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
$regular_price = $_POST['regular_price'];

$data = [
    'name' => $name,
    'regular_price' => $regular_price
];
$woocommerce->post('products', $data);
header('Location: afficher.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<title>Ajouter un produit</title>
</head>
<body>
<div class="container mt-4 col-lg-4">
            <div class="card border-secondary">
                <div class="card-header bg-secondary">
                    <h4>Ajouter un produit</h4>
                </div>
<div class="card-body">    
<form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="regular_price">Prix</label>
                <input type="number" class="form-control" name="regular_price" placeholder="Prix">
            </div>
            <input type="submit" name="submit" value="Ajouter">
        </form>
</div>
</body>
</html>