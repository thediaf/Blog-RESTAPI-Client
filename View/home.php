<?php ob_start() ?> 
    <div class="grid grid-cols-3 gap-3 w-auto mx-auto">
<?php  foreach ($articles as $article) {  ?> 
    
    <a href="../index.php?action=show&id=<?= htmlspecialchars($article->id);?>" 
            class="block p-6 m-6 max-w-sm bg-white rounded-lg border border-gray-200 
            shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"
    >
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            <?= $article->titre;?>
        </h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">
            <?= $article->contenu?>
        </p>
    </a>
    
    <?php } ?>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('View/template.php'); ?>