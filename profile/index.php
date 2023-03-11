<!doctype html>
<html lang="en">

<head>
    <title>Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
    $srcurl = "../includes/";
    $basesurl = "../assets/";

    $style = $_SERVER['HTTP_HOST'];
    $style = $srcurl . "style.php";
    include($style);
    $urhere = "profile";

    ?>
</head>

<body class="">
    <?php
    $header = $_SERVER['HTTP_HOST'];
    $header = $srcurl . "header.php";
    include($header);
    ?>

    <?php
    $sidebar = $_SERVER['HTTP_HOST'];
    $sidebar = $srcurl . "sidebar.php";
    include($sidebar);
    ?>

    <div class="body-wrapper">

        <div class="content">
            <section class="section-padding">
                <div class="cover-photo">
                    <img src="<?php echo $basesurl; ?>images/cover.png" alt="">
                    <div class="upload">
                        <input type="file">
                        <i class="icon-edit_icon-1"></i>
                    </div>
                </div>
                <div class="profile-info">
                    <div class="upload">
                        <input type="file">
                        <i class="icon-edit_icon-1"></i>
                    </div>
                    <div class="proimg">
                        <img src="<?php echo $basesurl; ?>images/profile.png" alt="">
                    </div>
                    <h4>Will, Designer</h4>
                    <h6>will@example.com</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="text-lg-right my-lg-0 my-4">
                    <a href="#" class="btn btn-primary">Buy Storage Pack</a>
                </div>
                <h4 class="title text-center">Videos</h4>
                <hr>
                <div class="row justify-content-center">
                    <div class="video-thumb">
                        <div class="icons">
                            <a href="#"><i class="icon-Union-5"></i></a>
                            <a href="#"><i class="icon-Group-609"></i></a>
                            <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                        </div>
                        <img src="<?php echo $basesurl; ?>images/group778.png" alt="">
                        <div class="center">
                            <a href="#"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                        </div>
                        <span class="date">11/15/2022</span>
                    </div>
                    <div class="video-thumb">
                        <div class="icons">
                            <a href="#"><i class="icon-Union-5"></i></a>
                            <a href="#"><i class="icon-Group-609"></i></a>
                            <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                        </div>
                        <img src="<?php echo $basesurl; ?>images/group779.png" alt="">
                        <div class="center">
                            <a href="#"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                        </div>
                        <span class="date">11/15/2022</span>
                    </div>
                    <div class="video-thumb">
                        <div class="icons">
                            <a href="#"><i class="icon-Union-5"></i></a>
                            <a href="#"><i class="icon-Group-609"></i></a>
                            <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                        </div>
                        <img src="<?php echo $basesurl; ?>images/group780.png" alt="">
                        <div class="center">
                            <a href="#"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                        </div>
                        <span class="date">11/15/2022</span>
                    </div>
                    <div class="video-thumb">
                        <div class="icons">
                            <a href="#"><i class="icon-Union-5"></i></a>
                            <a href="#"><i class="icon-Group-609"></i></a>
                            <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                        </div>
                        <img src="<?php echo $basesurl; ?>images/group781.png" alt="">
                        <div class="center">
                            <a href="#"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                        </div>
                        <span class="date">11/15/2022</span>
                    </div>
                </div>

            </section>
            <?php
            $footer = $_SERVER['HTTP_HOST'];
            $footer = $srcurl . "footer.php";
            include($footer);
            ?>
        </div>
    </div>

</body>

</html>