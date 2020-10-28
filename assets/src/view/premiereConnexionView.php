<?php $css = 'pagePremiereConnexion.css';?>
<?php ob_start(); ?> 
    <div class="container">
        <div class="row">
        <div class="card" style="margin-top: 100px; " >
            <div class="card-body">
            <form action="index.php?page=authentification&action=create" method="POST">
                    <div class="form-group">
                        <label for="premiereConnexion">Première connexion ? Veuillez renseigner les champs
                            ci-dessous</label>
                        <br>    
                        <label for="inputNom">Votre nom</label>
                        <input type="text" class="form-control" id="lastName" name="lastName">
                        <label for="inputPrenom">Votre prénom</label>
                        <input type="text" class="form-control" id="firstName" name="firstName">
                        <label for="inputPseudo">Votre pseudo</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="defPseudo">
                        <small id="defPseudo" class="form-text text-muted">Votre pseudo sera visible par les autres
                            utilisateurs sous les posts/commentaires que vous écrirez.</small>
                        <label for="inputEmail">Adresse Mail</label>
                        <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailPremier">
                        <small id="emailPremier" class="form-text text-muted">Votre adresse mail vous permettra de vous
                            connecter sur ce site.</small>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Valider l'enregistrement</button>
                    <a class="btn btn-outline-info" href="?page=authentification&action=show" role="button"
                        style="margin-top: 10px;">Déjà un compte ? Connectez-vous !</a>
            </form>
            </div>
        </div>
    </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('assets/src/template/headerTemplate.php'); ?>