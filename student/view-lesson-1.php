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
            <?php include './reading-navigation.php'; ?>
            <!--End Navigation -->

            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="card">  
                        <div class="container">
                            <div class="breadcrumb" style="margin-bottom: -12px;">
                                <span class="inline odd first"><a href="/">Home</a></span>
                                <span class="delimiter">»</span>
                                <span class="inline even"><a href="" title="">Reading</a></span>
                                <span class="delimiter">»</span>
                                <span class="inline odd last"><a href="" title="">Lesson 1</a></span>
                                <span class="delimiter">»</span>
                                <span class="inline odd last"><a href="" title="">Television</a></span>
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
                                               Read the given paragraph and answer the questions.                                        </div>
                                        </div> 
                                    </div>  
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#" href="#four">
                                                    Television Conversation 
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="four" class="panel-collapse collapse">
                                            <div class="panel-body" style="padding: 10px;">
                                                <img src="img/ins.jpg" class="img-responsive"/>
                                            </div>
                                            <div class="panel-body text-justify" style="padding: 25px;">
                                                <p>Televisions show sounds and pictures. They get data from cables, discs, or over-the-air signals. They turn this data into sounds and images. People watch news and shows on them. You probably call them TVs. 
                                                    John Baird made the first TV in 1925. It had one color. It could only show 30 lines. This was just enough room for a face. It didn't work well, but it was a start.
                                                    The first TV station was set up in 1928.</p>

                                                <p>It was in New York. Few people had TVs. The broadcasts were not meant to be watched. They showed a Felix the Cat doll for two hours a day. The doll spun around on a record player. They were experimenting. It took many years to get it right.
                                                    By the end of the 1930s, TVs were working well.</p>

                                                <p>America got its first taste at the 1939 World's Fair. This was one of the biggest events ever. There were 200 small, black and white TVs set up around the fair. The U.S. President gave a speech over the TVs. The TVs were only five inches big but the people loved it.
                                                    They wanted TVs. But World War II was going on during this time. Factories were busy making guns and bombs. When the war was over, TV spread across the country.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>


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

                                                <p class="text-danger"><u><b>Read the given paragraph and provide answers.</u></p>


                                                <strong>  1. When did TVs come out?  </strong> <br>
                                                <div class="custom-controls-stacked m-t" style="margin-bottom: 25px;">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">1925</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">1953</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">1939</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">1965</span>
                                                    </label>

                                                </div> 


                                                <p>
                                                    <strong>  2. Which was not true about the first TV?  </strong> <br> 
                                                <div class="custom-controls-stacked m-t" style="margin-bottom: 25px;">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">It could only show one color.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">It only had 30 lines.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">It did not have sound.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">It did not work well.</span>
                                                    </label>

                                                </div>  

                                                </p>
                                                <p>
                                                    <strong>   3. Why did the first TV station only show Felix the Cat for two hours a day? </strong>  <br>
                                                <div class="custom-controls-stacked m-t" style="margin-bottom: 25px;">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">They were running tests.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">Felix the Cat was really popular.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">Felix the Cat had been a big radio star.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">Felix the Cat was the only show that they had.</span>
                                                    </label>

                                                </div>  

                                                </p>
                                                <p>
                                                    <strong> 4. Which of these events slowed the spread of TV?</strong> <br>
                                                <div class="custom-controls-stacked m-t" style="margin-bottom: 25px;">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">The World's Fair of 1939.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">The Civil War.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">The election of the U.S. President.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">World War II.</span>
                                                    </label>

                                                </div>
                                                
                                                </p>
                                                <p>
                                                    <strong>  5. What is the author's main purpose in writing this? </strong> 
                                                    <br>
                                                <div class="custom-controls-stacked m-t" style="margin-bottom: 25px;">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">He is trying to explain how a TV works.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label"> He is telling readers how TVs became popular.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">He is describing the history of the TV.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">He is trying to get people to watch more TV.</span>
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
        <script src="ajax/js/student.js" type="text/javascript"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>

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
