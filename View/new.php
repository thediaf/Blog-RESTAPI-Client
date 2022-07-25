<?php ob_start() ?> 

<div class="mx-auto my-6 p-4 max-w-3xl bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
<form action="../index.php?action=new" method="post">
    <h5 class="text-xl m-3 text-center font-medium text-gray-900 dark:text-white">Ajouter un film</h5>
        <div class="relative z-0 mb-6 w-full group">
            <label for="titre">Titre</label>
            <input type="text" id="titre" name="title"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                    border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                    focus:border-blue-600 peer" 
            >
        </div>

        <div class="relative z-0 mb-6 w-full group">
            <label for="spectator">Contenu</label>
            <textarea name="content" id="" cols="30" rows="10"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 
                    border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 
                    focus:border-blue-600 peer"
            ></textarea>
        </div>
        
    </fieldset>
    <button type="submit" class="text-white bg-blue-700 h-10 hover:bg-blue-800 focus:ring-4 focus:outline-none 
            focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
    >
        Enregistrer
    </button>
</form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('View/template.php'); ?>