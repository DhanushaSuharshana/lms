<!DOCTYPE html>
<?php include './class/include.php'; ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Ecollage.lk | Categories</title>
        <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/libs/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="assets/libs/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/libs/rslides/responsiveslides.css">
        <link rel="stylesheet" href="assets/libs/slick/slick.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600%7CMontserrat:300,400,600%7CRaleway:300,400,400i,600%7COpen+Sans:400,400i%7CVarela+Round">
    </head>

    <body id="categories" class="page">

        <?php include './header.php'; ?>

        <main>
            <div class="page-heading text-center">
                <div class="container">
                    <h2>CATEGORIES</h2>
                </div>
            </div>
            <div class="container categories text-center">	

                <div class="row">
                    <?php
                    $CATEGORY = new EducationCategory(null);
                    foreach ($CATEGORY->all() as $key => $category) {
                 
                            ?>
                            <div class="col-md-3 col-sm-6 category">
                                <img src="upload/category/<?php echo $category['image_name'] ?>" alt="Category">
                                <h5><?php echo $category['name'] ?></h5>
                                <div class="overlay text-center">
                                    
                                    <h5><?php echo $category['name'] ?></h5>
                                    <a href="#">Click Here</a>
                                </div>
                            </div>
                            <?php
                        }
                 
                    ?>
                     
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