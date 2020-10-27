<?php
    require '../vendor/autoload.php';
    

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" defer
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3bb82678d4.js" defer crossorigin="anonymous"></script>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top shadow">
        <a class="navbar-brand">Blog Ave Noël</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <div class="navbar-nav">
                <a class="nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#">My profile</a>
                <a class="nav-link" href="#">Contact</a>
                <a class="nav-link" href="creationDePost.html">Créer un post</a>
                <a class="btn btn-primary" href="pagePremiereConnexion.html" role="button"><i
                        class="fas fa-sign-in-alt"></i>
                    Sign up</a>
                <a class="btn btn-secondary" href="pageAuthentification.html" role="button"><i
                        class="fas fa-sign-in-alt"></i> Sign in</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card" style="width: 70%;margin:0 auto;margin-top: 10px;">
                <div class="card-header">
                    Sujet
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                Title</cite></footer>
                    </blockquote>
                </div>
            </div>
            <div class="card" style="width: 70%;margin:0 auto;margin-top: 10px;">
                <div class="card-header">
                    Sujet
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source
                                Title</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>


</body>

</html>