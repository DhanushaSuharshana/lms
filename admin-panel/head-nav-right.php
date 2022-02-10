<ul class="nav navbar-nav navbar-right">
    <li class="visible-xs-block">
        <h4 class="navbar-text text-center">Hi, Teddy Wilson</h4>
    </li>

    <li class="dropdown">
        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
            <span class="icon-with-child hidden-xs">
                <span class="icon icon-bell-o icon-lg"></span>
                <span class="badge badge-primary badge-above right">7</span>
            </span>
            <span class="visible-xs-block">
                <span class="icon icon-bell icon-lg icon-fw"></span>
                <span class="badge badge-primary pull-right">7</span>
                Notifications
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
            <div class="dropdown-header">
                <a class="dropdown-link" href="#">Mark all as read</a>
                <h5 class="dropdown-heading">Recent Notifications</h5>
            </div>
            <div class="dropdown-body">
                <div class="list-group list-group-divided custom-scrollbar">
                    <a class="list-group-item" href="#">
                        <div class="notification">
                            <div class="notification-media">
                                <span class="icon icon-exclamation-triangle bg-warning circle sq-40"></span>
                            </div>
                            <div class="notification-content">
                                <small class="notification-timestamp">35 min</small>
                                <h5 class="notification-heading">Update Status</h5>
                                <p class="notification-text">
                                    <small class="truncate">Failed to get available update data. To ensure the proper functioning of your application, update now.</small>
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="notification">
                            <div class="notification-media">
                                <span class="icon icon-flag bg-success circle sq-40"></span>
                            </div>
                            <div class="notification-content">
                                <small class="notification-timestamp">43 min</small>
                                <h5 class="notification-heading">Account Contact Change</h5>
                                <p class="notification-text">
                                    <small class="truncate">A contact detail associated with your account teddy.wilson, has recently changed.</small>
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="notification">
                            <div class="notification-media">
                                <span class="icon icon-exclamation-triangle bg-warning circle sq-40"></span>
                            </div>
                            <div class="notification-content">
                                <small class="notification-timestamp">1 hr</small>
                                <h5 class="notification-heading">Failed Login Warning</h5>
                                <p class="notification-text">
                                    <small class="truncate">There was a failed login attempt from "192.98.19.164" into the account teddy.wilson.</small>
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="notification">
                            <div class="notification-media">
                                <img class="circle" width="40" height="40" src="img/0310728269.jpg" alt="Daniel Taylor">
                            </div>
                            <div class="notification-content">
                                <small class="notification-timestamp">4 hr</small>
                                <h5 class="notification-heading">Daniel Taylor</h5>
                                <p class="notification-text">
                                    <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="notification">
                            <div class="notification-media">
                                <img class="circle" width="40" height="40" src="img/0872116906.jpg" alt="Emma Lewis">
                            </div>
                            <div class="notification-content">
                                <small class="notification-timestamp">8 hr</small>
                                <h5 class="notification-heading">Emma Lewis</h5>
                                <p class="notification-text">
                                    <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="notification">
                            <div class="notification-media">
                                <img class="circle" width="40" height="40" src="img/0601274412.jpg" alt="Sophia Evans">
                            </div>
                            <div class="notification-content">
                                <small class="notification-timestamp">8 hr</small>
                                <h5 class="notification-heading">Sophia Evans</h5>
                                <p class="notification-text">
                                    <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="notification">
                            <div class="notification-media">

                                <img class="circle" width="40" height="40" src="img/0180441436.jpg" alt="Teddy Wilson">
                            </div>
                            <div class="notification-content">
                                <small class="notification-timestamp">9 hr</small>
                                <h5 class="notification-heading">Teddy Wilson</h5>
                                <p class="notification-text">
                                    <small class="truncate">Published a new post: "Everything you know about Bootstrap is wrong".</small>
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
    </li>
    <li class="dropdown hidden-xs">
        <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
            <?php
            if (empty($USER->image_name)) {
                ?>
            <img class="circle" width="40" height="40" src="img/3002121059.jpg" class="append_img profile-avetar-img " >

            <?php } else { ?>
                <img   class="profile-avetar-img  append_img img-circle "  width="40" height="40"   src="upload/user/profile/<?php echo $USER->image_name ?>"  >   
            <?php } ?>        
                <span class="caret"></span>
        </button>
        <ul class="dropdown-menu dropdown-menu-right">

            <li><a href="profile.php">Profile</a></li>
            <li><a href="change-password.php">Change Password</a></li>
            <li><a href="log-out.php">Sign out</a></li>
        </ul>
    </li>
    <!--    <li class="visible-xs-block">
            <a href="contacts.html">
                <span class="icon icon-users icon-lg icon-fw"></span>
                Contacts
            </a>
        </li>
        <li class="visible-xs-block">
            <a href="profile.html">
                <span class="icon icon-user icon-lg icon-fw"></span>
                Profile
            </a>
        </li>
        <li class="visible-xs-block">
            <a href="login-1.html">
                <span class="icon icon-power-off icon-lg icon-fw"></span>
                Sign out
            </a>
        </li>-->
</ul>