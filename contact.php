<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Ecollage.lk | Contact</title>
        <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/libs/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="assets/libs/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/libs/rslides/responsiveslides.css">
        <link rel="stylesheet" href="assets/libs/slick/slick.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600%7CMontserrat:300,400,600%7CRaleway:300,400,400i,600%7COpen+Sans:400,400i%7CVarela+Round">
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body id="how-it-works" class="page">

        <?php include './header.php'; ?>

        <main>

            <div class="page-heading text-center">
                <div class="container">
                    <h2>CONTACT</h2>
                </div>
            </div>
            <div class="container success">
                <div class="col-md-12"> 

                    <div class="contact">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="demo-form-wrapper"> 
                                    <div class="col-md-6">
                                        <label class="req">NAME</label>
                                        <input id="txtFullName" type="text" name="txtFullName" placeholder="enter your name">
                                        <div class="col-md-12">
                                            <span id="spanFullName"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="req">E-MAIL ADDRESS</label>
                                        <input id="txtEmail" type="text" name="txtEmail" placeholder="enter e-mail address" >
                                        <div class="col-md-12">
                                            <span id="spanEmail"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label>SUBJECT</label>
                                        <input id="txtSubject" type="text" name="txtSubject" placeholder="subject">
                                        <div class="col-md-12">
                                            <span id="spanSubject"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="req">MESSAGE</label>
                                        <textarea id="txtMessage" name="txtMessage" placeholder="type in a message" ></textarea>
                                        <div class="col-md-12">
                                            <span id="spanMessage"></span>
                                        </div>
                                    </div>


                                    <div class="  clearfix">
                                        <div class="col-md-6">
                                            <label class="req" for="Security Code">Security Code</label>
                                            <input id="captchacode"  type="text" name="captchacode" placeholder="Code">
                                            <div class="col-md-12">
                                                <span id="capspan"></span>
                                            </div>
                                        </div>


                                        <div class="col-sm-4">  

                                            <?php include './contact-form/captchacode-widget.php'; ?>

                                        </div>


                                    </div>
                                </div>
                                <div class="  clearfix">
                                    <div class="col-sm-4">
                                        <div class="pull-center"  >
                                            <button type="submit" id="btnSubmit" name="btnSubmit" class="greybutton">SUBMIT</button>
                                        </div>
                                    </div>
                                </div>

                                <div id="dismessage" style="margin-top: 15px;"></div>
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
        <script src="contact-form/scripts.js" type="text/javascript"></script>
    </body>
</html>