<!doctype html>
<html lang="en">

<head>
    <title>Car Detail</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
    $srcurl = "../includes/";
    $basesurl = "../assets/";


    $style = $_SERVER['HTTP_HOST'];
    $style = $srcurl . "style.php";
    include($style);
    $urhere = "cardetail";

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
                <h2 class="title ">Car Detail</h2>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="detailimg">
                            <img class="" src="<?php echo $basesurl; ?>images/img.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 align-self-center">
                        <h2>BMW 8 Series</h2>
                        <h6 class="mb-1">Model</h6>
                        <p>BMW 8 Series 840i XDrive Coupe</p>
                        <div class="row my-4">
                            <div class="col-lg-4">
                                <h6 class="mb-1">Purchase Date</h6>
                                <p class="mb-3 mb-lg-0">09/2003</p>
                            </div>
                            <div class="col-lg-4">
                                <h6 class="mb-1">Lorem ipsum</h6>
                                <p class="mb-3 mb-lg-0">Inceptos phasellu</p>
                            </div>
                            <div class="col-lg-4">
                                <h6 class="mb-1">Lorem ipsum</h6>
                                <p class="mb-3 mb-lg-0">Inceptos phasellu</p>
                            </div>
                           
                        </div>
                        <h6 class="mb-2">Description</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sem pretium condimentum primis, magna ad maecenas sagittis aenean massa penatibus tincidunt taciti.Lorem ipsum dolor sit amet consectetur adipiscing elit, enim nullam pretium interdum facilisi sodales hac tellus, etiam hendrerit vitae a netus libero. pretium interdum facilisi sodales hac tellus, etiam hendrerit vitae a netus libero.</p>
                        <a href="#" class="btn btn-primary w-50 mt-lg-4">Save Details</a>
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