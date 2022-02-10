<!DOCTYPE html>
<?php
include './class/include.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Ecollage.lk | Teachers</title>
        <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/libs/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="assets/libs/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/libs/rslides/responsiveslides.css">
        <link rel="stylesheet" href="assets/libs/slick/slick.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600%7CMontserrat:300,400,600%7CRaleway:300,400,400i,600%7COpen+Sans:400,400i%7CVarela+Round">
    </head>

    <body id="teachers" class="page">

        <?php include './header.php'; ?>

        <main>
            <div class="page-heading text-center">
                <h2>OUR LECTURES</h2>
            </div>
            <div class="container teachers-browse pros">
         <!--       <div class="row toolbar">
                      <div class="col-md-1 col-sm-6 col-xs-12 select-categories">

                        <select  id="district" name="district"  style="padding: 10px;">
                            <option value="">- your District - </option>
                            <?php
                            foreach (District::all() as $district) {
                                ?>
                                <option value="<?php echo $district['id']; ?>"><?php echo $district['name']; ?></option>   
                                <?php
                            }
                            ?> 
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 select-numofvids">
                        <select  name="city" id="city-bar" style="padding: 10px;">
                            <option value="" selected="selected"> - your city - </option>
                        </select>
                    </div>
                    <div class="col-md-3     col-sm-6 col-xs-12 select-name">
                        <select  class="custom-select" id="category" name="category" style="padding: 10px;">
                            <option value="">- Select  Category - </option>
                            <?php
                            foreach (EducationCategory::all() as $education_category) {
                                ?>

                                <option value="<?php echo $education_category['id']; ?>"><?php echo $education_category['name']; ?></option>   
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 select-name">

                        <select class="custom-select" name="sub_category" id="sub_category"  style="padding: 10px;">
                            <option value="" selected=""> - Select Sub Category -</option>   
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 select-name">
                        <select class="custom-select" name="subject" id="subject" style="padding: 10px;">	
                            <option value="" selected=""> - Select Subject  -</option>  
                        </select>
 
                    </div>

                    <div class="col-sm-4 col-xs-12 search-button">
                        <button class="search-teachers" id="search">SEARCH</button>
                    </div>
                </div>-->
                <div class="row text-center filter_data">
                 
                         
                 
                </div>



            </div>
<!--            <div class="row text-center " style="margin-top: 20px;">
                <div class="col-xs-12">
                    <div class="paginations">
                        <a class="prev" href="#"><i class="zmdi zmdi-chevron-left"></i>PREV</a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a class="next" href="#">NEXT<i class="zmdi zmdi-chevron-right"></i></a>
                    </div>
                </div>
            </div>-->
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

        <script src="ajax/js/city.js" type="text/javascript"></script>
        <script src="lecture/ajax/js/category.js" type="text/javascript"></script>
        <script src="ajax/js/filter.js" type="text/javascript"></script>
    </body>
</html>