<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
    $srcurl = "./includes/";
    $basesurl = "./assets/";


    $style = $_SERVER['HTTP_HOST'];
    $style = $srcurl . "style.php";
    include($style);
    $urhere = "Home";

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
                <div class="row mb-4">
                    <div class="col-lg-6">
                        <h2 class="title">Recent Videos</h2>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a href="#" class="fz-30"><i class="icon-menu_navigation_direction_arrow_location_icon"></i></a>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="video-thumb">
                        <div class="icons">
                            <a href="#"><i class="icon-Union-5"></i></a>
                            <a href="#"><i class="icon-Group-609"></i></a>
                            <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                        </div>
                        <img src="<?php echo $basesurl; ?>images/group778.png" alt="">
                        <div class="center">
                            <a href="#" data-toggle="modal" data-target="#video"><i class="icon-Icon-ionic-ios-videocam"></i></a>
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
                            <a href="#" data-toggle="modal" data-target="#video"><i class="icon-Icon-ionic-ios-videocam"></i></a>
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
                            <a href="#" data-toggle="modal" data-target="#video"><i class="icon-Icon-ionic-ios-videocam"></i></a>
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
                            <a href="#" data-toggle="modal" data-target="#video"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                        </div>
                        <span class="date">11/15/2022</span>
                    </div>
                    <div class="video-thumb">
                        <div class="icons">
                            <a href="#"><i class="icon-Union-5"></i></a>
                            <a href="#"><i class="icon-Group-609"></i></a>
                            <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                        </div>
                        <img src="<?php echo $basesurl; ?>images/group782.png" alt="">
                        <div class="center">
                            <a href="#" data-toggle="modal" data-target="#video"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                        </div>
                        <span class="date">11/15/2022</span>
                    </div>
                    <div class="video-thumb">
                        <div class="icons">
                            <a href="#"><i class="icon-Union-5"></i></a>
                            <a href="#"><i class="icon-Group-609"></i></a>
                            <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                        </div>
                        <img src="<?php echo $basesurl; ?>images/group783.png" alt="">
                        <div class="center">
                            <a href="#" data-toggle="modal" data-target="#video"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                        </div>
                        <span class="date">11/15/2022</span>
                    </div>
                    <div class="video-thumb">
                        <div class="icons">
                            <a href="#"><i class="icon-Union-5"></i></a>
                            <a href="#"><i class="icon-Group-609"></i></a>
                            <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                        </div>
                        <img src="<?php echo $basesurl; ?>images/group784.png" alt="">
                        <div class="center">
                            <a href="#" data-toggle="modal" data-target="#video"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                        </div>
                        <span class="date">11/15/2022</span>
                    </div>
                    <div class="video-thumb">
                        <div class="icons">
                            <a href="#"><i class="icon-Union-5"></i></a>
                            <a href="#"><i class="icon-Group-609"></i></a>
                            <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                        </div>
                        <img src="<?php echo $basesurl; ?>images/group785.png" alt="">
                        <div class="center">
                            <a href="#" data-toggle="modal" data-target="#video"><i class="icon-Icon-ionic-ios-videocam"></i></a>
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