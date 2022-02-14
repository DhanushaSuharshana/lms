<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$id = '';
$id = $_GET['id'];
$EDUCATION_SUB_CATEGORY = new EducationSubCategory($id);
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edit Education Category</title>

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
                                            <strong>Edit Education Category</strong>
                                        </div>
                                    </div>
                                    <form class="demo-form-wrapper card "  method="post" style="padding: 50px"   id="form-data">
                                        <div class="form form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label" for="title">Name </label>
                                                <div class="col-sm-11">
                                                    <input id="name" name="name" class="form-control" type="text" value="<?php echo $EDUCATION_SUB_CATEGORY->name ?>"  >
                                                </div>
                                            </div>
                                            <div class="form-group hidden">
                                                <label class="col-sm-1 control-label " for="title" style="text-align: left">Name: </label>
                                                <div class="col-sm-11">
                                                    <input id="id" name="id" class="form-control" type="text" value="<?php echo $EDUCATION_SUB_CATEGORY->category ?>" >
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                </div>
                                                <div class="col-sm-11">
                                                    <label class="custom-control custom-control-primary custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" name="status"  <?php
                                                        if ($EDUCATION_SUB_CATEGORY->status == 1) {
                                                            echo 'checked';
                                                        }
                                                        ?> value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label"> Active </span>
                                                    </label> 
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-4"></div> 
                                                <div class="col-md-2"> 
                                                    <input type="hidden" name="id" value="<?php echo $EDUCATION_SUB_CATEGORY->id ?>">
                                                    <input type="hidden" name="update"  >
                                                    <input type="submit" class="btn btn-primary btn-block"   id="update"  value="update" >
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
        <script src="ajax/js/education-sub-category.js" type="text/javascript"></script>
    </body>
</html>