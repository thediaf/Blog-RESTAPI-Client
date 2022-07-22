<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon blog</title>
    
    <!-- CDN Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <header>
            <nav class="container navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Mon blog</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Accueil</a></li>
                        <?php foreach ($categories as $category) { ?>
                            <li>
                                <a href="../index.php?action=category&id=<?= htmlspecialchars($category['id']);?>">
                                    <?= htmlspecialchars($category['libelle']);?> 
                                </a>
                            </li>
                        <?php  } ?>
                    </ul>
                </div>
            </nav>
        </header>

        <section>
            <div class="container">
                <div  class="row text-center">
                    <?= $content ?>
                </div>
            </div>
        </section>
    </div>
    <!-- CDN JQuery -->
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</body>

</html>
