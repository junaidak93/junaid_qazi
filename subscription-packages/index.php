<!doctype html>
<html lang="en">

<head>
    <title>Packages</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
    $srcurl = "../includes/";
    $basesurl = "../assets/";


    $style = $_SERVER['HTTP_HOST'];
    $style = $srcurl . "style.php";
    include($style);
    $urhere = "Packages";

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
                <h2 class="title">Packages</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="packlist">
                            <h6>SILVER</h6>
                            <h2 class="price"><sup>$</sup>24.99<sub>USD</sub></h2>
                            <a href="#" class="btn btn-primary btn-sm">Choose</a>
                            <h4>Up to 5000 Tb</h4>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="packlist">
                            <h6>Gold</h6>
                            <h2 class="price"><sup>$</sup>24.99<sub>USD</sub></h2>
                            <a href="#" class="btn btn-primary btn-sm">Choose</a>
                            <h4>Up to 5000 Tb</h4>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="packlist">
                            <h6>PREMIUM</h6>
                            <h2 class="price"><sup>$</sup>24.99<sub>USD</sub></h2>
                            <a href="#" class="btn btn-primary btn-sm">Choose</a>
                            <h4>Up to 5000 Tb</h4>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p>If you have any questions, please feel free to contact us.</p>
                    <div class="d-flex justify-content-center align-items-center">
                        We accept 
                        <img class="mx-2" src="<?php echo $basesurl; ?>images/visa.png" alt="...">
                        <img class="mx-2" src="<?php echo $basesurl; ?>images/paypal.png" alt="...">
                        <img class="" src="<?php echo $basesurl; ?>images/pay.png" alt="...">
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