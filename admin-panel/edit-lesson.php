<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Create Lesson</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta property="og:type" content="website">
        <meta property="og:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
        <meta property="og:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
        <meta property="og:image" content="../../elephant.html">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@madebytilde">
        <meta name="twitter:creator" content="@madebytilde">
        <meta name="twitter:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
        <meta name="twitter:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
        <meta name="twitter:image" content="../../elephant.html">
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
        <link rel="stylesheet" href="css/compose.min.css">
    </head>
    <body class="layout layout-header-fixed">
        <div class="layout-header">
            <div class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-brand navbar-brand-center" href="dashboard.php">
                        <img class="navbar-brand-logo" src="./../img/logo.png" alt="Elephant">
                    </a>
                    <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="bars">
                            <span class="bar-line bar-line-1 out"></span>
                            <span class="bar-line bar-line-2 out"></span>
                            <span class="bar-line bar-line-3 out"></span>
                        </span>
                        <span class="bars bars-x">
                            <span class="bar-line bar-line-4"></span>
                            <span class="bar-line bar-line-5"></span>
                        </span>
                    </button>
                    <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="arrow-up"></span>
                        <span class="ellipsis ellipsis-vertical">
                            <img class="ellipsis-object" width="32" height="32" src="img/0180441436.jpg" alt="Teddy Wilson">
                        </span>
                    </button>
                </div>
                <div class="navbar-toggleable">
                    <nav id="navbar" class="navbar-collapse collapse">
                        <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="bars">
                                <span class="bar-line bar-line-1 out"></span>
                                <span class="bar-line bar-line-2 out"></span>
                                <span class="bar-line bar-line-3 out"></span>
                                <span class="bar-line bar-line-4 in"></span>
                                <span class="bar-line bar-line-5 in"></span>
                                <span class="bar-line bar-line-6 in"></span>
                            </span>
                        </button>
                        <?php include './head-nav-right.php'; ?>
                        <div class="title-bar">
                            <h1 class="title-bar-title">
                                <span class="d-ib">Edit Lesson - Lesson Name</span>
                                <span class="d-ib">
                                    <a class="title-bar-shortcut" href="#" title="Add to shortcut list" data-container="body" data-toggle-text="Remove from shortcut list" data-trigger="hover" data-placement="right" data-toggle="tooltip">
                                        <span class="sr-only">Add to shortcut list</span>
                                    </a>
                                </span>
                            </h1>
                            <p class="title-bar-description">
                                <small>You can personalize your dashboard by using <a href="#">widgets</a>.</small>
                            </p>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="layout-main">
            <?php
            include 'navigation.php';
            ?>
            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="compose" style="margin-top: 20px;">
                        <div class="compose-header">
                            <!--                            <div class="compose-field">
                                                            <div class="compose-field-right">
                                                                <div class="btn-group">
                                                                    <button class="btn btn-link link-muted" title="Show Cc" data-target="#cc" data-toggle="collapse" type="button">
                                                                        <small>Cc</small>
                                                                    </button>
                                                                    <button class="btn btn-link link-muted" title="Show Bcc" data-target="#bcc" data-toggle="collapse" type="button">
                                                                        <small>Bcc</small>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="compose-field-left">
                                                                <button class="compose-label" type="button">To</button>
                                                            </div>
                                                            <div class="compose-field-body">
                                                                <input class="compose-input" type="text" name="to" autocomplete="off" spellcheck="false">
                                                            </div>
                                                        </div>
                                                        <div class="compose-fields">
                                                            <div class="collapse" id="cc">
                                                                <div class="compose-field">
                                                                    <div class="compose-field-left">
                                                                        <button class="compose-label" type="button">Cc</button>
                                                                    </div>
                                                                    <div class="compose-field-body">
                                                                        <input class="compose-input" type="text" name="cc" autocomplete="off" spellcheck="false">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="collapse" id="bcc">
                                                                <div class="compose-field">
                                                                    <div class="compose-field-left">
                                                                        <button class="compose-label" type="button">Bcc</button>
                                                                    </div>
                                                                    <div class="compose-field-body">
                                                                        <input class="compose-input" type="text" name="bcc" autocomplete="off" spellcheck="false">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>-->
                            <div class="compose-field">
                                <div class="compose-field-body">
                                    <input class="compose-input" type="text" value="Television" name="subject" placeholder="Title">
                                </div>
                            </div>
                            <div class="compose-field">
                                <div class="compose-field-body">
                                    <input class="compose-input" type="file" accept="image/*" multiple="multiple">
                                </div>
                            </div>
                            <div class="compose-field">
                                <div class="compose-field-body">
                                    <input class="compose-input" type="text" name="short_description" placeholder="Short Description">
                                </div>
                            </div>
                        </div>
                        <div class="compose-body">
                            <label>Lesson</label>
                            <div class="compose-message">
                                <div class="compose-editor">
                                    <div class="panel-body" style="padding: 10px;">
                                        <img src="../img/ins.jpg" class="img-responsive">
                                            </div>
                                    <div class="panel-body text-justify" style="padding: 25px;">
                                                <p>Televisions show sounds and pictures. They get data from cables, discs, or over-the-air signals. They turn this data into sounds and images. People watch news and shows on them. You probably call them TVs. 
                                                    John Baird made the first TV in 1925. It had one color. It could only show 30 lines. This was just enough room for a face. It didn't work well, but it was a start.
                                                    The first TV station was set up in 1928.</p>

                                                <p>It was in New York. Few people had TVs. The broadcasts were not meant to be watched. They showed a Felix the Cat doll for two hours a day. The doll spun around on a record player. They were experimenting. It took many years to get it right.
                                                    By the end of the 1930s, TVs were working well.</p>

                                                <p>America got its first taste at the 1939 World's Fair. This was one of the biggest events ever. There were 200 small, black and white TVs set up around the fair. The U.S. President gave a speech over the TVs. The TVs were only five inches big but the people loved it.
                                                    They wanted TVs. But World War II was going on during this time. Factories were busy making guns and bombs. When the war was over, TV spread across the country.
                                                </p>
                                            </div>
                                </div>
                                <div class="compose-toolbar">
                                    <div class="btn-toolbar" data-role="editor-toolbar">
                                        <div class="btn-group">
                                            <div class="btn-group dropup">
                                                <button class="btn btn-link link-muted" title="Font Size" data-toggle="dropdown" type="button">
                                                    <span class="icon icon-text-height"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="fs-Five" data-edit="fontSize 5">Huge</a></li>
                                                    <li><a class="fs-Three" data-edit="fontSize 3">Normal</a></li>
                                                    <li><a class="fs-One" data-edit="fontSize 1">Small</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-link link-muted" title="Bold (Ctrl/Cmd+B)" data-edit="bold" type="button">
                                                    <span class="icon icon-bold"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Italic (Ctrl/Cmd+I)" data-edit="italic" type="button">
                                                    <span class="icon icon-italic"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Strikethrough" data-edit="strikethrough" type="button">
                                                    <span class="icon icon-strikethrough"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Underline (Ctrl/Cmd+U)" data-edit="underline" type="button">
                                                    <span class="icon icon-underline"></span>
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-link link-muted" title="Bullet list" data-edit="insertunorderedlist" type="button">
                                                    <span class="icon icon-list-ul"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Number list" data-edit="insertorderedlist" type="button">
                                                    <span class="icon icon-list-ol"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Reduce indent (Shift+Tab)" data-edit="outdent" type="button">
                                                    <span class="icon icon-outdent"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Indent (Tab)" data-edit="indent" type="button">
                                                    <span class="icon icon-indent"></span>
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-link link-muted" title="Align Left (Ctrl/Cmd+L)" data-edit="justifyleft" type="button">
                                                    <span class="icon icon-align-left"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Center (Ctrl/Cmd+E)" data-edit="justifycenter" type="button">
                                                    <span class="icon icon-align-center"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Align Right (Ctrl/Cmd+R)" data-edit="justifyright" type="button">
                                                    <span class="icon icon-align-right"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Justify (Ctrl/Cmd+J)" data-edit="justifyfull" type="button">
                                                    <span class="icon icon-align-justify"></span>
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <label class="btn btn-link link-muted file-upload-btn" title="Insert picture">
                                                    <span class="icon icon-picture-o"></span>
                                                    <input class="file-upload-input" type="file" name="file" data-edit="insertImage">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <label>Exercise</label>
                            <div class="compose-message">
                                <div class="compose-editor">
                                    <div class="panel-body" style="padding: 10px;">

                                                <p class="text-danger"><u><b>Read the given paragraph and provide answers.</b></u></p><b>


                                                <strong>  1. When did TVs come out?  </strong> <br>
                                                <div class="custom-controls-stacked m-t" style="margin-bottom: 25px;">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">1925</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">1953</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">1939</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">1965</span>
                                                    </label>

                                                </div> 


                                                <p>
                                                    <strong>  2. Which was not true about the first TV?  </strong> <br> 
                                                </p><div class="custom-controls-stacked m-t" style="margin-bottom: 25px;">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">It could only show one color.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">It only had 30 lines.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">It did not have sound.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">It did not work well.</span>
                                                    </label>

                                                </div>  

                                                <p></p>
                                                <p>
                                                    <strong>   3. Why did the first TV station only show Felix the Cat for two hours a day? </strong>  <br>
                                                </p><div class="custom-controls-stacked m-t" style="margin-bottom: 25px;">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">They were running tests.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">Felix the Cat was really popular.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">Felix the Cat had been a big radio star.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">Felix the Cat was the only show that they had.</span>
                                                    </label>

                                                </div>  

                                                <p></p>
                                                <p>
                                                    <strong> 4. Which of these events slowed the spread of TV?</strong> <br>
                                                </p><div class="custom-controls-stacked m-t" style="margin-bottom: 25px;">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">The World's Fair of 1939.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">The Civil War.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">The election of the U.S. President.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">World War II.</span>
                                                    </label>

                                                </div>
                                                
                                                <p></p>
                                                <p>
                                                    <strong>  5. What is the author's main purpose in writing this? </strong> 
                                                    <br>
                                                </p><div class="custom-controls-stacked m-t" style="margin-bottom: 25px;">
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="1">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">He is trying to explain how a TV works.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label"> He is telling readers how TVs became popular.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">He is describing the history of the TV.</span>
                                                    </label>
                                                    <label class="custom-control custom-control-default custom-radio">
                                                        <input class="custom-control-input" name="que_1" type="radio" value="0">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">He is trying to get people to watch more TV.</span>
                                                    </label>

                                                </div> 
                                                <p></p>
                                              
                                            </b></div>
                                </div>
                                <div class="compose-toolbar">
                                    <div class="btn-toolbar" data-role="editor-toolbar">
                                        <div class="btn-group">
                                            <div class="btn-group dropup">
                                                <button class="btn btn-link link-muted" title="Font Size" data-toggle="dropdown" type="button">
                                                    <span class="icon icon-text-height"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="fs-Five" data-edit="fontSize 5">Huge</a></li>
                                                    <li><a class="fs-Three" data-edit="fontSize 3">Normal</a></li>
                                                    <li><a class="fs-One" data-edit="fontSize 1">Small</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-link link-muted" title="Bold (Ctrl/Cmd+B)" data-edit="bold" type="button">
                                                    <span class="icon icon-bold"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Italic (Ctrl/Cmd+I)" data-edit="italic" type="button">
                                                    <span class="icon icon-italic"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Strikethrough" data-edit="strikethrough" type="button">
                                                    <span class="icon icon-strikethrough"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Underline (Ctrl/Cmd+U)" data-edit="underline" type="button">
                                                    <span class="icon icon-underline"></span>
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-link link-muted" title="Bullet list" data-edit="insertunorderedlist" type="button">
                                                    <span class="icon icon-list-ul"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Number list" data-edit="insertorderedlist" type="button">
                                                    <span class="icon icon-list-ol"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Reduce indent (Shift+Tab)" data-edit="outdent" type="button">
                                                    <span class="icon icon-outdent"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Indent (Tab)" data-edit="indent" type="button">
                                                    <span class="icon icon-indent"></span>
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-link link-muted" title="Align Left (Ctrl/Cmd+L)" data-edit="justifyleft" type="button">
                                                    <span class="icon icon-align-left"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Center (Ctrl/Cmd+E)" data-edit="justifycenter" type="button">
                                                    <span class="icon icon-align-center"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Align Right (Ctrl/Cmd+R)" data-edit="justifyright" type="button">
                                                    <span class="icon icon-align-right"></span>
                                                </button>
                                                <button class="btn btn-link link-muted" title="Justify (Ctrl/Cmd+J)" data-edit="justifyfull" type="button">
                                                    <span class="icon icon-align-justify"></span>
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <label class="btn btn-link link-muted file-upload-btn" title="Insert picture">
                                                    <span class="icon icon-picture-o"></span>
                                                    <input class="file-upload-input" type="file" name="file" data-edit="insertImage">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="compose-actions">
                                <button class="btn btn-primary" type="button">Send</button>
                                <button class="btn btn-default" type="button">Discard</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--            <div class="layout-footer">
                            <div class="layout-footer-body">
                                <small class="version">Version 1.4.0</small>
                                <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
                            </div>
                        </div>-->
        </div>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/compose.min.js"></script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-83990101-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>