<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Help Center - Ecollage.lk</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta property="og:type" content="website">
        <meta property="og:image" content="../../elephant.html">
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/application.min.css">
        <link rel="stylesheet" href="css/demo.min.css">


    </head>
    <body class="layout layout-header-fixed">


        <?php include './top-header.php'; ?>
        <div class="layout-main">
            <?php include './navigation.php'; ?>
            <div class="layout-content">
                <div class="layout-content-body"> 
                    <?php
                    $HELP_CENTER = new HelpCenter(NULL);

                    foreach ($HELP_CENTER->getQuestionsByPosition(1) as $help_center) {
                        ?>
                        <div class="card">
                            <a href="# "class="  card-toggler" title="Collapse">  
                                <div class="card-header  ">
                                    <div class="col-md-8">
                                        <h5>
                                            <?php echo $help_center['title'] ?> <span class="text-success" > </span>
                                            <span class="fas-fa fa-chevron-down">   </span> 
                                        </h5>
                                    </div>
                                    <div class="col-md-4">
                                        <span class=" icon icon-angle-down pull-right f-right"></span>
                                    </div> 
                                </div>
                            </a> 

                            <div class="card-body" style="display: none;">
                                <hr style="margin: 0px 0px 20px 0px;">

                                <?php echo $help_center['description'] ?>
                            </div>
                        </div> 
                    <?php } ?>

                </div>
            </div>
            <?php include './footer.php'; ?>
        </div>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/demo.min.js"></script>

    </body>

</html>