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
            <?php include './writing-navigation.php'; ?>
            <!--End Navigation -->

            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="card">  
                        <div class="container">
                            <div class="breadcrumb" style="margin-bottom: -12px;">
                                <span class="inline odd first"><a href="/">Home</a></span>
                                <span class="delimiter">»</span>
                                <span class="inline even"><a href="" title="">Writing</a></span>
                                <span class="delimiter">»</span>
                                <span class="inline odd last"><a href="" title="">Lesson 1</a></span>
                                <span class="delimiter">»</span>
                                <span class="inline odd last"><a href="" title="">Picture Description</a></span>
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
                                                <p>A picture description is an ideal way of practicing your English vocabulary in all sorts of fields. Describing paintings or other art pictures is something for the advanced learner of English as you also have to talk about the artist’s intention and the impression on the viewer.</p>
                                              
                                                <p>Look at the picture carefully and do the exercise</p>
                                            </div>
                                        </div> 
                                    </div>  
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#" href="#four">
                                                    Picture
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="four" class="panel-collapse collapse">
                                            <div class="panel-body" style="padding: 10px;">
                                                <img src="img/people.jpg" class="img-responsive"/>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of panel -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#" href="#two">
                                                    Exercise
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="two" class="panel-collapse collapse">
                                            <div class="panel-body text-justify" style="padding: 25px;">
                                                <p class="text-danger"><u><b>Write five sentences describing the given picture.</b></u></p>
                            
                                                <div class="compose-message">
                                                    <div class="compose-editor">
                                                        <ul style="list-style: none;padding-left: 0px;">
                                                            <li> 1). </li>
                                                            <li> 2). </li>
                                                            <li> 3). </li>
                                                            <li> 4). </li>
                                                            <li> 5). </li> 
                                                        </ul>
                                                    </div>
                                                    <div class="compose-toolbar">
                                                        <div class="btn-toolbar" data-role="editor-toolbar">
                                                            <div class="btn-group">
                                                                <div class="btn-group dropup">
                                                                    <button class="btn btn-link link-muted" title="Font Size" data-toggle="dropdown" type="button">
                                                                        <span class="icon icon-text-height"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="fs-Five" data-edit="fontSize 5">Huge</a></li>
                                                                        <li><a class="fs-Three" data-edit="fontSize 3">Normal</a></li>
                                                                        <li><a class="fs-One" data-edit="fontSize 1">Small</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-link link-muted" title="Bold (Ctrl/Cmd+B)" data-edit="bold" type="button">
                                                                        <span class="icon icon-bold"></span>
                                                                    </button>
                                                                    <button class="btn btn-link link-muted" title="Italic (Ctrl/Cmd+I)" data-edit="italic" type="button">
                                                                        <span class="icon icon-italic"></span>
                                                                    </button>
                                                                    <button class="btn btn-link link-muted" title="Strikethrough" data-edit="strikethrough" type="button">
                                                                        <span class="icon icon-strikethrough"></span>
                                                                    </button>
                                                                    <button class="btn btn-link link-muted" title="Underline (Ctrl/Cmd+U)" data-edit="underline" type="button">
                                                                        <span class="icon icon-underline"></span>
                                                                    </button>
                                                                </div>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-link link-muted" title="Bullet list" data-edit="insertunorderedlist" type="button">
                                                                        <span class="icon icon-list-ul"></span>
                                                                    </button>
                                                                    <button class="btn btn-link link-muted" title="Number list" data-edit="insertorderedlist" type="button">
                                                                        <span class="icon icon-list-ol"></span>
                                                                    </button>
                                                                    <button class="btn btn-link link-muted" title="Reduce indent (Shift+Tab)" data-edit="outdent" type="button">
                                                                        <span class="icon icon-outdent"></span>
                                                                    </button>
                                                                    <button class="btn btn-link link-muted" title="Indent (Tab)" data-edit="indent" type="button">
                                                                        <span class="icon icon-indent"></span>
                                                                    </button>
                                                                </div>
                                                                <div class="btn-group">
                                                                    <button class="btn btn-link link-muted" title="Align Left (Ctrl/Cmd+L)" data-edit="justifyleft" type="button">
                                                                        <span class="icon icon-align-left"></span>
                                                                    </button>
                                                                    <button class="btn btn-link link-muted" title="Center (Ctrl/Cmd+E)" data-edit="justifycenter" type="button">
                                                                        <span class="icon icon-align-center"></span>
                                                                    </button>
                                                                    <button class="btn btn-link link-muted" title="Align Right (Ctrl/Cmd+R)" data-edit="justifyright" type="button">
                                                                        <span class="icon icon-align-right"></span>
                                                                    </button>
                                                                    <button class="btn btn-link link-muted" title="Justify (Ctrl/Cmd+J)" data-edit="justifyfull" type="button">
                                                                        <span class="icon icon-align-justify"></span>
                                                                    </button>
                                                                </div>
                                                                <div class="btn-group">
                                                                    <label class="btn btn-link link-muted file-upload-btn" title="Insert picture">
                                                                        <span class="icon icon-picture-o"></span>
                                                                        <input class="file-upload-input" type="file" name="file" data-edit="insertImage">
                                                                    </label>
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
