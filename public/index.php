<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php" ); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/shop-homepage.css" type="text/css" >
    <link rel="stylesheet" href="css/styles.css" type="text/css" >
   

</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        <!-- categories here -->
            <?php include(TEMPLATE_FRONT . DS . "side_nav.php" ); ?>
            <div class="col-md-9">
                <div class="row carousel-holder">
                    <div class="col-md-12">
                        <!-- carousel -->
                        <?php include(TEMPLATE_FRONT . DS . "slider.php" ); ?>
                    </div>
                </div>
                    <div class="row">
                        <!-- see functions.php -->
                        <?php get_products(); ?>
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <h4><a href="#">Like this template?</a></h4>
                            <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                            <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
 

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js" ></script>

</body>

</html>
<?php include(TEMPLATE_BACK . DS . "footer.php" ); ?>
