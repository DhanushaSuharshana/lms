<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
$PAGES = new Page(1);
$VIDEO_1 = new Page(4);
$VIDEO_2 = new Page(5);
$VIDEO_3 = new Page(6);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecollege.lk Web Learning</title>
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
    <link href="css/sweetalert.css" rel="stylesheet" type="text/css" />

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
                <div class="row gutter-xs panel">
                    <div class="col-xs-12 col-md-12">
                        <div class="card">
                            <div class="col-md-3">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in home-1">
                                        <h3 class="text-center tab-padding"><u> විෂයන් රැසක් </u></h3>
                                        <p class="text-justify">
                                            පළමු ශ්‍රේණියේ සිට උසස් අධ්‍යාපනය දක්වා විෂයන් රැසක් අප ආයතනය තුලින් ඔබට හැදෑරීමට අවස්ථාව හිමි වනු ඇත.ඔබට අවශ්‍ය ක්ෂේත්‍රය ඔස්සේ වැඩි දුර අධ්‍යාපනය සඳහා අදම අප හා එක්වන්න.</p>
                                    </div>
                                    <div class="tab-pane fade home-2">
                                        <h3 class="text-center tab-padding">
                                            <u>
                                                ගුරුවරුන් තෝරා ගන්න.
                                            </u>
                                        </h3>
                                        <p class="text-justify">
                                            ප්‍රවීන දක්ෂ ගුරු මඬුල්ලක් අප හා අත්වැල් බැඳගෙන ඇති අතර ඔබට අධ්‍යාපනය හැදෑරීමට අවශ්‍ය ගුරුවරයා තෝරා ගැනීමේ අවස්ථාව හිමිවනු ඇත. ඔබට අපහසු විශයන් පහසුවෙන් සරලව ඉගනීමට අදම අප හා එක්වන්න.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade home-3">
                                        <h3 class="text-center tab-padding">
                                            <u>
                                                සජීවී පන්ති
                                            </u>
                                        </h3>
                                        <p class="text-justify">
                                            සජීවී පන්ති හෝ සජීවී වීඩියෝවක් තෝරා ගැනීමෙන් ඔබට ඔබේ ගුරුවරයා සමඟ කෙලින්ම සම්බන්ධ විය හැකිය. එම සජීවී ඉගෙනුම් අවකාශය තුළ, ඔබට පහසුවෙන් සරලව ඉගනීමට අවස්ථාව හිමිවනු ඇත.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade home-4">
                                        <h3 class="text-center tab-padding">
                                            <u>
                                                වීඩියෝ නරඹන්න
                                            </u>
                                        </h3>
                                        <p class="text-justify">
                                            ඔබට අවශ්‍ය තොරතුරු ලබා ගත හැකි වන පරිදි අප වීඩියෝ යාවත්කාලීන කරන අතර එමගින් ඔබට ඔබේ දැනුම වැඩි දියුණු කළ හැකිය. අපගේ මුදා හරින ලද වීඩියෝ සියලු උපාංග වලින් ඔබට නැරඹිය හැකිය. එය ඔබේ අධ්‍යාපනය පහසු කරනු ඇත.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade home-5">
                                        <h3 class="text-center tab-padding">
                                            <u>
                                                දැනුම ලබා ගන්න.
                                            </u>
                                        </h3>
                                        <p class="text-justify">
                                            සජීවී ව මෙන් ම වීඩියෝ මඟින් ද පහසුවෙන් නිවසේ සිටම ආරක්ෂාකාරීව ඔබට අවශ්‍ය දැනුම ලබා ගැනීම සඳහා අදම අප හා එක්වන්න.මේ සඳහා ප්‍රවීන දක්ෂ ගුරු මඬුල්ලක් අප හා අත්වැල් බැඳගෙන සිටී.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 tab-padding-col">
                                <div class="tab-content tab-padding-col-zero">

                                    <div class="tab-pane fade active in home-1">
                                        <img src="img/img/writing.jpg" alt="" class="img-responsive tab-padding-col-zero" width="100%" />
                                    </div>
                                    <div class="tab-pane fade home-2">
                                        <img src="img/img/listening.jpg" alt="" class="img-responsive tab-padding-col-zero" width="100%" />
                                    </div>

                                    <div class="tab-pane fade home-3">
                                        <img src="img/img/listne.jpg" alt="" class="img-responsive tab-padding-col-zero" width="100%" />
                                    </div>
                                    <div class="tab-pane fade home-4">
                                        <img src="img/img/understand.jpg" alt="" class="img-responsive tab-padding-col-zero" width="100%" />
                                    </div>
                                    <div class="tab-pane fade home-5">
                                        <img src="img/img/ss.jpg" alt="" class="img-responsive tab-padding-col-zero" width="100%" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2 text-center tab-padding-col">
                                <div class=" tab-padding-col-top m-b-lg">
                                    <div class="tabs-right">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href=".home-1" data-toggle="tab" class="tab-content-title">විෂයන් රැසක් </a></li>
                                            <li><a href=".home-2" data-toggle="tab" class="tab-content-title">ගුරුවරුන් තෝරා ගන්න.</a></li>
                                            <li><a href=".home-3" data-toggle="tab" class="tab-content-title">සජීවී පන්ති</a></li>
                                            <li><a href=".home-4" data-toggle="tab" class="tab-content-title">වීඩියෝ නරඹන්න</a></li>
                                            <li><a href=".home-5" data-toggle="tab" class="tab-content-title"> දැනුම ලබා ගන්න.</a></li>
                                        </ul>
                                        <a href="#">
                                            <div class="form-group pull-right" style="margin-right: 40px;margin-top: 12%">
                                                <button class=" btn btn-outline-primary btn-block btn-next" width="17%" type="button" id="create">Assessment</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-xs">

                    <div class="col-md-4 col-md-push-4">
                        <div class="card">
                            <div class="card-header">
                                <strong><?php echo $VIDEO_1->title ?> </strong>
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <div class="card-body">
                                        <iframe width="350" height="200" src="https://www.youtube.com/embed/<?php echo substr($VIDEO_1->description, 3, -4) ?>/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-push-4">
                        <div class="card">
                            <div class="card-header">
                                <strong><?php echo $VIDEO_2->title ?> </strong>
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <div class="card-body">
                                        <iframe width="350" height="200" src="https://www.youtube.com/embed/<?php echo substr($VIDEO_2->description, 3, -4) ?>/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-md-pull-8">
                        <div class="card">
                            <div class="card-header">
                                <strong><?php echo $VIDEO_3->title ?> </strong>
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <iframe width="350" height="200" src="https://www.youtube.com/embed/<?php echo substr($VIDEO_3->description, 3, -4) ?>/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './footer.php'; ?>
    </div>

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/sweetalert.min.js" type="text/javascript"></script>
    <script src="ajax/js/check-login.js" type="text/javascript"></script>
    <script>
        var tabChange = function() {
            var tabs = $('.nav-tabs > li');
            var active = tabs.filter('.active');
            var next = active.next('li').length ? active.next('li').find('a') : tabs.filter(':first-child').find('a');
            // Bootsrap tab show, para ativar a tab
            next.tab('show')
        }
        // Tab Cycle function
        var tabCycle = setInterval(tabChange, 5000)
        // Tab click event handler
        $(function() {
            $('.nav-tabs a').click(function(e) {
                e.preventDefault();
                // Parar o loop
                clearInterval(tabCycle);
                // mosta o tab clicado, default bootstrap
                $(this).tab('show')
                // Inicia o ciclo outra vez
                setTimeout(function() {
                    tabCycle = setInterval(tabChange, 3000) //quando recomeça assume este timing
                }, 3000);
            });
        });
    </script>
</body>

</html>