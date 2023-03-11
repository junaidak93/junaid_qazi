<!doctype html>
<html lang="en">

<head>
    <title>Settings</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
    $srcurl = "../includes/";
    $basesurl = "../assets/";


    $style = $_SERVER['HTTP_HOST'];
    $style = $srcurl . "style.php";
    include($style);
    $urhere = "setting";

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
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="title">Settings</h2>
                        <div class="notification">
                            <ul>
                                <li>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="Notifications">
                                        <label class="custom-control-label" for="Notifications" data-toggle="modal" data-target="#invite">Notifications</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="PushNotification">
                                        <label class="custom-control-label" for="PushNotification">Push Notification</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="Disclaimer">
                                        <label class="custom-control-label" for="Disclaimer">Disclaimer</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="HelpSupport">
                                        <label class="custom-control-label" for="HelpSupport">Help & Support</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="FAQs">
                                        <label class="custom-control-label" for="FAQs">FAQs</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="InviteDrivers">
                                        <label class="custom-control-label" for="InviteDrivers">Invite Drivers</label>
                                    </div>
                                </li>
                            </ul>
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