<?php ob_start(); ?> 

<div class="mx-auto my-6 p-4 max-w-md bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
    <form class="space-y-6" action="../index.php?action=signup" method="post">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Inscription</h5>
        <div>
            <label for="login" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Login</label>
            <input type="text" name="login" id="login" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-4 w-full h-10"  required="">
        </div>
        <div>
            <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prenom</label>
            <input type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-4 w-full h-10"  required="">
        </div>
        <div>
            <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom</label>
            <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-4 w-full h-10"  required="">
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mot de passe</label>
            <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-4 w-full h-10" required="">
        </div>
        <div>
            <label for="password_retype" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Re-tapez le mot de passe</label>
            <input type="password" name="password_retype" id="password_retype" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-4 w-full h-10" required="">
        </div>
        <button type="submit" class="w-full h-10 text-white bg-blue-700 hover:bg-blue-800  font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            S'inscrire
        </button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Vous avez un compte? <a href="../index.php?action=login" class="text-blue-700 hover:underline dark:text-blue-500">Connectez-vous</a>
        </div>
    </form>
</div>
     
<?php $content = ob_get_clean(); ?>
<?php require('View/template.php'); ?>