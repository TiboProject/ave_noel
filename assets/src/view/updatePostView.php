<?php $css = 'index.css';?>
<?php ob_start(); ?>
<?php
        while($data=$posts->fetch()){
            if(empty($data['deleted_at'])){

            
    ?>
    <div class="container">
        <div class="card" style="width: 70%;margin:0 auto;margin-top: 100px;">
            <div class="card-body">
                <form action="index.php?page=post&action=update" method="POST">
                    <input type="hidden" id="idClient" name="idClient" value="1">
                    <input type="hidden" id="idPost" name="idPost" value="<?= htmlspecialchars($data['id'])?>">
                    <div class="form-group">
                        <label for="inputTitle">Le titre du post</label>
                        <input type="text" class="form-control" id ="title" name="title" value="<?= htmlspecialchars($data['title'])?>">
                    </div>
                    <div class="form-group">
                        <label for="inputContent">Le contenu du post</label>
                        <textarea class="form-control" id="content" name="content"><?= htmlspecialchars($data['content'])?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Mettre à jour le post</button>
                </form>
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