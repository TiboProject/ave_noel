<?php $css = 'pageAuthentification.css';?>
<?php ob_start(); ?> 

<ul class="list-group" style="width: 80%;margin:0 auto;margin-top: 100px;">
  <li class="list-group-item">E-mail : <?=$_SESSION['mail']?></li>
  <li class="list-group-item">Pseudo : <?=$_SESSION['username']?></li>
  <li class="list-group-item">Nom : <?=$_SESSION['lastName']?></li>
  <li class="list-group-item">Prénom : <?=$_SESSION['firstName']?></li>
  <li class="list-group-item">Dernière connexion : <?=$_SESSION['lastConnection']?></li>
</ul>
<?php $content = ob_get_clean(); ?>
<?php require('assets/src/template/headerTemplate.php'); ?>