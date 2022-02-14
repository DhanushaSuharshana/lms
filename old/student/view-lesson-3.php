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
        <link rel="stylesheet" href="css/compose.min.css">
        <link rel="stylesheet" href="css/application.min.css">
    </head>

    <body class="layout layout-header-fixed layout-sidebar-fixed">

        <!--Top header -->
        <?php include './top-header.php'; ?>
        <!--End Top header -->

        <div class="layout-main">
            <!-- Navigation -->
            <?php include './listening-navigation.php'; ?>
            <!--End Navigation -->

            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="card">  
                        <div class="container">
                            <div class="breadcrumb" style="margin-bottom: -12px;">
                                <span class="inline odd first"><a href="/">Home</a></span>
                                <span class="delimiter">»</span>
                                <span class="inline even"><a href="" title="">Listning</a></span>
                                <span class="delimiter">»</span>
                                <span class="inline odd last"><a href="" title="">Lesson 1</a></span>
                                <span class="delimiter">»</span>
                                <span class="inline odd last"><a href="" title="">Listening English Practice Level 1</a></span>
                            </div>
                            <div class="col-md-9 col-sm-9"> 
                                <h2> </h2> 
                                <div class="panel-group wrap" id="bs-collapse"> 
                                    <div class="panel" >
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#" href="#one">
                                                    Instructions
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="one" class="panel-collapse collapse in">
                                            <div class="panel-body  " style="padding: 25px;">
                                                <p> Practise and improve your listening skills for your school studies and your English exams.</p>
                                                <p>Listen to the video and do the exercise</p>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#" href="#four">
                                                    Video
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="four" class="panel-collapse collapse">
                                            <div class="panel-body" style="padding: 10px;">
                                                                <iframe width="810" height="500" src="https://www.youtube.com/embed/cC2vxmBDAG8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                 
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of panel -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#" href="#three">
                                                   Exercise
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="three" class="panel-collapse collapse">
                                            <div class="panel-body" style="padding: 10px;">

                                                <p class="text-danger"><u><b>Listen to above video and provide the answers.</u></p>

                                                <strong>  1. It ………………. Today.? </strong> <br>
                                                <div class="custom-controls-stacked m-t" style="margin-bottom: 25px;">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">Snowed</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">Rained</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">Didn’t snow</span>
                                                    </label> 
                                                </div> 


                                                <p>
                                                    <strong>  2.   I put on my …………………  </strong> <br> 
                                                <div class="custom-controls-stacked m-t" style="margin-bottom: 25px;">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label"> Hat</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">Hat and kittens</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label"> Hat and mittens</span>
                                                    </label>
                                                   

                                                </div>  

                                                </p>
                                                <p>
                                                    <strong>   3.   My mom tied my sister’s ………………………</strong>  <br>
                                                <div class="custom-controls-stacked m-t" style="margin-bottom: 25px;">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label"> Tie.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label"> Scarf</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label"> Staff.</span>
                                                    </label> 
                                                </div>  
                                                </p>
                                                <div class="col-md-3  pull-left">
                                                    <button type="submit" class="btn btn-primary btn-block" id="create">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </div> 
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="card">
                                    <div class="card-header"> 
                                        <strong> <h4>Other Lessons</h4></strong> 
                                    </div>
                                    <div class="card-body  ">
                                        <ul class="media-list ">
                                            <li class="media"  style="padding: 6px;">

                                                <div class="media-middle media-body">
                                                    <h5 class="media-heading">
                                                        <a class="link-muted" href="#"> <span class="sidenav-icon icon icon icon-leanpub"></span>  Lesson 01</a><span class="icon1 icon-unlock-alt pull-right"></span><br> 
                                                    </h5>

                                                </div>
                                            </li>
                                            <hr style="margin: 5px;">
                                            <li class="media"  style="padding: 6px;">

                                                <div class="media-middle media-body">
                                                    <h5 class="media-heading">
                                                        <a class="link-muted" href="#"> <span class="sidenav-icon icon icon icon-leanpub"></span>  Lesson 02</a><span class="icon1 icon-lock pull-right  "></span>
                                                    </h5>

                                                </div>
                                            </li>
                                            <hr class="hr-padd" style="margin: 5px;">
                                            <li class="media"  style="padding: 6px;">

                                                <div class="media-middle media-body">
                                                    <h5 class="media-heading">
                                                        <a class="link-muted" href="#">  <span class="sidenav-icon icon icon icon-leanpub"></span> Lesson 03</a><span class="icon1 icon-lock pull-right  "></span>
                                                    </h5>

                                                </div>
                                            </li>
                                            <hr style="margin: 5px;">

                                            <li class="media"  style="padding: 6px;">

                                                <div class="media-middle media-body">
                                                    <h5 class="media-heading">
                                                        <a class="link-muted" href="#"> <span class="sidenav-icon icon icon icon-leanpub"></span> Lesson 04</a><span class="icon1 icon-lock pull-right   "></span>
                                                    </h5>

                                                </div>
                                            </li>
                                            <hr style="margin: 5px;">
                                            <li class="media"  style="padding: 6px;">

                                                <div class="media-middle media-body">
                                                    <h5 class="media-heading">
                                                        <a class="link-muted" href="#"> <span class="sidenav-icon icon icon icon-leanpub"></span> Lesson 05</a><span class="icon1 icon-lock pull-right  "></span>
                                                    </h5>

                                                </div>
                                            </li>
                                            <hr style="margin: 5px;">
                                        </ul>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div> 
            </div> 
        </div>


        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script> 
        <script src="js/application.min.js"></script>
        <script src="js/compose.min.js"></script>>

        <script>
            $(document).ready(function () {
                $('.collapse.in').prev('.panel-heading').addClass('active');
                $('#accordion, #bs-collapse')
                        .on('show.bs.collapse', function (a) {
                            $(a.target).prev('.panel-heading').addClass('active');
                        })
                        .on('hide.bs.collapse', function (a) {
                            $(a.target).prev('.panel-heading').removeClass('active');
                        });
            });
        </script>
</html>
