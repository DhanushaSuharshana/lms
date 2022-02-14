<?php
$LECTURE = new Lecture($_SESSION['id']);
$date = '';
if (isset($_GET['date'])) {
    $date = $_GET['date'];
} else {
    $date = 'nu';
}

date_default_timezone_set("Asia/Calcutta");
$today = date('Y-m-d');
?>
<div class="layout-header">
    <div class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand navbar-brand-center" href="index.php">
                <img class="navbar-brand-logo" src="img/logo.png" alt="Self-English-Learning">
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
                    <img class="ellipsis-object" width="32" height="32" src="img/member.jpg" alt="Teddy Wilson">
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
                <ul class="nav navbar-nav navbar-right">


                    <li class="visible-xs-block">
                        <h4 class="navbar-text text-center"><?php echo $LECTURE->full_name ?></h4>
                    </li>
                    <li class="dropdown">

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <div class="dropdown-header">
                                <a class="dropdown-link" href="#">New Message</a>
                                <h5 class="dropdown-heading">Recent messages</h5>
                            </div>
                            <div class="dropdown-body">
                                <div class="list-group list-group-divided custom-scrollbar">
                                    <a class="list-group-item" href="#">
                                        <div class="notification">
                                            <div class="notification-media">
                                                <img class="circle" width="40" height="40" src="img/0299419341.jpg" alt="Harry Jones">
                                            </div>
                                            <div class="notification-content">
                                                <small class="notification-timestamp">16 min</small>
                                                <h5 class="notification-heading">Harry Jones</h5>
                                                <p class="notification-text">
                                                    <small class="truncate">Hi Teddy, Just wanted to let you know we got the project! We should be starting the planning next week. Harry</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="list-group-item" href="#">
                                        <div class="notification">
                                            <div class="notification-media">
                                                <img class="circle" width="40" height="40" src="img/0980726243.jpg" alt="Eliot Morgan">
                                            </div>
                                            <div class="notification-content">
                                                <small class="notification-timestamp">Sep 15</small>
                                                <h5 class="notification-heading">Eliot Morgan</h5>
                                                <p class="notification-text">
                                                    <small class="truncate">Dear Teddy, Please accept this message as notification that I was unable to work yesterday, due to personal illness.m</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a class="dropdown-btn" href="#">See All</a>
                            </div>
                        </div>
                    <li class="dropdown">

                    <li class="visible-xs-block">
                        <a href="student-post.php">
                            <span class="icon icon-image icon-lg icon-fw"></span>
                             My Profile 
                        </a>
                    </li>
                    </li>
                    <li class="dropdown hidden-xs">
                        <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">

                            <?php
                            if (empty($LECTURE->image_name)) {
                                ?>
                                <img class="circle append_img"  width="36" height="36"  src="img/member.jpg"  >

                            <?php } else { ?>
                                <img   class="circle append_img  "  width="36" height="36"   src="../upload/lecture/profile/<?php echo $LECTURE->image_name ?>"  >  
                            <?php } ?>


                         <?php echo $LECTURE->full_name ?>
                            <span class="caret">   </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">   
                            <li><a href="profile.php">Change Profile</a></li>
                            <li><a href="change-password.php">Change Password</a></li>
                            <li><a href="log-out.php">Sign out</a></li>

                        </ul>
                    </li>
                   
                    <li class="visible-xs-block">
                        <a href="profile.php">
                            <span class="icon icon-user icon-lg icon-fw"></span>
                           Change Profile
                        </a>
                    </li>
                     <li class="visible-xs-block">
                        <a href="change-password.php">
                            <span class="icon icon-key icon-lg icon-fw"></span>
                           Change Password
                        </a>
                    </li>
                    <li class="visible-xs-block">
                        <a href="log-out.php">
                            <span class="icon icon-power-off icon-lg icon-fw"></span>
                            Sign out
                        </a>
                    </li>
                </ul>


                <div class="title-bar">
                    <h1 class="title-bar-title">
                         
                            Welcome To Ecollege.lk  Lectures
                       
                    </h1>

                 </div>
            </nav>
        </div>
    </div>
</div>

 