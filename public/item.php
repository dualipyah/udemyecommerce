<!DOCTYPE html>
<html lang="en">

<head>
<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php" ); ?>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Custom CSS -->

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">  
                <?php get_categories(); ?>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title">Card title</h2>

                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img class="featurette-image img-fluid mx-auto" src="images/500by500.svg" alt="Generic placeholder image">
            </div>
        </div>
    <?php include(TEMPLATE_BACK . DS . "footer.php" ); ?>
</html>

