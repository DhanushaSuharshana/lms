<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$id = '';
$id = $_GET['id'];
$PAGES = new Page($id);
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edit Page</title>

        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-iconaa.png">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/application.min.css">
        <link rel="stylesheet" href="css/demo.min.css">
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="layout layout-header-fixed">
        <?php
        include './top-header.php';
        ?>
        <div class="layout-main">

            <?php
            include './navigation.php';
            ?>

            <div class="layout-content">
                <div class="layout-content-body">
                    
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
                            <div class="row">  

                                <div class="col-md-12"> 
                                    <?php
                                    if (isset($_GET['message'])) {

                                        $MESSAGE = New Message($_GET['message']);
                                        ?>
                                        <div class="alert alert-<?php echo $MESSAGE->status; ?>" role = "alert">
                                        <?php echo $MESSAGE->description; ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <div class="card">
                                        <div class="card-header"> 
                                            <strong>Create Page</strong>
                                        </div>
                                    </div>
                                    <form class="demo-form-wrapper card "  method="post" style="padding: 50px"  action="ajax/post-and-get/pages.php">
                                        <div class="form form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label" for="title">URL: </label>
                                                <div class="col-sm-11">
                                                    <input id="title" name="title" class="form-control" type="text" value="<?php echo $PAGES->title ?>"  >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label" for="title">Description: </label>
                                                <div class="col-sm-11">
                                                    <textarea  name="description" id="description" class="form-control  description" rows="5"><?php echo $PAGES->description ?></textarea> 

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"> 
                                                    <input type="hidden" name="id" value="<?php echo $PAGES->id ?>">
                                                    <input type="submit" class="btn btn-primary btn-block"  name="update"  value="update" >
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div> 
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/demo.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>        
       <script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
        <script>
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