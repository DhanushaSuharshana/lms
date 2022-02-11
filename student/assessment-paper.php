<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Ecollege.lk- Assessment Paper </title>

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
        <link href="css/timeTo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="layout layout-header-fixed layout-sidebar-fixed">

        <!--Top header -->
        <?php include './top-header.php'; ?>
        <!--End Top header -->

        <div class="layout-main">

            <!-- Navigation -->
            <?php include './navigation.php'; ?>
            <!--End Navigation -->

            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="card"> 
                        <form id="form-data" method="POST"> 
                            <div class="card-body"> 
                                <div class="row"> 
                                    <div id="countdown" class="pull-right" style="margin-right: 20px"></div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-10">
                                        <p class="text-danger"><u><b>Read the given paragraph and provide answers.</b></u></p>
                                        <p>Televisions show sounds and pictures. They get data from cables, discs, or over-the-air signals. They turn this data into sounds and images. People watch news and shows on them. You probably call them TVs. 
                                            John Baird made the first TV in 1925. It had one color. It could only show 30 lines. This was just enough room for a face. It didn't work well, but it was a start.
                                            The first TV station was set up in 1928.</p>

                                        <p>It was in New York. Few people had TVs. The broadcasts were not meant to be watched. They showed a Felix the Cat doll for two hours a day. The doll spun around on a record player. They were experimenting. It took many years to get it right.
                                            By the end of the 1930s, TVs were working well.</p>

                                        <p>America got its first taste at the 1939 World's Fair. This was one of the biggest events ever. There were 200 small, black and white TVs set up around the fair. The U.S. President gave a speech over the TVs. The TVs were only five inches big but the people loved it.
                                            They wanted TVs. But World War II was going on during this time. Factories were busy making guns and bombs. When the war was over, TV spread across the country.
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                </div>


                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 m-y" style="padding: 50px 0px 0px 50px;">
                                            <li class="ticket-list-separator">
                                                <div class="ticket-list-count">
                                                </div>
                                                <div class="ticket-list-heading"><h4> 1. When did TVs come out? </h4> </div>
                                            </li>
                                            <div class="form-group">

                                                <div class="col-sm-9">
                                                    <div class="custom-controls-stacked m-t">
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
                                                <div class="ticket-list-heading"><h4>2. Which was not true about the first TV? </h4> </div>
                                            </li>
                                            <div class="form-group">

                                                <div class="col-sm-9">
                                                    <div class="custom-controls-stacked m-t">
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_2" type="radio" value="0">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">It could only show one color.</span>
                                                        </label>
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_2" type="radio" value="0">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">It only had 30 lines.</span>
                                                        </label>
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_2" type="radio" value="1">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">It did not have sound.</span>
                                                        </label>
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_2" type="radio" value="0">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">It did not work well</span>
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
                                                <div class="ticket-list-heading"><h4>3. Why did the first TV station only show Felix the Cat for two hours a day?</h4> </div>
                                            </li>
                                            <div class="form-group">

                                                <div class="col-sm-9">
                                                    <div class="custom-controls-stacked m-t">
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_3" type="radio" value="1">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">They were running tests.</span>
                                                        </label>
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_3" type="radio" value="0">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Felix the Cat was really popular.</span>
                                                        </label>
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_3" type="radio" value="0">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Felix the Cat had been a big radio star.</span>
                                                        </label>
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_3" type="radio" value="0">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">Felix the Cat was the only show that they had.</span>
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
                                                <div class="ticket-list-heading"><h4>4. Which of these events slowed the spread of TV?</h4> </div>
                                            </li>
                                            <div class="form-group">

                                                <div class="col-sm-9">
                                                    <div class="custom-controls-stacked m-t">
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_4" type="radio" value="0">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">The World's Fair of 1939.</span>
                                                        </label>
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_4" type="radio" value="0">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">The Civil War</span>
                                                        </label>
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_4" type="radio" value="0">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">The election of the U.S. President.</span>
                                                        </label>
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_4" type="radio" value="1">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">World War II.</span>
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
                                                <div class="ticket-list-heading"><h4> 5. What is the author's main purpose in writing this? </h4> </div>
                                            </li>
                                            <div class="form-group"> 
                                                <div class="col-sm-9">
                                                    <div class="custom-controls-stacked m-t">
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_5" type="radio" value="0">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">He is trying to explain how a TV works.</span>
                                                        </label>
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_5" type="radio" value="0">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">He is telling readers how TVs became popular.</span>
                                                        </label>
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_5" type="radio" value="1">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">He is describing the history of the TV.</span>
                                                        </label>
                                                        <label class="custom-control custom-control-default custom-radio">
                                                            <input class="custom-control-input" name="que_5" type="radio" value="0">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-label">He is trying to get people to watch more TV.</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div> 
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-2  pull-left "  style="padding: 0px 0px 15px 55px;"> 

                                            <input type="hidden" name="action" value="ASSESSMENT_LEVEL"/> 

                                            <button type="submit" class="btn btn-primary btn-block" id="asseessment">Submit</button>
                                        </div>
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
        <script src="js/jquery.time-to.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $('#countdown').timeTo(900, function () {
                    swal({
                        title: "Oops..!",
                        text: "Your time is over..! try again..",
                        type: "warning"
                    }, function () {
                        window.location = "assessment-paper.php";
                    });
                });
            });
        </script> 
    </body>
</html>