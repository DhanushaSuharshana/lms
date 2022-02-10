<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$id = '';
$id = $_GET['id'];
$EDUCATION_SUBJECT = new EducationSubject($id);
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Create Subject Sub Category</title>

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
                        </div>
                    </div>
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
                                            <strong>Create Subject Sub Category By - " <?php echo $EDUCATION_SUBJECT->name ?> "</strong>
                                        </div>
                                    </div>
                                    <form class="demo-form-wrapper card "  method="post" style="padding: 50px"   id="form-data">
                                        <div class="form form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label" for="title">Name: </label>
                                                <div class="col-sm-11">
                                                    <input id="name" name="name" class="form-control" type="text"   >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3">  
                                                    <input type="hidden"  name="create"  >
                                                    <input type="hidden"  name="id" value=" <?php echo $EDUCATION_SUBJECT->id ?>" >
                                                    <input type="submit" class="btn btn-primary btn-block"   value="create" id="create" >
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="card">
                                <div class="card-header">

                                    <strong>Manage Subjects Sub Category</strong>
                                </div>
                                <div class="card-body">
                                    <table id="demo-datatables-colreorder-1" class="table table-hover table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>  
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $SUBJECT_SUB_CATEGORY = new SubjectSubCategory(NULL);
                                        foreach ($SUBJECT_SUB_CATEGORY->getSubCategoryById($id) as $key => $subject) {
                                            $key++;
                                            ?>
                                            <tr id="div<?php echo $subject['id'] ?>">
                                                <td><?php echo $key ?></td>
                                                <td><?php echo $subject['name'] ?></td>


                                                <td> 
                                                    <a href="edit-subject-sub-category.php?id=<?php echo $subject['id'] ?>" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
                                                    <a href="#" class="delete-subject-sub-category btn btn-sm btn-danger" data-id="<?php echo $subject['id'] ?>"><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> 

                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th> 
                                                <th>Option</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                        </tbody>
                                    </table>
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
        <script src="js/demo.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script> 

        <script src="ajax/js/subject_sub_category.js" type="text/javascript"></script>
        <script src="delete/js/subject-sub-category.js" type="text/javascript"></script>
    </body>
</html>