<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $SUB_CATEGORY = new EducationSubCategory($id);
    $SUB_CATEGORY_NAME = $SUB_CATEGORY->name;
}
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Create Subject</title>

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
                                            <strong>Create Subject -<?php echo $SUB_CATEGORY_NAME ?></strong>
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
                                            <div class="form-group hidden" >
                                                <label class="col-sm-3 control-label" for="form-control-1">Gender: </label>
                                                <div class="col-sm-9">
                                                    <select id="category" class="custom-select" name="category">
                                                        <option value="<?php echo $id ?>" selected="selected"> -- Select your Category -- </option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label" for="title">Description: </label>
                                                <div class="col-sm-11">
                                                    <textarea rows="5"id="description" name="description" class="form-control" ></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3">  
                                                    <input type="hidden"  name="create"  >
                                                    <input type="submit" class="btn btn-primary btn-block"   value="create" id="create" >
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="card">
                                <div class="card-header">

                                    <strong>Manage Subjects</strong>
                                </div>
                                <div class="card-body">
                                    <table id="demo-datatables-colreorder-1" class="table table-hover table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th> 
                                                <th>Category</th> 
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $EDUCATION_SUBJECT = new EducationSubject(NULL);
                                        foreach ($EDUCATION_SUBJECT->getSubjectsByCategory($id) as $key => $subject) {
                                            $key++;
                                            ?>
                                            <tr id="div<?php echo $subject['id'] ?>">
                                                <td><?php echo $key ?></td>
                                                <td><?php echo $subject['name'] ?></td>
                                                <td><?php
                                        $EDUCATION_SUB_CATEGORY = new EducationSubCategory($subject['sub_category']);

                                        echo $EDUCATION_SUB_CATEGORY->name
                                            ?></td>

                                                <td> 
                                                    <a href="edit-subject.php?id=<?php echo $subject['id'] ?>" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |  
<!--                                                    <a href="create-subject-sub-category.php?id=<?php echo $subject['id'] ?>" class="op-link btn btn-sm btn-success"><i class="icon icon-arrow-up"></i></a>  |  -->
                                                    <a href="#" class="delete-category btn btn-sm btn-danger" data-id="<?php echo $subject['id'] ?>"><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> 

                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Category</th>  
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
        <script src="ajax/js/subject.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/demo.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>        
        <script src="delete/js/subject.js" type="text/javascript"></script>


    </script>
</body>
</html>