<?php


require 'autoload.php';


// On crée un nouveau produit
$hamac = new produit ();
$hamac->setName("Hamac");
$hamac->setDescription("Pour se reposer après 5 jours de PHP");
$hamac->SetImageName ("hamac.jpg") ;
var_dump($hamac);

// On crée un deuxième objet
$parasol = new Produit();
$parasol->setName ("Parasol");
$parasol->setDescription ("Pour faire de l'ombre au hamac");
$parasol->SetImageName ("parasol.jpg");
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
                    <img src="img/upload/<?= $product->getImageName(); ?>" class="card-img-top" alt="Image de <?= $product->getName(); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->getName(); ?></h5>
                        <p class="card-text"><?= $product->getShortDescription(); ?></p>
                        <a href="#" class="card-link btn btn-outline-info">Détail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>


<?php require 'inc/footer.php'; ?>
