<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>liste des produits</title>
</head>
<body>
   
    <div class="container mt-4">
            <div class="card border-secondary">
                 <div class="card-header bg-secondary text-white">
                     <h1> <center> GESTION DES produits </center> </h1>
                </div>
                <br>
                <div class="card-header bg-secondary text-white">
         
                    <a href="add_product.php" class="btn btn-light">Ajouter un produit</a>
                    
                </div>
                
    <?php
    $products=file_get_contents("http://localhost:8080/wordpress_project/all_products.php");
    $products=json_decode($products,true);
    ?>
   <table>
        <tr>
            <td>Nom</td>
            <td>Prix</td>
            <td>Status</td>
            <td>Image</td>
            <td>Action</td>

        </tr>
        <?php
         foreach($products as $product){
             echo "
             <tr>
             <td>".$product["name"]. "</td>".
             "<td>".$product["regular_price"]. "</td>".
             "<td>".$product["status"]. "</td>".
             "<td><img 
             height='50px'
             width='50px'
             src='".$product["images"][0]["src"]."'></td>".
             "<td><a href='modifier.php?id=".$product['id']."'>Modifier</a> 
             <a href='supprimer.php?id=".$product['id']."' onclick=\"myFunction()\">Supprimer</a></td>";
             
         }
        ?>

    </table>
            </div>
    <script>
function myFunction() {
  confirm("voulez vous supprimer ce produit? ");
}
</script>
    
</body>
</html>