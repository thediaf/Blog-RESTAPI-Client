<?php ob_start() ?> 
<?php  foreach ($articles as $article) {  ?> 
    <div class="col-md-offset-1 col-md-10">
        <article class="">
            <h2>
                <a href="../index.php?action=show&id=<?= htmlspecialchars($article->id);?>" class="">
                    <?= $article->titre;?>
                </a>
            </h2>
            <p>
                <?= $article->contenu?>
            </p>
            <p>
                <strong>Date d'ajout :</strong> 
                <?= htmlspecialchars($article->dateCreation);?>
            </p>
        </article>
    </div>
<?php } ?>


<?php $content = ob_get_clean(); ?>
<?php require('View/template.php'); ?>