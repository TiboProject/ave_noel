<?php $css = 'index.css';?>
<?php ob_start(); ?> 
    <?php
        while($data=$posts->fetch()){
            if(empty($data['deleted_at'])){

            
    ?>
    <div class="container">
        <div class="row">
            <div class="card" style="width: 70%;margin:0 auto;margin-top: 10px;">
                <div class="card-header">
                <h3 class="fst-italic"> <?= htmlspecialchars($data['title']) ?></h3>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p> 
                            <?= htmlspecialchars($data['content'])?>
                        </p>
                        <footer class="blockquote-footer">
                            <p> 
                            <i class="fas fa-at"></i> <?= htmlspecialchars($data['username'])?> 
                            </p>
                        <cite title="Created at">
                            <p> 
                            <i class="far fa-clock"></i> Le <?= htmlspecialchars($data['date'])?>
                            </p>
                        </cite>
                        <?php
                        if(!empty($data['date_modif'])){

                        ?>
                        <cite title="Updated at">
                            <p> 
                                Modifié le <?= htmlspecialchars($data['date_modif'])?>
                            </p>
                        </cite>
                        <?php
                        }
                        ?>
                        </footer>
                    </blockquote>
                    <i style="color:#007bff" class="far fa-comments"> </i> <a href="?page=comment&id=<?=$data['id'];?>" class="card-link">Commentaire(s) | </a>
                    <i style="color:#007bff" class="fas fa-book"></i> <a href="?page=post&action=read&id=<?=$data['id'];?>" class="card-link">Lire ce post | </a>
                    <?php
                            if(isset($_SESSION['id']) && ($_SESSION["id"]==$data['id_client'])){
                    
                    ?>
                    <i style="color:#007bff" class="fas fa-pencil-alt"></i> <a href="?page=post&action=update&id=<?=$data['id'];?>" class="card-link">Modifier | </a>
                    <i style="color:#007bff" class="far fa-trash-alt"></i> <a href="?page=post&action=delete&id=<?=$data['id'];?>" class="card-link">Supprimer | </a>
                    <?php
                        }
                    
                    ?>
                    <?php
                            if(isset($_SESSION['id'])){
                    
                    ?>
                    <i style="color:#007bff" class="fas fa-plus-circle"></i> <a href="?page=comment&action=create&id=<?=$data['id'];?>" class="card-link">Ajouter un commentaire</a>
                    <?php
                        }
                    
                    ?>
                </div>
            </div>  
        </div>
    </div>
    <?php
        }
    }
    $posts->closeCursor();
    ?>
    <?php $content = ob_get_clean(); ?>
    <?php require('assets/src/template/headerTemplate.php'); ?>

