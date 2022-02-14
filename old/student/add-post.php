<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Add Post </title>

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
        <link href="css/profile.min.css" rel="stylesheet" type="text/css"/>
        <link href="Bootstrap/dist/css/bootstrap-grid.css" rel="stylesheet" type="text/css"/>
        <style>
            .options-message svg {
                width: 22px;
                height: 22px;
            }
        </style>
    </head>
    <body class="layout layout-header-fixed">
        <?php include './top-header.php'; ?>
        <div class="layout-main">
            <?php include './disable-navigation.php'; ?>
            <div class="layout-content">
                <div class="profile">
                    <div class="profile-header">
                        <div class="profile-cover">
                            <div class="profile-container">
                                <div class="profile-card">
                                    <div class="profile-avetar">
                                        <img class="profile-avetar-img" width="128" height="128" src="img/0180441436.jpg" alt="Teddy Wilson">
                                    </div>
                                    <div class="profile-overview">
                                        <h1 class="profile-name">TeddyWilson</h1>
                                        <button class="profile-follow-btn" type="button">Change Profile</button>
                                    </div>
                                    <div class="profile-info">
                                        <ul class="profile-nav">
                                            <li>
                                                <a href="#">
                                                    <h3 class="profile-nav-heading">1,143</h3>
                                                    <em>
                                                        <small>posts</small>
                                                    </em>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <h3 class="profile-nav-heading">44M</h3>
                                                    <em>
                                                        <small>followers</small>
                                                    </em>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <h3 class="profile-nav-heading">125</h3>
                                                    <em>
                                                        <small>following</small>
                                                    </em>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="profile-tabs">
                                    <ul class="profile-nav">
                                        <li class="active">
                                            <a href="#">Posts</a>
                                        </li>
                                        <li><a href="#">Followers</a></li>
                                        <li><a href="#">Following</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-body">
                        <div class="profile-container">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">

                                <ol class="feed">

                                    <li class="feed-item" style="width: 100%">

                                        <div class="post">
                                            <div class="post-header">
                                                <div class="post-author">
                                                    <div class="post-author-avatar">
                                                        <img class="img-circle" width="48" height="48" src="img/2832982242.jpg" alt="Agatha Ford">
                                                    </div>
                                                    <div class="post-author-info">
                                                        <span class="post-author-name">
                                                            <a href="#">Agatha Ford</a>
                                                        </span>
                                                        <span class="post-author-action">commented on this</span>
<!--                                                        <span class="post-timestamp">41 minutes ago</span>-->
                                                    </div>
                                                </div>
                                                <div class="post-dropdown">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggler" href="#" data-toggle="dropdown" aria-haspopup="true" role="button">
                                                            <span class="icon icon-angle-down"></span>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="#">Mute</a></li>
                                                            <li><a href="#">Block</a></li>
                                                            <li><a href="#">Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-body">
                                                <div class="post-content">
                                                    <div class="form-group with-icon label-floating is-empty">
                                                        <label class="control-label">Share what you are thinking here...</label>
                                                        <textarea class="form-control" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="post-img">
                                                    <a href="#">
                                                    </a>
                                                </div>
                                                <div class="add-options-message">

                                                    <div class="post-actions">
                                                        <a class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
                                                            <svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
                                                            <div class="_upload">
                                                                <input  name="post-image" display="inline" role="button" tabindex="0" data-testid="media-tab" type="file" class="_uploadinput _outlinenone" id="upload_first_image">
                                                                <input type="hidden" id="upload-post-image" name="upload-post-image" >
                                                            </div> 
                                                        </a>

                                                        <div class="post-summary">
                                                            <input type="submit" class="btn btn-primary btn-block pull-right  " type="submit" id="update"   value="update" style="width: 10%"  >
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </li> 
                                </ol>  
                            </div> 
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layout-content">
                <div class="profile"> 
                    <div class="profile-body">
                        <div class="profile-container">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <ol class="feed">
                                    <li class="feed-item">
                                        <div class="post">
                                            <div class="post-header">
                                                <div class="post-author">
                                                    <div class="post-author-avatar">
                                                        <img class="img-circle" width="48" height="48" src="img/2832982242.jpg" alt="Agatha Ford">
                                                    </div>
                                                    <div class="post-author-info">
                                                        <span class="post-author-name">
                                                            <a href="#">Agatha Ford</a>
                                                        </span>
                                                        <span class="post-author-action">commented on this</span>
                                                        <span class="post-timestamp">41 minutes ago</span>
                                                    </div>
                                                </div>
                                                <div class="post-dropdown">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggler" href="#" data-toggle="dropdown" aria-haspopup="true" role="button">
                                                            <span class="icon icon-angle-down"></span>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="#">Mute</a></li>
                                                            <li><a href="#">Block</a></li>
                                                            <li><a href="#">Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-body">
                                                <div class="post-content">
                                                    <p>Trying to understand why he did what he did...
                                                        <small><a href="#" target="_blank">#JohnMiller</a></small>
                                                    </p>
                                                </div>
                                                <div class="post-img">
                                                    <a href="#">
                                                        <img class="img-responsive" src="img/5037874725.jpg" alt="Me and my monkey">
                                                    </a>
                                                </div>
                                                <div class="post-actions">
                                                    <a class="post-action" href="#">
                                                        <span class="icon icon-thumbs-up icon-fw"></span>
                                                        Like
                                                    </a>
                                                    <a class="post-action" href="#">
                                                        <span class="icon icon-share icon-fw"></span>
                                                        Share
                                                    </a>
                                                    <div class="post-summary">
                                                        <small class="truncate">
                                                            <a class="link-muted" href="#">Likes: Ruby Dixon, Agatha Ford and 2.2k others</a>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </li> 
                                </ol>
                            </div>


                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/profile.min.js"></script>
        <script src="js/svgxuse.js" type="text/javascript"></script>

    </body>

</html>