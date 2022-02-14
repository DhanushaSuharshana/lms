<?php
include '../class/include.php';
include './auth.php';
date_default_timezone_set('Asia/Colombo');

$id = $_GET["id"];

$BLOG = new Blog($id);

?>
<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>ReadX Blog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="blog" name="description" />
        <meta content="DsW" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="plugin/MCDatepicker-master/dist/mc-calendar.min.css" rel="stylesheet" type="text/css" />
        <script src="plugin/MCDatepicker-master/dist/mc-calendar.min.js" type="text/javascript"></script>
        <style>
            .mc-calendar {
                z-index: 1600 !important;
            }

            .mc-display__day,
            .mc-display__date,
            .mc-display__month,
            .mc-display__year {
                color: hsla(0, 0%, 100%, .8) !important;
            }
        </style>
    </head>

    <body class="someBlock">
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
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Dashboard </h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active">Manage Blogs</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <form method="POST" id="form-data-<?php echo $BLOG->id;?>">
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">News Type</label>
                                    <div class="col-md-10">
                                        <select id="blog_type" class="form-control blog_type" name="blog_type">
                                            <option value=""> -- Please Select News Type --</option>
                                            <?php
                                            $BLOG_TYPE = new BlogType(NULL);
                                            foreach ($BLOG_TYPE->all() as $blog_type) {
                                                if ($blog_type['id'] == $BLOG->blog_type) {
                                                    ?>
                                                    <option value="<?php echo $blog_type['id'] ?>" selected=""> <?php echo $blog_type['title'] ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $blog_type['id'] ?>"> <?php echo $blog_type['title'] ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="title" name="title" placeholder="Enter Blog Title" value="<?php echo $BLOG->title ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" id="image_name" name="image_name" value="">
                                        <img width="200" class="img-responsive" src="../upload/blog/<?php echo $BLOG->image_name; ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row hidden">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Date</label>
                                    <div class="col-md-10">
                                        <input class="form-control date" id="date" type="text" name="date" placeholder="Enter News Date" value="<?php echo $BLOG->date; ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Short Description</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="short_description" name="short_description" placeholder="Short Description" value="<?php echo $BLOG->short_description; ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Description</label>
                                    <div class="col-md-10">
                                        <textarea class="description" name="description"><?php echo $BLOG->description; ?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" style="display: flex; justify-content: flex-end;margin-top: 15px;">
                                        <input class="form-control id" type="hidden" value="<?php echo $BLOG->id; ?>">
                                        <button class="btn btn-primary edit-data" dataId="<?php echo $BLOG->id; ?>" type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    
                 
                </div>
            </div>
            <?php include './footer.php'; ?>
        </div>
    </div>
    <!-- END layout-wrapper -->
 


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
    <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
    <!-- App js -->
    <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js"></script>
    <script src="ajax/js/blog.js" type="text/javascript"></script>
    <script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
            // $(function() {
            //     $(".date").datepicker({
            //         dateFormat: 'yy-mm-dd',
            //         minDate: 'today'
            //     });
            // });
    </script>
    <script>
        tinymce.remove();   
        tinymce.init({
            selector: ".description",
            // ===========================================
            // INCLUDE THE PLUGIN
            // ===========================================

            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            // ===========================================
            // PUT PLUGIN'S BUTTON on the toolbar
            // ===========================================

            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
            // ===========================================
            // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
            // ===========================================

            relative_urls: false

        });

 
    </script>


</body>

</html>