<?php $css = 'index.css';?>
<?php ob_start(); ?> 
<?php
        while($data=$resultPost->fetch()){
            if(empty($data['deleted_at']));
 ?>

 <a href="?page=post&action=show" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Retour à la liste des posts</a>
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
                    <cite title="Source Title">
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
                </div>
<?php
    }
?>
                <p class="font-italic text-center size=10pt">Commentaires :</p>
                <div class="card text-center">
                    <?php
                        while($data = $resultComment->fetch()){
                            if(empty($data['deleted_at'])){
                    ?>
                    <div class="card-header">
                        <?= htmlspecialchars($data['username'])?>, le <?= htmlspecialchars($data['date'])?>
                        <?php
                            if(!empty($data['date_modif'])){
                        ?>
                        <br> Modifié le <?=htmlspecialchars($data['date_modif'])?>
                        <?php

                            }
                        ?>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <?= htmlspecialchars($data['content'])?>
                        </p>
                        <a href="?page=comment&action=update&id=<?=$data['id'];?>" class="card-link">Modifier</a>
                        <a href="?page=comment&action=delete&id=<?=$data['id'];?>"class="card-link">Supprimer</a>
                    </div>
                        <?php
                            }
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require('assets/src/template/headerTemplate.php'); ?>




</body>

</html>