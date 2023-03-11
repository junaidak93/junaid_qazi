<!doctype html>
<html lang="en">

<head>
    <title>Fleet Driver Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
    $srcurl = "../includes/";
    $basesurl = "../assets/";


    $style = $_SERVER['HTTP_HOST'];
    $style = $srcurl . "style.php";
    include($style);
    $urhere = "FleetDriver";

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
                <div class="info">
                    <img class="proimg" src="<?php echo $basesurl; ?>images/driver.png" alt="">
                    <h2 class="title mb-2">Will Smith</h2>
                    <p class="mb-1"><b>will@example.com</b></p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>

                    <h4>Car Detail</h4>

                    <h6 class="mb-1">Model</h6>
                    <p>BMW 8 Series 840i XDrive Coupe</p>

                    <div class="row my-4">
                        <div class="col-lg-3">
                            <h6 class="mb-1">Purchase Date</h6>
                            <p>09/2003</p>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="mb-1">Lorem ipsum</h6>
                            <p>Inceptos phasellu</p>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="mb-1">Lorem ipsum</h6>
                            <p>Inceptos phasellu</p>
                        </div>

                    </div>
                    <div class="row m-0 ">
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
                        <div class="video-thumb">
                            <div class="icons">
                                <a href="#"><i class="icon-Union-5"></i></a>
                                <a href="#"><i class="icon-Group-609"></i></a>
                                <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                            </div>
                            <img src="<?php echo $basesurl; ?>images/group782.png" alt="">
                            <div class="center">
                                <a href="#"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                            </div>
                            <span class="date">11/15/2022</span>
                        </div>


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