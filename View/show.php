<?php ob_start() ?> 

    <a href="../index.php?action=show&id=<?= htmlspecialchars($article->id);?>" 
            class="block p-6 mt-6 w-full bg-white rounded-lg border border-gray-200 
            shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"
    >
        <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
            <?= $article->titre;?>
        </h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">
            <?= $article->contenu?>
        </p><br>
        <p class="font-normal text-right text-gray-700 dark:text-gray-400">
            Date publication: <?= $article->dateCreation?>
        </p>
    </a>

<?php $content = ob_get_clean(); ?>
<?php require('View/template.php'); ?>