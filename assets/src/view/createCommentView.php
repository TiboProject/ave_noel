<?php $css = 'index.css';?>
<?php ob_start(); ?> 
<?php
        while($data=$resultPost->fetch()){
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
                    <?php
                            if(isset($_SESSION['id']) && ($_SESSION["id"]==$data['id_client'])){
                    
                    ?>
                    <i style="color:#007bff" class="fas fa-pencil-alt"></i> <a href="?page=post&action=update&id=<?=$data['id'];?>" class="card-link">Modifier | </a>
                    <i style="color:#007bff" class="far fa-trash-alt"></i> <a href="?page=post&action=delete&id=<?=$data['id'];?>" class="card-link">Supprimer | </a>
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
    $resultPost->closeCursor();
    ?>
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