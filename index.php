<?php
$title = "Livre d'or";
require 'elements/header.php';
?>

<div class="container">
    <h1>Livre d'or</h1>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" name="username" id="" placeholder="Votre pseudo" class="form-control">
        </div>
        <div class="form-group">
            <textarea name="message" id="" placeholder="Votre Message" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
</div>

<?php require 'elements/footer.php'; ?>