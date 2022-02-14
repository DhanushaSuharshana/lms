<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Assessment </title>
         

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
            <?php include './navigation.php'; ?>
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
                                <span class="inline odd last"><a href="" title="">Assessment</a></span>
                            </div>
                            <div class="row">  
                                <div class="signup-form tab-top-padd"  >
                                    <div class="col-md-1"> </div>

                                    <ul class="steps">
                                        <li class="step col-md-2 active">
                                            <a class="step-segment" href="#step-1" data-toggle="tab">
                                                <span class="step-icon icon icon-clock-o"></span>
                                            </a>
                                            <div class="step-content">
                                                <strong class="hidden-xs">Time</strong>
                                            </div>
                                        </li>
                                        <li class="step col-md-2">
                                            <a class="step-segment"  href="#step-2" data-toggle="tab">
                                                <span class="step-icon icon icon-reply"></span>
                                            </a>
                                            <div class="step-content">
                                                <strong class="hidden-xs">Answers</strong>
                                            </div>
                                        </li>
                                        <li class="step col-md-2">
                                            <a class="step-segment" href="#step-3" data-toggle="tab">
                                                <span class="step-icon icon icon-hand-o-right"></span>
                                            </a>
                                            <div class="step-content">
                                                <strong class="hidden-xs">Points</strong>
                                            </div>
                                        </li>
                                        <li class="step col-md-2">
                                            <a class="step-segment" href="#step-4" data-toggle="tab">
                                                <span class="step-icon icon icon-question"></span>
                                            </a>
                                            <div class="step-content">
                                                <strong class="hidden-xs">Read the questions carefully</strong>
                                            </div>
                                        </li>
                                        <li class="step col-md-2">
                                            <a class="step-segment" href="#step-5" data-toggle="tab">
                                                <span class="step-icon icon icon-smile-o"></span>
                                            </a>
                                            <div class="step-content">
                                                <strong class="hidden-xs">Think before you read</strong>
                                            </div>
                                        </li>
                                        <div class="col-md-1">

                                        </div>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="step-1" class="tab-pane active"> 
                                            <div class="row">
                                                <div class="cl-md-2">
                                                </div>
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="tab-top-padd">
                                                        <strong>  As with all exams, planning your time is very important. There’s nothing worse than failing an exam because you run out of time to answer all the questions. So, make sure you know exactly how long you have to do the exam.</strong>
                                                    </div> 

                                                    <ul style="list-style: none">
                                                        <li class="tab-ul"> <span class="  icon icon-arrow-right"></span> How much time do you have for the test?</li>
                                                        <li class="tab-ul"> <span class="  icon icon-arrow-right"></span> How many texts do you have to read?</li>
                                                        <li class="tab-ul"><span class="  icon icon-arrow-right"></span>  Work out how much time you can spend on each text.</li>
                                                        <li class="tab-ul"><span class="  icon icon-arrow-right"></span>  Leave a few minutes at the end to check your answers.</li>
                                                    </ul>  
                                                </div>
                                                <div class="cl-md-2"></div>
                                            </div> 
                                        </div>
                                        <div id="step-2" class="tab-pane"> 
                                            <div class="row">
                                                <div class="row">
                                                    <div class="cl-md-2">  </div>
                                                    <div class="col-sm-8 col-sm-offset-2"> 
                                                        <div class="tab-top-padd">
                                                            <strong> Knowing in advance how you have to present your answers in an exam is very important. So, always ask yourself these questions before you begin. </strong>
                                                        </div> 

                                                        <ul style="list-style: none">
                                                            <li class="tab-ul"> <span class="  icon icon-arrow-right"></span> Where do you write the answers?</li>
                                                            <li class="tab-ul"> <span class="  icon icon-arrow-right"></span> Do you write the answers on the question paper?</li>
                                                            <li class="tab-ul"><span class="  icon icon-arrow-right"></span>  Do you write the answers on an answer sheet? If so, leave enough time to copy the answers onto the answer sheet.</li> 
                                                        </ul> 
                                                    </div>
                                                    <div class="cl-md-2">  </div> 
                                                </div>
                                            </div> 
                                        </div>
                                        <div id="step-3" class="tab-pane"> 
                                            <div class="row">
                                                <div class="cl-md-2">  </div>
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="tab-top-padd">
                                                        <strong>  Understanding the system for giving points in an exam is important as there may be some sections that are worth a lot more points than others. You should consider this when you are planning how much time to spend on each section.  </strong>
                                                    </div> 

                                                    <ul style="list-style: none">
                                                        <li class="tab-ul"> <span class="  icon icon-arrow-right"></span> How many points are given for each answer?</li>
                                                        <li class="tab-ul"> <span class="  icon icon-arrow-right"></span> Spend more time on the answers worth more points</li>
                                                        <li class="tab-ul"><span class="  icon icon-arrow-right"></span> Don’t spend a lot of time on answers worth very few points</li>
                                                        <li class="tab-ul"><span class="  icon icon-arrow-right"></span>  In multiple choice exercises do you get negative points for wrong answers? If not, always answer all the questions, even if you guess.</li>
                                                    </ul> 
                                                </div>
                                                <div class="cl-md-2"> </div> 
                                            </div>
                                        </div>
                                        <div id="step-4" class="tab-pane">
                                            <div class="row">
                                                <div class="cl-md-2">
                                                </div>
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="tab-top-padd">
                                                        <strong>  Don’t rush when you are reading the instructions and the questions. Take your time to make sure you understand exactly what you have to do.                                                            </strong>
                                                    </div>  
                                                    <ul style="list-style: none">
                                                        <li class="tab-ul"> <span class="  icon icon-arrow-right"></span>Always read the questions carefully.</li>
                                                        <li class="tab-ul"> <span class="  icon icon-arrow-right"></span> Underline the key information in the question that you need to answer.</li>
                                                        <li class="tab-ul"><span class="  icon icon-arrow-right"></span> Check you have answered the question correctly.</li> 
                                                    </ul> 
                                                </div>
                                                <div class="cl-md-2"> </div>
                                            </div>
                                        </div>
                                        <div id="step-5" class="tab-pane">
                                            <div class="row">
                                                <div class="cl-md-2"> </div>
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="tab-top-padd">
                                                        <strong> Use everything on the page to help you in reading exams. Sometimes there are clues in pictures, headlines or paragraph headings. </strong>
                                                    </div>  
                                                    <ul style="list-style: none">
                                                        <li class="tab-ul"> <span class="  icon icon-arrow-right"></span> Predict what the text is about. What do you already know about the topic or subject? Your background knowledge will help you understand the text.</li>
                                                        <li class="tab-ul"> <span class="  icon icon-arrow-right"></span> Look at the title, headline or pictures to help you understand the text.</li>
                                                        <li class="tab-ul"><span class="  icon icon-arrow-right"></span> Identify the type of text. Is the text a newspaper article, a web page, an advert or a story? Knowing the type of text will help you understand it.</li> 
                                                    </ul> 
                                                </div>
                                                <div class="cl-md-2"> </div> 
                                            </div>
                                            <div class="row">
                                                <a   href="#step-2" data-toggle="tab">
                                                    <div class="form-group pull-right" style="margin-right: 40px;"  > 
                                                        <button class=" btn btn-outline-primary btn-block btn-next" width="17%" type="button" id="create">Assessment</button>
                                                    </div>
                                                </a>
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


        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="ajax/js/student.js" type="text/javascript"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>

        <script src="ajax/js/assessment.js" type="text/javascript"></script>
</html>
