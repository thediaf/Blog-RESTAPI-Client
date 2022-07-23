<?php ob_start() ?> 

<form action="../index.php?action=new" method="post">
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" id="first_name" name="title">
    </div>
    <div class="form-group">
        <label for="last_name">Last Name</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php $content = ob_get_clean(); ?>
<?php require('View/template.php'); ?>