<!doctype html>
<html lang="en">

<head>
    <title>Forgot Password</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
    session_start();
    session_destroy();
    $srcurl = "../includes/";
    $basesurl = "../assets/";
    $path = "http://localhost:8089/panopte/";

    $style = $_SERVER['HTTP_HOST'];
    $style = $srcurl . "style.php";
    include($style);
    $urhere = "";

    ?>

   <?php
        if ($_SERVER['HTTP_HOST'] != "localhost:8089") {
            $folder_name = "";
            $path = 'http://' . $_SERVER['HTTP_HOST'] . '' . $folder_name . '/';
        }
    ?>
</head>

<body class="loginpg">


    <div class="formwrap">
        <div class="left-position">

        </div>
        <div class="right-position">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="company-logo">
                            <img src="<?php echo $basesurl; ?>images/logo.svg" alt="">
                        </div>
                        <form onsubmit="event.preventDefault();" class="" action="" autocomplete="off">
                            <h1 class="heading">Forgot Password</h1>
                            <div class="have-account">Enter your email</div>

                            <div class="form-group">
                                <label class="">Email</label>
                                <input id="email" type="email" class="form-control" autocomplete="off" required>
                            </div>
                           
                           <div style="display:none;" id="email_error">
                                <label class="errormsg">Please enter correct email.</label>
                            </div>
                            <div style="display:none;" id="fields_error">
                                <label class="errormsg">Please input all fields.</label>
                            </div>
                            <div style="display:none;" id="email_notification">
                                <label class="successmsg">Email has been sent.</label>
                            </div>

                            <button onclick="return forgotPassword.emailSend()" class="btn btn-primary w-100" type="button">Continue</button>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo $basesurl; ?>js/mlib.js"></script>
    <script src="<?php echo $basesurl; ?>js/functions.js"></script>
    <script src="<?php echo $basesurl; ?>js/utility.js"></script>
    <script src="<?php echo $basesurl; ?>js/forgotPassword.js"></script>
    <script src="<?php echo $basesurl; ?>js/request.js"></script>
</body>

</html>