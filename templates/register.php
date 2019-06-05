<?php
require dirname(__DIR__) . '/src/Controller/registerController.php';
require 'inc/header.php';
?>

    <h1>Inscription</h1>

<br>


    <main class="container">

        <?php if(isset($success) && $success === 1) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Utilisateur inscrit : Bonjour <?= (isset($user)) ? $user->getUsername() : '' ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

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
                       id="name" name="email" value="<?= $_POST['email']  ?? '' ?>">
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


    <?php require 'inc/footer.php'; ?>
