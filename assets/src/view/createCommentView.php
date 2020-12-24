<?php $css = 'index.css';?>
<?php ob_start(); ?> 
    <div class="container">
        <div class="card" style="width: 70%;margin:0 auto;margin-top: 100px;">
            <div class="card-body">
                <form action="index.php?page=comment&action=create&id=<?=$_GET['id']?>" method="POST">
                    <input type="hidden" id="idClient" name="idClient" value=<?=$_SESSION['id']?>>
                    <input type="hidden" id="id" name="id" value="<?=$_GET['id']?>">
                    <div class="form-group">
                        <label for="inputContent">Votre commentaire</label>
                        <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Mettre en ligne le commentaire</button>
                </form>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('assets/src/template/headerTemplate.php'); ?>