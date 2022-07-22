<?php ob_start() ?> 
    <div class="col-md-offset-1 col-md-10">
        <article class="">
            <h2>
                <a href="../public/index.php?route=article&idArt=<?= htmlspecialchars($article['id']);?>" class="chapter">
                    <?= htmlspecialchars($article['titre']);?>
                </a>
            </h2>
            <p>
                <?= $article['contenu']?>
            </p>
            <p>
                <strong>Date d'ajout :</strong> 
                <?= htmlspecialchars($article['dateCreation']);?>
            </p>
        </article>
    </div>


<?php $content = ob_get_clean(); ?>
<?php require('View/template.php'); ?>