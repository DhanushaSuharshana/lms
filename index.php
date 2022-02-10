<!DOCTYPE html>

<?php include './class/include.php';
?>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>ecollege.lk | Homepage </title>
        <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/libs/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="assets/libs/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/libs/rslides/responsiveslides.css">
        <link rel="stylesheet" href="assets/libs/slick/slick.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600%7CMontserrat:300,400,600%7CRaleway:300,400,400i,600%7COpen+Sans:400,400i%7CVarela+Round">
    </head>

    <body id="index2" class="homepage">


        <?php include './header-index.php'; ?>
        <main>
            <div class="container-fluid categories text-center">	

                <div class="row">
                    <div class="features-carousel">
                        <div class="slick-features">
                            <div class="feature">
                                <center>
                                    <img src="assets/images/features2/002-online-course.png" alt="Feature">
                                </center>
                                <h6>Main Course</h6>
                                <p>We have the courses you need for further education. Thereby  You can easy to learn your further education.</p>
                                <a href="#" class="readmore"><span>READ MORE&nbsp;&nbsp;&nbsp;</span><i class="zmdi zmdi-long-arrow-right"></i></a>
                            </div>
                            <div class="feature">
                                <center>
                                    <img src="assets/images/features2/006-online-learning.png" alt="Feature">
                                </center>
                                <h6>University Lectures</h6>
                                <p>Undergraduates will conduct independent learning with lectures, seminars and dissertations.Veteran lecturers come for this.</p>
                                <a href="#" class="readmore"><span>READ MORE&nbsp;&nbsp;&nbsp;</span><i class="zmdi zmdi-long-arrow-right"></i></a>
                            </div>
                            <div class="feature">
                                <center>
                                    <img src="assets/images/features2/005-video-tutorial.png" alt="Feature">
                                </center>
                                <h6>Occasional  Video </h6>
                                <p>The video will be updated so that you can get the information you need. Thereby you can improve your knowladge</p>
                                <a href="#" class="readmore"><span>READ MORE&nbsp;&nbsp;&nbsp;</span><i class="zmdi zmdi-long-arrow-right"></i></a>
                            </div>
                            <div class="feature">
                                <center>
                                    <img src="assets/images/features2/001-study.png" alt="Feature">
                                </center>
                                <h6>Online Training Expert</h6>
                                <p>Online training is regularly becoming a major industry with many trainers training students and employees around the world. </p>
                                <a href="#" class="readmore"><span>READ MORE&nbsp;&nbsp;&nbsp;</span><i class="zmdi zmdi-long-arrow-right"></i></a>
                            </div>
                            <div class="feature">
                                <center>
                                    <img src="assets/images/features2/003-video.png" alt="Feature">
                                </center>
                                <h6>Support Video On All Devices</h6>
                                <p>You can watch our released videos on all devices. It will make your education easier.</p>
                                <a href="#" class="readmore"><span>READ MORE&nbsp;&nbsp;&nbsp;</span><i class="zmdi zmdi-long-arrow-right"></i></a>
                            </div>
                            <div class="feature">
                                <center>
                                    <img src="assets/images/features2/001-education.png" alt="Feature">
                                </center>
                                <h6>Live Class</h6>
                                <p>You can connect directly with your student by selecting a text chat, audio chat or live video. In that live learning space, you can learn a few different options.</p>
                                <a href="#" class="readmore"><span>READ MORE&nbsp;&nbsp;&nbsp;</span><i class="zmdi zmdi-long-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="container categories text-center">	
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h3>Categories</h3>
                        <p style="margin-bottom: 50px">
                            Sri Lanka Education has a different categories, If you can select your <br>suitable category.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $EDUCATION_CATEGORY = new EducationCategory(null);
                    foreach ($EDUCATION_CATEGORY->all() as $key => $education_category) {
                        if ($key < 12) {
                            ?>
                            <div class="col-md-3 col-sm-6 category">
                                <img src="upload/category/<?php echo $education_category['image_name'] ?>" alt="Category">
                                <h5><?php echo $education_category['name'] ?></h5>
                                <div class="overlay text-center">
                                     
                                    <h5><?php echo $education_category['name'] ?></h5>
                                    <a href="#">Click Here</a>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <div class="row pros">	
                        <div class="col-sm-10 col-sm-offset-1 text-center"> 
                            <a href="category.php" class="blueplay" style="color: black; ">CHECK ALL CATEGORY</a>
                        </div>
                    </div>
                </div>

            </div>


            <div class="container pros" style="margin-top: 0px;">
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
                                <div class="imgcontainer">
                                    <?php
                                    if (empty($lecture['image_name'])) {
                                        ?>
                                        <img src="assets/member.jpg" alt="Avatar" class="img-responsive">
                                    <?php } else { ?>
                                        <img src="upload/lecture/profile/<?php echo $lecture['image_name'] ?>" alt="<?php echo $lecture['full_name'] ?>" class="img-responsive">

                                    <?php } ?>
                                    
                                </div>
                                <a href="#"><?php echo $lecture['full_name'] ?></a>
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

            <div class="platform text-center" style="margin-top: 30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>How to do it</h3>
                        </div>
                        <div class="col-md-4">
                            <div class="platform-feature">
                                <img src="assets/images/1.png" alt="ecollage.lk" style="width: 20%">
                                <a href="#">Sign Up for free</a>
                                <p>
                                    Within less than two minutes you can create your profile.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="platform-feature">
                                <img src="assets/images/2.png" alt="ecollage.lk" style="width: 20%">
                                <a href="#">Select a tutor</a>
                                <p>
                                    From the best academic performers in you city or location area quickly.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="platform-feature">
                                <img src="assets/images/3.png" alt="ecollage.lk" style="width: 20%">
                                <a href="#"> Schedule a class</a>
                                <p>
                                    If you can schedule your class time with suitable it with your Lecture.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container testimonials" >
                <div class="row" >	
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                        <h3>Feedbacks</h3>
                        <p>
                            What customer say our working ?.
                        </p>
                    </div>
                </div>
                <div class="row text-center" style="margin-bottom: 30px;">
                    <div class="col-sm-12">	
                        <div class="slick-testimonials">
                            <div class="testimonial">
                                <img src="assets/member.jpg" alt="ecollage.lk"  class="img-circle" width="8%">
                                <p class="name">Sanka s  Pranandu<em>20 Jan 2020.</em></p>
                                <em>
                                    “  This is the best online teaching center in Sri Lanka.Ecollage.lk has a many teachers and they are very help for us. if you can select a any kind of subject for your choices. Come and join .”
                                </em>
                            </div>
                            <div class="testimonial">
                                <img src="assets/member.jpg" alt="ecollage.lk" class="img-circle" width="8%">
                                <p class="name">Kamal j Jonson<em>01 FEB 2020.</em></p>
                                <em>
                                    “ Ecollage is a very helpful web site for online learning when any kind of student quickly visit the web site and easy selected any tutors , The tutors are all good Knowledge and god experience   ”
                                </em>
                            </div>
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