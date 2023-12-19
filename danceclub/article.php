<?php 
    require 'app/app.php';
    $article = getArticleById($_GET['id']);
    $comments = getCommentsForArticle($_GET['id']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos articles</title>
    <link rel="icon"  type="image/x-icon" href="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <script src="js/banned-list.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
    <?php require 'partials/header.php'; ?>

   

    <!--Nos articles-->   
    <article>
        <div class="card">
            <img src="assets/images/art1.jpg" alt=" Quels types de cadeau à offrir?" />
            <div class="card-body">
                <h5 class="card-title">
                    <?= $article['title'] ?>
                </h5>
                <p class="card-text"><?= $article['description'] ?>
                </p>
                <div>
                    <?= $article['content'] ?>
                </div>
                <p class="date"> <span><?= $article['created_at'] ?></span></p>
                <h5>Note des lecteurs: <span><?= isset($article['moyenne_notes']) ? $article['moyenne_notes'] : '0' ?>/5</span></h5>
                
            </div>
        </div>
            <div class="card">
                <div class="comm-card">
                    <h5 class="comment-title">Les commentaires</h5>
                    <?php foreach($comments as $comment): ?>
                    <div class="sub-comm">
                        <p class="date">
                            <span><?= $comment['created_at'] ?></span>
                        </p>
                        <h6><?= $comment['username'] ?></h6>
                        <p class="commentaire">
                            <?= $comment['content'] ?>
                        </p>
                        <h5>Note: <span><?= $comment['stars'] ?>/5</span></h5>
                        <?php if(isset($_SESSION['user']) && $_SESSION['user']['id'] === $comment['user_id']): ?>
                        <a href="?action=delete__comment&commentId=<?= $comment['comment_id'] ?>&id=<?= $article['id'] ?>" class="btn btn-danger">Supprimer</a>
                        <?php endif; ?>
                        <hr>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div id="textForm">
    
    <!-- écriture de commentaire  -->

    <h5>Ecrire un commentaire</h5>
    <form id="textForm" action="?action=add__comment&id=<?= $article['id'] ?>" method="POST">
        <textarea name="content" id="texte" cols="30" rows="10"></textarea>
        <?php if(isset($errors['content'])) { displayErrors($errors['content']); } ?>
        <input type="number" placeholder="Note" name="stars" id="stars" min="1" max="5" style="display: block;width: 100px">
        <?php if(isset($errors['stars'])) { displayErrors($errors['stars']); } ?>
        <button type="button" onclick="publierTexte()">Envoyer</button>
        <div id="erreurMessage" class="erreur-message"></div> <!-- emplacement message d'erreur si mots bannis détectés -->
        
    </form>
</div>

            </div>
        
        <div class="row">
            <div class=btn-article>
                <a href="/" class="btn2">Retour à l'accueil</a>
            </div>
        </div>
    </article>
</main>
    <hr>
    <footer>
        <div class="footer">
            <p>Copyright Just Dance Studio</p>
            
        </div>
    </footer>
</body>
</html>