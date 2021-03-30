<?php

require 'connec.php';

$pdo = new PDO(DSN, USER, PASS);
// GET ALL ARTICLE 

$statement = $pdo->query("SELECT * FROM article");
$articles = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($articles as $article) {  ?>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="card">
                        <img src="https://www.impactshoes.com/sites/default/files/puma-rsx-japanorama-blanc-noir-gris-rouge-bleu01.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $article['title'] ?></h5>
                            <p class="card-text"><?= $article['content'] ?></p>
                            <a href=<?= "delete.php?id=".$article['id'] ?> class="btn btn-danger">Delete</a>
                            <a href=
                            <?="edit.php?id=".$article['id'] ?> 
                            class="btn btn-success">Edit</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>