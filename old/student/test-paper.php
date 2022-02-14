<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Self Learning English</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">

        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/application.min.css">
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="layout layout-header-fixed layout-sidebar-fixed">

        <!--Top header -->
        <?php include './top-header.php'; ?>
        <!--End Top header -->

        <div class="layout-main">

            <!-- Navigation -->
            <?php include './disable-navigation.php'; ?>
            <!--End Navigation -->

            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="card"> 
                        <form id="form-data" method="POST"> 
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 m-y" style="padding: 50px 0px 0px 50px;">
                                        <li class="ticket-list-separator">
                                            <div class="ticket-list-count">
                                            </div>
                                            <div class="ticket-list-heading"><h4>1). What are you looking ______ ?</h4> </div>
                                        </li>
                                        <div class="form-group">

                                            <div class="col-sm-9">
                                                <div class="custom-controls-stacked m-t">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">for</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">on</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">against</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">in</span>
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 m-y" style="    padding: 15px 0px 0px 50px;">

                                        <li class="ticket-list-separator">
                                            <div class="ticket-list-count">
                                            </div>
                                            <div class="ticket-list-heading"><h4>2). Whom are you talking ____?</h4> </div>
                                        </li>
                                        <div class="form-group">

                                            <div class="col-sm-9">
                                                <div class="custom-controls-stacked m-t">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_2" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">too</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_2" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">to</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_2" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">by</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_2" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">over</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 m-y" style="padding: 15px 0px 0px 50px;">
                                        <li class="ticket-list-separator">
                                            <div class="ticket-list-count">
                                            </div>
                                            <div class="ticket-list-heading"><h4>3).  I am angry _____ my sister.</h4> </div>
                                        </li>
                                        <div class="form-group">

                                            <div class="col-sm-9">
                                                <div class="custom-controls-stacked m-t">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_3" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">for</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_3" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">to</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_3" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">with</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_3" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">at</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 m-y" style="padding: 15px 0px 0px 50px;">
                                        <li class="ticket-list-separator">
                                            <div class="ticket-list-count">
                                            </div>
                                            <div class="ticket-list-heading"><h4>4). Can you agree ______ my proposal.</h4> </div>
                                        </li>
                                        <div class="form-group">

                                            <div class="col-sm-9">
                                                <div class="custom-controls-stacked m-t">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_4" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">into</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_4" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">with</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_4" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">to</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_4" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">too</span>
                                                    </label>

                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 m-y" style="padding: 15px 0px 0px 50px;">
                                        <li class="ticket-list-separator">
                                            <div class="ticket-list-count">
                                            </div>
                                            <div class="ticket-list-heading"><h4>5). Don’t look _____ on him.</h4> </div>
                                        </li>
                                        <div class="form-group"> 
                                            <div class="col-sm-9">
                                                <div class="custom-controls-stacked m-t">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_5" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">by</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_5" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">on</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_5" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">for</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_5" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">down</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-2  pull-left "  style="padding: 0px 0px 15px 55px;"> 

                                        <input type="hidden" name="action" value="UPDATESTUDENTLEVEL"/> 
                                        <input type="hidden" name="id" id="id" value="<?php echo $_SESSION['id'] ?>"/>
                                        <button type="submit" class="btn btn-primary btn-block" id="create">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="layout-footer">
                <div class="layout-footer-body">
                    <small class="version">Version 1.4.0</small>
                    <small class="copyright"><?php echo date('Y') ?>&copy;  <a href="#">Synotect Private Limited.</a></small>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="ajax/js/student.js" type="text/javascript"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>

    </body>
</html>