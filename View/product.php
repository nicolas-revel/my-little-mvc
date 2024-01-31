<?php

use App\Model\Clothing;
use App\Model\Electronic;

require_once __DIR__ . '/../vendor/autoload.php';

if (isset($_GET['id_product'])) {
    $electronicInstance = new Electronic();
    $electronic = $electronicInstance->findOneById($_GET['id_product']);
    $clothingInstance = new Clothing();
    $clothing = $clothingInstance->findOneById($_GET['id_product']);

    if ($electronic || $clothing) {
        echo "<h1>Détails du produit</h1>";
        echo "<h2>Nom du produit : " . ($electronic ? $electronic->getName() : $clothing->getName()) . "</h2>";
        echo "<p>Description du produit : " . ($electronic ? $electronic->getDescription() : $clothing->getDescription()) . "</p>";
    } else {
        echo "<p>Le produit n'est pas disponible.</p>";
    }
} else {
    echo "<p>L'ID est invalide.</p>";
}

?>

<form method="get" action="">
    <label for="id_product">Choisissez l'ID du produit :</label>
    <input type="text" id="id_product" name="id_product">
    <input type="submit" value="Afficher les détails">
</form>
