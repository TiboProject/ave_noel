<?php $css = 'index.css';?>
<?php ob_start(); ?>
<?php
        while($data=$comments->fetch()){
            if(empty($data['deleted_at'])){

            
    ?>
    <div class="container">
        <div class="card" style="width: 70%;margin:0 auto;margin-top: 100px;">
            <div class="card-body">
                <form action="index.php?page=comment&action=update" method="POST">
                    <input type="hidden" id="idClient" name="idClient" value="1">
                    <input type="hidden" id="idComment" name="idComment" value="<?= htmlspecialchars($data['id'])?>">
                    <div class="form-group">
                        <label for="inputContent">Le contenu du commentaire</label>
                        <textarea class="form-control" id="content" name="content"><?= htmlspecialchars($data['content'])?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Mettre à jour le commentaire</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        }
    }
    $comments->closeCursor();
    ?>
    <?php $content = ob_get_clean(); ?>
    <?php require('assets/src/template/headerTemplate.php'); ?>