<?php ob_start() ?> 

<div class="mx-auto my-6 p-4 max-w-3xl bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8">
        <h5 class="text-xl text-center font-medium text-gray-900 dark:text-white">
            Liste des utilisateurs
        </h5>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    #
                </th>
                <th scope="col" class="py-3 px-6">
                    Nom
                </th>
                <th scope="col" class="py-3 px-6">
                    Prenom
                </th>
                <th scope="col" class="py-3 px-6">
                    Login
                </th>
                <th scope="col" class="py-3 px-6">
                    Role
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1; foreach ($users as $user) {  ?> 
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?= $i++ ?>
                </th>
                <td class="py-4 px-6">
                    <?= $user->lastname?>
                </td>
                <td class="py-4 px-6">
                    <?= $user->firstname?>
                </td>
                <td class="py-4 px-6">
                    <?= $user->login?>
                </td>
                <td class="py-4 px-6">
                    <?= $user->role?>
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            
    <?php } ?>
        </tbody>
    </table>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('View/template.php'); ?>