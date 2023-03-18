<!doctype html>
<html lang="en">

<head>
    <title>Signup</title>
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
                    <div class="col-xxl-8 mx-auto">
                        <div class="company-logo">
                            <img src="<?php echo $basesurl; ?>images/logo.svg" alt="">
                        </div>
                        <form onsubmit="event.preventDefault();" class="" action="" autocomplete="off">
                            <h1 class="heading">Signup</h1>
                            <div class="have-account">Enter your account details below or <a href="<?php echo $path; ?>login" class="">log in</a></div>

                            <div class="form-group">
                                <label class="">Name</label>
                                <input id="name" type="text" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label class="">Email</label>
                                <input id="email" type="email" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="pass" class="form-control" autocomplete="off" required>
                                <i toggle="#password-field" class="icon-eye_vision_view_icon field-icon toggle-password icon-eye_icon icon-eye_slash_icon"></i>
                            </div>
                            <div class="form-group">
                                <label>Repeat Password</label>
                                <input type="password" id="pass2" class="form-control" autocomplete="off" required>
                                <i toggle="#password-field2" class="icon-eye_vision_view_icon field-icon toggle-password icon-eye_icon icon-eye_slash_icon"></i>
                            </div>
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input name="customControlAutosizing" type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">I agree to the <a href="#">term of service</a> & <a href="#">privacy</a></label>
                            </div>

                            <div style="display:none;" id="email_error">
                                    <label class="errormsg">Please enter correct email address.</label>
                                </div>
                            <div style="display:none;" id="password_error">
                                <label class="errormsg">Password does not match.</label>
                            </div>
                            <div style="display:none;" id="login_password_error">
                                <label class="errormsg">Please input all fields.</label>
                            </div>
                           
                            <button onclick="return signup.createUser()" class="btn btn-primary w-100" type="button>">Signup</button>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo $basesurl; ?>js/mlib.js"></script>
    <script src="<?php echo $basesurl; ?>js/functions.js"></script>
    <script src="<?php echo $basesurl; ?>js/utility.js"></script>
    <script src="<?php echo $basesurl; ?>js/signup.js"></script>
    <script src="<?php echo $basesurl; ?>js/request.js"></script>
</body>

</html>