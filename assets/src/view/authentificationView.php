<?php $css = 'pageAuthentification.css';?>
<?php ob_start(); ?> 
<?php
if($this->session->get("errorLogin")!= null){
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <?php
    echo $this->session->showFlashMessage("errorLogin");
  ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <?php
    }
?>
</div>

    <div class="card" style="width: 30%;margin:0 auto;margin-top: 100px;">
        <img src="assets/public/images/image_connexion2.png" class="card-img-top">
        <div class="card-body">
            <form action="index.php?page=authentification&action=connect" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Adresse Mail</label>
                    <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Votre adresse mail habituelle sur ce
                        site.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
                <a class="btn btn-outline-info" href="?page=authentification&action=create" role="button"
                    style="margin-top: 10px;">Pas
                    encore de compte ? Inscrivez-vous !</a>
            </form>

        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('assets/src/template/headerTemplate.php'); ?>
