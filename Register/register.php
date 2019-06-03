<?php
require '../inc/header.php';
require 'register_check.php';
?>

    <h1>Inscription</h1>

<br>


    <main class="container">

        <h1>Ajout d'un produit</h1>

        <form method="post">

            <?php  // createInputText('name', 255, "Nom") ?>

            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text"
                       class="form-control <?= (isset($errorMessageUserName) && !empty($errorMessageUserName)) ? 'is-invalid' : '' ?>"
                       id="name" name="name" value="<?= $_POST['name']  ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageUserName ?? "" ?></div>
            </div>

            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email"
                       class="form-control <?= (isset($errorMessageEmail) && !empty($errorMessageEmail)) ? 'is-invalid' : '' ?>"
                       id="name" email="email" value="<?= $_POST['name']  ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageEmail ?? "" ?></div>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password"
                       class="form-control <?= (isset($errorMessagePassword) && !empty($errorMessagePassword)) ? 'is-invalid' : '' ?>"
                       id="password" name="password" value="<?= $_POST['password']  ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessagePassword ?? "" ?></div>
            </div>
            
            
           

            <input type="submit" value="Créer le produit" class="btn btn-outline-success">

        </form>



    </main>


    <?php require '../inc/footer.php'; ?>
