<?php
// On inclue la classe pour l'utiliser
require 'classes/Produit.php';

echo 'Projet PHP objet';

// On crée un nouveau produit
$hamac = new produit ();
$hamac->name = "Hamac";
$hamac->description = "Pour se reposer après 5 jours de PHP";
$hamac->imageName = "hamac.jpg";
var_dump($hamac);

// On crée un deuxième objet
$parasol = new Produit();
$parasol->name = "Parasol";
$parasol->description = "Pour faire de l'ombre au hamac";
$parasol->imageName = "parasol.jpg";
var_dump($parasol);

// On crée un tableau pour stocker les objets
$products = [$hamac, $parasol];
var_dump($products);
?>


<?php require 'inc/header.php'; ?>

<main class="container">
    <h1 class="mt-2">Présentation des produits</h1>
    <section class="row">
        <?php foreach ($products as $product) : ?>
            <div class="col-4">
                <div class="card">
                    <img src="img/upload/<?= $product->imageName; ?>" class="card-img-top" alt="Image de <?= $product->name; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->name; ?></h5>
                        <p class="card-text"><?= $product->description; ?></p>
                        <a href="#" class="card-link btn btn-outline-info">Détail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>


<?php require 'inc/footer.php'; ?>
