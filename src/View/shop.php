<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Model\Clothing;
use App\Model\Electronic;

$electronic = new Electronic();

$clothing = new Clothing();

$electronic->findAll();

$clothing->findAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-little-Mvc</title>
</head>
    <body>
        <main>
            <h1>All my Electronics</h1>

            <ul>
                <?php foreach ($electronic->findAll() as $electronicProduct) : ?>
                    <li>
                        <h2><?= $electronic->getName() ?></h2>
                        <p><?= $electronic->getDescription() ?></p>
                        <p><?= $electronic->getPrice() ?></p>
                        <p><?= $electronic->getQuantity() ?></p>
                        <p><?= $electronic->getBrand() ?></p>
                        <p><?= $electronic->getWarantyFee() ?></p>
                        <p><?= $electronic->getCreatedAt()->format('Y-m-d H:i:s') ?></p>
                        <p><?= $electronic->getUpdatedAt() ? $electronic->getUpdatedAt()->format('Y-m-d H:i:s') : 'Jamais' ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>

            <h1>All my Clothings</h1>

            <ul>
                <?php foreach ($clothing->findAll() as $clothingProduct) : ?>
                    <li>
                        <h2><?= $clothing->getName() ?></h2>
                        <p><?= $clothing->getDescription() ?></p>
                        <p><?= $clothing->getPrice() ?></p>
                        <p><?= $clothing->getQuantity() ?></p>
                        <p><?= $clothing->getSize() ?></p>
                        <p><?= $clothing->getColor() ?></p>
                        <p><?= $clothing->getType() ?></p>
                        <p><?= $clothing->getCreatedAt()->format('Y-m-d H:i:s') ?></p>
                        <p><?= $clothing->getUpdatedAt() ? $clothing->getUpdatedAt()->format('Y-m-d H:i:s') : 'Jamais' ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </main>
    </body>
</html>