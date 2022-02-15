<?php
include_once(dirname(__FILE__) . '/../class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Arrange Photo Album | Youth Service LTD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="plugin/MCDatepicker-master/dist/mc-calendar.min.css" rel="stylesheet" type="text/css" />
        <script src="plugin/MCDatepicker-master/dist/mc-calendar.min.js" type="text/javascript"></script>
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
        <style>
            .mc-calendar {
                z-index: 1600 !important;
            }
            .mc-display__day, .mc-display__date, .mc-display__month, .mc-display__year{
                color: hsla(0,0%,100%,.8) !important;
            }
        </style>
    </head>


    <body class="someBlock">

        <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <?php include './top-header.php'; ?>
            <!-- ========== Left Sidebar Start ========== -->
            <?php include './navigation.php'; ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Dashboard </h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item active">Manage Blog Type</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Arrange Blog Types</h4>
                                        <form id="form-data"> 
                                            <ul class="row mt-3 arrange-container" id="sortable" style="list-style-type: none; ">
                                                <?php
                                                $BLOG_TYPE = new BlogType(NULL);
                                                foreach ($BLOG_TYPE->all() as $key => $album_photo) {
                                                    ?> 
                                                    <li class="col-md-6 col-xl-3"  >
                                                        <span class="number-class">(<?php echo $key + 1; ?>)</span> 
                                                        <div class="card">
                                                            <img class="card-img-top img-fluid" src="../upload/blog-type/<?php echo $album_photo['image_name'] ?>" alt="<?php echo $album_photo['title'] ?>">
                                                            <input type="hidden" name="sort[]"  value="<?php echo $album_photo["id"]; ?>" class="sort-input"/> 
                                                        </div>

                                                    </li> 

                                                <?php } ?>
                                            </ul>
                                            <div class="row">
                                                <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;"> 
                                                    <button class="btn btn-primary " type="submit" id="arrange" >Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <?php include './footer.php'; ?>
            </div>
        </div>

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script> 
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script> 
        <script src="assets/js/app.js"></script>
        <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="plugin/jquery-ui/jquery-ui.js" type="text/javascript"></script>
        <!-- js -->
        <script src="ajax/js/blog-type.js" type="text/javascript"></script> 
        <script>
            $(function () {
                $("#sortable").sortable();
                $("#sortable").disableSelection();
            });
        </script>
    </body>

</html>