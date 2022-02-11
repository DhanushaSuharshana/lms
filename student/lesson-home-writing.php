<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk</title>
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
    </head>
    <body class="layout layout-header-fixed layout-sidebar-fixed">

        <!--Top header -->
        <?php include './top-header.php'; ?>
        <!--End Top header -->

        <div class="layout-main">

            <!-- Navigation -->
            <?php include './writing-navigation.php'; ?>
            <!--End Navigation -->

            <div id="lesson">
                <div class="layout-content">
                    <div class="layout-content-body">
                        <div class="row gutter-xs panel"> 
                            <div class="col-xs-12 col-md-12">
                                <div class="card">
                                    <div class="breadcrumb">
                                        <span class="inline odd first"><a href="/">Home</a></span> 
                                        <span class="delimiter">»</span> 
                                        <span class="inline even"><a href="" title="">Writing</a></span> 
                                        <span class="delimiter">»</span> 
                                        <span class="inline odd last"><a href="" title="">Lesson 1</a></span>
                                    </div>
                                    <div class="col-md-4"  >
                                        <div class="tab-content">
                                            <div class="tab-pane fade active in home-1"  >
                                                <h3 class="text-center text-padd-btm" >Writing</h3>
                                                <p class="text-justify">  Writing is a medium of human communication that represents language and emotion with signs and symbols. Learning to write English can be a frustratingly slow process.  I think to improve your writing you really need to write something in English more or less every day. .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 tab-padding-col"  > 
                                        <div class="tab-content tab-padding-col-zero"  >
                                            <div class="tab-pane fade active in home-1"  >
                                                <img src="img/img/writing.jpg" alt="" class="img-responsive" width="100%" style="padding-left: 0px; padding-right: 0px;"/>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row gutter-xs">
                                        <div class="col-sm-6">
                                            <div class="row gutter-xs">
                                                <div class="card">
                                                    <div class="col-md-5">
                                                        <a class="card-img overlay overlay-hover" href="view-lesson-2.php">
                                                            <div class="overlay-gradient">
                                                                <img class="card-img img-responsive" src="img/people.jpg" alt="Television">
                                                            </div>
                                                            <div class="overlay-content">
                                                                <div class="overlay-content overlay-top">
                                                                    <h4 class="overlay-title"> Beach</h4>
                                                                </div>
                                                                <div class="overlay-content overlay-bottom overlay-slide-up">
                                                                    <div class="media">
                                                                        <div class="media-body media-middle">
                                                                            <center><button class="btn btn-outline-warning" type="button">VIEW MORE</button></center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-7 inner-content ">
                                                        <div class="card-body">
                                                            <h4 class="card-title fw-l">
                                                                <a class="link-muted" href="view-lesson-2.php">Picture Description - Beach</a>
                                                            </h4>
                                                            <small class="text-justify">Esse quibusdam voluptatibus quos, unde minima incidunt voluptatum hic pariatur vero sequi distinctio non eum qui soluta saepe…</small>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small>
                                                                <span class="inline odd first"><a href="view-lesson-1.php">View</a></span> 
                                                                <span class="delimiter">»</span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row gutter-xs">
                                                <div class="card">
                                                    <div class="col-md-5">
                                                        <a class="card-img overlay overlay-hover" href="#">
                                                            <div class="overlay-gradient">
                                                                <img class="card-img img-responsive" src="img/market.jpg" alt="Earth">
                                                            </div>
                                                            <div class="overlay-content">
                                                                <div class="overlay-content overlay-top">
                                                                    <h4 class="overlay-title">Market</h4>
                                                                </div>
                                                                <div class="overlay-content overlay-bottom overlay-slide-up">
                                                                    <div class="media">
                                                                        <div class="media-body media-middle">
                                                                            <center><button class="btn btn-outline-warning" type="button">VIEW MORE</button></center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-7 inner-content">
                                                        <div class="card-body">
                                                            <h4 class="card-title fw-l">
                                                                <a class="link-muted" href="#"> Picture Description - Market</a>
                                                            </h4>
                                                            <small>Esse quibusdam voluptatibus quos, unde minima incidunt voluptatum hic pariatur vero sequi distinctio non eum qui soluta saepe…</small>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small>
                                                                <span class="inline odd first"><a href="/">View</a></span> 
                                                                <span class="delimiter">»</span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row gutter-xs">
                                                <div class="card">
                                                    <div class="col-md-5">
                                                        <a class="card-img overlay overlay-hover" href="#">
                                                            <div class="overlay-gradient">
                                                                <img class="card-img img-responsive" src="img/child-park.jpg" alt="City">
                                                            </div>
                                                            <div class="overlay-content">
                                                                <div class="overlay-content overlay-top">
                                                                    <h4 class="overlay-title"> Children Park</h4>
                                                                </div>
                                                                <div class="overlay-content overlay-bottom overlay-slide-up">
                                                                    <div class="media">
                                                                        <div class="media-body media-middle">
                                                                            <center><button class="btn btn-outline-warning" type="button">VIEW MORE</button></center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-7 inner-content">
                                                        <div class="card-body">
                                                            <h4 class="card-title fw-l">
                                                                <a class="link-muted" href="#">Picture Description - Children Park</a>
                                                            </h4>
                                                            <small>Esse quibusdam voluptatibus quos, unde minima incidunt voluptatum hic pariatur vero sequi distinctio non eum qui soluta saepe…</small>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small>
                                                                <span class="inline odd first"><a href="/">View</a></span> 
                                                                <span class="delimiter">»</span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <div class="row gutter-xs">
                                                <div class="card">
                                                    <div class="col-md-5">
                                                        <a class="card-img overlay overlay-hover" href="#">
                                                            <div class="overlay-gradient">
                                                                <img class="card-img img-responsive" src="img/class-room.jpg" alt="Telephone">
                                                            </div>
                                                            <div class="overlay-content">
                                                                <div class="overlay-content overlay-top">
                                                                    <h4 class="overlay-title"> Class Room</h4>
                                                                </div>
                                                                <div class="overlay-content overlay-bottom overlay-slide-up">
                                                                    <div class="media">
                                                                        <div class="media-body media-middle">
                                                                            <center><button class="btn btn-outline-warning" type="button">VIEW MORE</button></center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-7 inner-content">
                                                        <div class="card-body">
                                                            <h4 class="card-title fw-l">
                                                                <a class="link-muted" href="#">Picture Description -  Class Room</a>
                                                            </h4>
                                                            <small>Esse quibusdam voluptatibus quos, unde minima incidunt voluptatum hic pariatur vero sequi distinctio non eum qui soluta saepe…</small>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small>
                                                                <span class="inline odd first"><a href="/">View</a></span> 
                                                                <span class="delimiter">»</span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                        </div>   
                    </div>
                </div>
            </div>
            <div class="layout-footer">
                <div class="layout-footer-body">
                    <small class="version">Version 1.4.0</small>
                    <small class="copyright"><?php echo date('Y') ?>&copy; Elephant <a href="#">Synotect Private Limited.</a></small>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/check-login.js" type="text/javascript"></script>
    </body>
</html>