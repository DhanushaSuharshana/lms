<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
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
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>

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
                                <div class="col-md-3"  > 
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in home-1"  >
                                            <h3 class="text-center tab-padding"  >Watch Vidieos</h3>
                                            <p class="text-justify">    
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut.</p>
                                        </div>
                                        <div class="tab-pane fade home-2"  >
                                            <h3 class="text-center tab-padding"  >Listen Carefuly</h3>
                                            <p class="text-justify">  
                                                Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade home-3"  >
                                            <h3 class="text-center tab-padding"  >Repeat</h3>
                                            <p class="text-justify">    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante..</p>
                                        </div>
                                        <div class="tab-pane fade home-4"  >
                                            <h3 class="text-center tab-padding"  >Understand</h3>
                                            <p class="text-justify"> 
                                                    Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                                           </p>
                                        </div>
                                        <div class="tab-pane fade home-5"  >
                                            <h3 class="text-center tab-padding"  >Check your Level</h3>
                                            <p class="text-justify"> Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.</p>
                                        </div> 
                                    </div> 
                                </div>
                                <div class="col-md-7 tab-padding-col"  > 
                                    <div class="tab-content tab-padding-col-zero"  >
                                        <div class="tab-pane fade active in home-1"  >
                                            <img src="img/img/writing.jpg" alt="" class="img-responsive tab-padding-col-zero" width="100%"  />
                                        </div>
                                        <div class="tab-pane fade home-2"  >
                                            <img src="img/img/listening.jpg" alt="" class="img-responsive tab-padding-col-zero" width="100%"  />
                                        </div>

                                        <div class="tab-pane fade home-3"  >
                                            <img src="img/img/listne.jpg" alt="" class="img-responsive tab-padding-col-zero" width="100%"   />
                                        </div>
                                        <div class="tab-pane fade home-4"  >
                                            <img src="img/img/understand.jpg" alt="" class="img-responsive tab-padding-col-zero" width="100%"  />
                                        </div>
                                        <div class="tab-pane fade home-5"  >
                                            <img src="img/img/ss.jpg" alt="" class="img-responsive tab-padding-col-zero" width="100%"  />
                                        </div>
                                    </div>  
                                </div>

                                <div class="col-md-2 text-center tab-padding-col"  > 
                                    <div class=" tab-padding-col-top m-b-lg"  >
                                        <div class="tabs-right">
                                            <ul class="nav nav-tabs">
                                                <li class="active" ><a href=".home-1" data-toggle="tab"  class="tab-content-title" >Watch Videos</a></li>
                                                <li><a href=".home-2" data-toggle="tab" class="tab-content-title"  >Listen Carefuly</a></li>
                                                <li><a href=".home-3" data-toggle="tab" class="tab-content-title">Repeat</a></li>
                                                <li><a href=".home-4" data-toggle="tab" class="tab-content-title">Understand</a></li>
                                                <li><a href=".home-5" data-toggle="tab" class="tab-content-title">Check Your Level</a></li>
                                            </ul>
                                            <a href="assesment.php">
                                            <div class="form-group pull-right" style="margin-right: 40px;margin-top: 12%"  > 
                                                 <button class=" btn btn-outline-primary btn-block btn-next" width="17%" type="button" id="create" >Assessment</button>
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
                                    <strong>Introduction about System</strong> 
                                </div>
                                <div class="card-body">
                                    <div class="card-body">
                                        <div class="card-body">
                                            <iframe width="350" height="200" src="https://www.youtube.com/embed/gPFFrA9CvwE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-push-4">
                            <div class="card">
                                <div class="card-header"> 
                                    <strong>Introduction about System</strong> 
                                </div>
                                <div class="card-body">
                                    <div class="card-body">
                                        <div class="card-body">
                                            <iframe width="350" height="200" src="https://www.youtube.com/embed/gPFFrA9CvwE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-md-pull-8">
                            <div class="card">
                                <div class="card-header"> 
                                    <strong>Introduction  </strong> 
                                </div>
                                <div class="card-body">
                                    <div class="card-body">
                                        <iframe width="350" height="200" src="https://www.youtube.com/embed/IUuMf4EumsQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    <small class="copyright"><?php echo date('Y') ?>&copy;  <a href="#">Synotect Private Limited.</a></small>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script> 

        <script>
            var tabChange = function () {
                var tabs = $('.nav-tabs > li');
                var active = tabs.filter('.active');
                var next = active.next('li').length ? active.next('li').find('a') : tabs.filter(':first-child').find('a');
                // Bootsrap tab show, para ativar a tab
                next.tab('show')
            }
            // Tab Cycle function
            var tabCycle = setInterval(tabChange, 3000)
            // Tab click event handler
            $(function () {
                $('.nav-tabs a').click(function (e) {
                    e.preventDefault();
                    // Parar o loop
                    clearInterval(tabCycle);
                    // mosta o tab clicado, default bootstrap
                    $(this).tab('show')
                    // Inicia o ciclo outra vez
                    setTimeout(function () {
                        tabCycle = setInterval(tabChange, 3000)//quando recomeça assume este timing
                    }, 3000);
                });
            });
        </script>
    </body>
</html>