<?php


use App\Model\Product; // Importer le namespace de la classe Product

echo __NAMESPACE__; // Ceci affichera le namespace du fichier courant, pas nécessairement celui de la classe Product

$product = new Product(); // Créer une instance de la classe Product
$products = $product->findAll(); // Appeler la méthode findAll() sur l'instance de Product

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produits</title>
</head>
<body>
<!-- Votre code HTML ici -->
</body>
</html>
