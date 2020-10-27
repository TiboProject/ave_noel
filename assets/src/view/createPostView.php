<?php $css = 'index.css';?>
<?php ob_start(); ?> 

    <div class="container">
        <div class="card" style="width: 70%;margin:0 auto;margin-top: 100px;">
            <div class="card-body">
                <form action="index.php?page=post&action=create" method="POST">
                    <input type="hidden" id="idClient" name="idClient" value="1">
                    <div class="form-group">
                        <label for="inputTitle">Le titre du post</label>
                        <input type="text" class="form-control" id ="title" name="title" aria-describedby="titleHelp">
                    </div>
                    <div class="form-group">
                        <label for="inputContent">Le contenu du post</label>
                        <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Mettre en ligne</button>
                </form>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('assets/src/template/headerTemplate.php'); ?>