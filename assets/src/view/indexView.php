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
                    <?= htmlspecialchars($data['title']) ?>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p> 
                            <?= htmlspecialchars($data['content'])?>
                        </p>
                        <footer class="blockquote-footer">
                            <p> 
                                <?= htmlspecialchars($data['username'])?> 
                            </p>
                        <cite title="Created at">
                            <p> 
                                Le <?= htmlspecialchars($data['date'])?>
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
                    <a href="?page=comment&id=<?=$data['id'];?>" class="card-link">Commentaire(s)</a>
                    <a href="?page=post&action=read&id=<?=$data['id'];?>" class="card-link">Lire ce post</a>
                    <a href="?page=post&action=update&id=<?=$data['id'];?>" class="card-link">Modifier</a>
                    <a href="?page=post&action=delete&id=<?=$data['id'];?>" class="card-link">Supprimer</a>
                    <a href="?page=comment&action=create&id=<?=$data['id'];?>" class="card-link">Ajouter un commentaire</a>
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

