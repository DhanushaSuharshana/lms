<?php
include '../class/include.php';
if (!isset($_SESSION)) {
    session_start();
}

if (!Student::authenticate()) {
    redirect('login.php');
}
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Profile  </title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta property="og:type" content="website"> >

        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/application.min.css">
        <link rel="stylesheet" href="css/profile.min.css">
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
            .profile-pic {
                position: relative;
                display: inline-block;
            }


            .fa-color{ 

                margin-top: -43px;
            }

        </style>
    </head>
    <body class="layout layout-header-fixed">
        <!--Top header -->
        <?php include './top-header.php'; ?>
        <!--End Top header -->
        <div class="layout-main">
            <?php include './navigation.php'; ?>

            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
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
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
                            <div class="row">  

                                <div class="col-md-12"> 

                                    <div class="card">
                                        <div class="card-header"> 
                                            <strong>My Subjects</strong>
                                        </div>
                                    </div>
                                    <form class="demo-form-wrapper card " style="padding: 50px" id="form-data">
                                        <div class="form form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label " for="title" style="text-align: left">Category: </label>
                                                <div class="col-sm-11">
                                                    <select  class="custom-select" id="category" name="category" required="">
                                                        <option value="">-- Select your Category -- </option>
                                                        <?php
                                                        foreach (EducationCategory::all() as $education_category) {
                                                            ?>

                                                            <option value="<?php echo $education_category['id']; ?>"><?php echo $education_category['name']; ?></option>   
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label " for="title" style="text-align: left">Sub Category: </label>
                                                <div class="col-sm-11">
                                                    <select class="custom-select" name="sub_category" id="sub_category">
                                                        <option value="" selected=""> -- Please Select Category First --</option>   
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label " for="title" style="text-align: left">  Subject: </label>
                                                <div class="col-sm-11">
                                                    <select class="custom-select" name="subject" id="subject">
                                                        <option value="" selected=""> -- Please Select Sub Category First --</option>   
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-4"></div> 
                                                <div class="col-md-2">  
                                                    <input type="hidden"  name="action" value="UPDATE_SUBJECTS" >
                                                    <input type="hidden"  name="id"  value="<?php echo $_SESSION['id'] ?>" >
                                                    <input type="submit" class="btn btn-primary btn-block"   value="ADD" id="update_subjects" >
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
                                                <th>Category</th>  
                                                <th>Sub Category</th>  
                                                <th>Subject</th>  
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $STUDENT_SUBJECT = new StudentSubject(NULL);
                                        foreach ($STUDENT_SUBJECT->getSubjectsByStudent($_SESSION['id']) as $key => $student_subject) {
                                            $key++;
                                            $SUBJECT = new EducationSubject($student_subject['subject']);
                                            $EDUCATION_SUB_CATEGORY = new EducationSubCategory($SUBJECT->sub_category);
                                            $EDUCATION_CATEGORY = new EducationCategory($EDUCATION_SUB_CATEGORY->category);
                                            if ($key == 1) {
                                                ?>
                                                <tr id="div<?php echo $student_subject['id'] ?>">
                                                    <td><?php echo $key ?></td>
                                                    <td><?php echo $EDUCATION_CATEGORY->name ?></td>
                                                    <td><?php echo $EDUCATION_SUB_CATEGORY->name ?></td>
                                                    <td><?php echo $SUBJECT->name ?></td> 
                                                    <td> 
                                                        <a href="edit-subject.php?id=<?php echo $student_subject['id'] ?>" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>   

                                                    </td>
                                                </tr>
                                            <?php } else {
                                                ?>
                                                <tr id="div<?php echo $student_subject['id'] ?>">
                                                    <td><?php echo $key ?></td>
                                                    <td><?php echo $EDUCATION_CATEGORY->name ?></td>
                                                    <td><?php echo $EDUCATION_SUB_CATEGORY->name ?></td>
                                                    <td><?php echo $SUBJECT->name ?></td> 
                                                    <td> 
                                                        <a href="edit-subject.php?id=<?php echo $student_subject['id'] ?>" class="op-link btn btn-sm btn-info"><i class="icon icon-pencil"></i></a>  |
                                                        <a href="#" class="delete-student-subject btn btn-sm btn-danger" data-id="<?php echo $student_subject['id'] ?>"><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> 

                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>   
                                                <th>Status</th>  
                                                <th>Option</th>
                                            </tr>
                                        </tfoot>                                       
                                    </table>
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
        <script src="js/profile.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>

        <script src="ajax/js/education_category.js" type="text/javascript"></script>
        <script src="ajax/js/student.js" type="text/javascript"></script>
        <script src="ajax/js/check-login.js" type="text/javascript"></script>
        <script src="ajax/js/category.js" type="text/javascript"></script>
        <script src="delete/js/student-subject.js" type="text/javascript"></script>
        
        
    </body>

</html>
