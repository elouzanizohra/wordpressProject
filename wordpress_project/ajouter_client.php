<?php
require "authentification.php";
if(isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $ville = $_POST['ville'];
    $code_postal = $_POST['code_postal'];
    
    

    $data = [
        'email' => $email,
        'first_name' => $prenom,
        'last_name' => $nom,
        'billing' => [
            'city' => $ville,
            'postcode' => $code_postal
        ]
];
print_r($woocommerce->post('customers', $data));
header('Location: afficher_client.php');
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
                    <h4>Ajouter un client</h4>
                </div>
<div class="card-body">                
<form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <div class="form-group">
                <label for="name">Prenom</label>
                <input type="text" class="form-control" name="prenom" placeholder="Prenom">
            </div>
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="regular_price">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="regular_price">Ville</label>
                <input type="text" class="form-control" name="ville" placeholder="ville">
            </div>
            <div class="form-group">
                <label for="regular_price">Code Postale</label>
                <input type="text" class="form-control" name="code_postal" placeholder="Code Postale">
            </div>
        
            <input type="submit" name="submit" value="Ajouter">
        </form>
</div>        
</body>
</html>