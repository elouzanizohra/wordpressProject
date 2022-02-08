<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>liste des clients</title>
</head>
<body>
<div class="container mt-4">
            <div class="card border-secondary">
                 <div class="card-header bg-secondary text-white">
                     <h1> <center> GESTION DES Clients </center> </h1>
                </div>
                <br>
                <div class="card-header bg-info text-white">
         
                    <a href="ajouter_client.php" class="btn btn-light">Ajouter un client</a>
                    
                </div>
                
    <?php
    $clients=file_get_contents("http://localhost:8080/wordpress_project/all_customers.php");
    $clients=json_decode($clients,true);
    ?>
   

   <table class="table table-hover">
        <tr>
            <td>Nom</td>
            <td>Email</td>
            <td>Ville</td>
            <td>Code Postale</td>
            <td>Action</td>

        </tr>
        <?php
         foreach($clients as $client){
             echo "
             <tr>
             <td>".$client["first_name"]." ".$client["last_name"] ."</td>".
             "<td>".$client["email"]. "</td>".
             "<td>".$client["billing"]["city"]. "</td>".
             "<td>".$client["billing"]["postcode"]."</td>".
             "<td><a href='modifierClient.php?id=".$client['id']."'>Modifier</a> 
             <a href='supprimerClient.php?id=".$client['id']."' onclick=\"myFunction()\">Supprimer</a></td>";
             
         }
        ?>

    </table>
    <script>
function myFunction() {
  confirm("voulez vous supprimer ce produit? ");
}
</script>
    
</body>
</html>