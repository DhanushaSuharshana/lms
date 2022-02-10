<!DOCTYPE html>
<?php
include './class/include.php';

$id = '';

$id = $_GET['id'];


$LECTURE = new Lecture($id);
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Ecollage.lk | View Lecture</title>
        <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/libs/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="assets/libs/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/libs/rslides/responsiveslides.css">
        <link rel="stylesheet" href="assets/libs/slick/slick.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600%7CMontserrat:300,400,600%7CRaleway:300,400,400i,600%7COpen+Sans:400,400i%7CVarela+Round">
    </head>

    <body id="teacher-single" class="page">

        <?php include './header.php'; ?>


        <main>
            <div class="container teacher-page">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <?php
                        if (empty($LECTURE->image_name)) {
                            ?>
                            <img src="assets/member.jpg" alt="<?php echo $LECTURE->full_name ?>" class="teacher-avatar" style="width: 80%;">
                        <?php } else { ?>
                            <img src="upload/lecture/profile/<?php echo $LECTURE->image_name ?>" alt="<?php echo $LECTURE->full_name ?>" class="teacher-avatar" style="width: 80%;">

                        <?php } ?>

                        <ul class="social">
                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li><li>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a></li><li>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a></li><li>
                                <a href="#"><i class="zmdi zmdi-email"></i></a></li><li>

                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <h5><?php echo ucfirst($LECTURE->full_name) ?></h5>


                        <?php
                        if ($LECTURE->education_level == 1) {
                            ?>
                            <p>Doctorate / ආචාර්ය උපාධිය</p>
                        <?php } ?>
                        <?php
                        if ($LECTURE->education_level == 2) {
                            ?>
                            <p>Master's degree or Postgraduate / පශ්චාත් උපාධිය</p>
                        <?php } ?>
                        <?php
                        if ($LECTURE->education_level == 3) {
                            ?>
                            <p>Bachelor's degree / උපාධිය</p>
                        <?php } ?>
                        <?php
                        if ($LECTURE->education_level == 4) {
                            ?>
                            <p>Graduate Teacher / උපාධිධාරී ගුරු</p>
                        <?php } ?>
                        <?php
                        if ($LECTURE->education_level == 5) {
                            ?>
                            <p>Trainee Teacher / පුහුණු ගුරු</p>
                        <?php } ?>
                        <?php
                        if ($LECTURE->education_level == 6) {
                            ?>
                            <p>Diploma / ඩිප්ලෝමා</p>
                        <?php } ?>
                        <?php
                        if ($LECTURE->education_level == 7) {
                            ?>
                            <p>Certificate / සහතිකපත් </p>
                        <?php } ?>
                        <?php
                        if ($LECTURE->education_level == 8) {
                            ?>
                            <p>Professional / වෘත්තීමය </p>
                        <?php } ?>
                        <?php
                        if ($LECTURE->education_level == 9) {
                            ?>
                            <p>Other / වෙනත් </p>
                        <?php } ?>



                        <p class="class-details">	
                             
                            <span class="views"><i class="zmdi zmdi-eye"></i><?php
                                $CITY = new City($LECTURE->city);
                                echo $CITY->name
                                ?></span>
                            <span class="rating"><i class="zmdi zmdi-star"></i><?php echo $LECTURE->experience ?> Of Experience</span>
                        </p>
                        

                    </div>
                </div>
            </div>

            <div class="container pros" style="    margin-top: 32px;">
                <div class="row">	
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                        <h3 style="margin-top: 0px;">Top Lectures</h3>
                        <p>
                            They are different kind of lectures they are professional lectures,<br> They high educations levels
                        </p>

                    </div>
                </div>
                <div class="row text-center" style="margin-top: 20px;">
                    <div class="slick-features-teachers">

                        <?php
                        $LECTURE = new Lecture(NULL);
                        foreach ($LECTURE->all() as $lecture) {
                            ?>
                            <div class="col-md-2 col-sm-4 col-xs-6">	
                                <div class="teacher">
                                    <a href="lecture-view.php?id=<?php echo $lecture['id'] ?>">
                                        <div class="imgcontainer">
                                            <?php
                                            if (empty($lecture['image_name'])) {
                                                ?>
                                                <img src="assets/member.jpg" alt="Avatar" class="img-responsive">
                                            <?php } else { ?>
                                                <img src="upload/lecture/profile/<?php echo $lecture['image_name'] ?>" alt="<?php echo $lecture['full_name'] ?>" class="img-responsive">

                                            <?php } ?>

                                        </div>
                                    </a>
                                    <a href="lecture-view.php?id=<?php echo $lecture['id'] ?>"><?php echo $lecture['full_name'] ?></a>
                                    <p><?php echo $lecture['email'] ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row pros">	
                        <div class="col-sm-10 col-sm-offset-1 text-center"> 
                            <a href="lectures.php" class="blueplay" style="color: black; ">CHECK ALL LECTURES</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ready">
                <div class="container">
                    <div class="row">
                        <a href="#" class="whitebutton">SIGN UP NOW</a>
                        <p>ONLINE LEARNING FROM EVERYWHERE</p>
                        <h4>Are you ready to start learning?</h4>
                    </div>
                </div>
            </div>

        </main>

        <?php include './footer.php'; ?>

        <script src="assets/libs/jquery/jquery.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/libs/rslides/responsiveslides.min.js"></script>
        <script src="assets/libs/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/libs/slick/slick.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>