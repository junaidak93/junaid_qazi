<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
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
            $path = 'https://' . $_SERVER['HTTP_HOST'] . '' . $folder_name . '/';
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
                            <h1 class="heading">Login</h1>
                            <div class="have-account">Login below or <a href="<?php echo $path; ?>signup" class="">create an account</a></div>

                            <div class="form-group">
                                <label class="">Email</label>
                                <input id="email" type="email" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input id="pass" type="password" class="form-control" autocomplete="off" required>
                                <i toggle="#password-field" class="icon-eye_vision_view_icon field-icon toggle-password icon-eye_icon icon-eye_slash_icon"></i>
                            </div>
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="custom-control custom-checkbox mr-sm-2 mb-2">
                                        <input name="customControlAutosizing" type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
                                    </div>
                                  
                                </div>
                                <div class="col-sm-5 text-sm-right mb-3">
                                    <a href="<?php echo $path; ?>forgot-password" class="">Forgot Password?</a>
                                </div>

                                <div style="display:none;" id="email_error">
                                    <label class="errormsg">Please enter correct email address.</label>
                                </div>
                                <div style="display:none;" id="login_error">
                                    <label class="errormsg">Email and Password does not match.</label>
                                </div>
                                <div style="display:none;" id="login_password_error">
                                    <label class="errormsg">Please input all fields.</label>
                                </div>
                            </div>
                            <button onclick="return login.Authenticate()" class="btn btn-primary w-100" type="button">Sign-In</button>
                            <div class="or">
                                <p>OR</p>
                            </div>
                          
                            <a class="btn btn-outline w-100 mb-2" href="#"><img src="<?php echo $basesurl; ?>images/fb.svg" alt=""> Login With Facebook</a>
                            <a class="btn btn-outline w-100 mb-2" href="#"><img src="<?php echo $basesurl; ?>images/google.svg" alt=""> Login With Google</a>
                            <a class="btn btn-outline w-100" href="#"><img src="<?php echo $basesurl; ?>images/apple.svg" alt="">  Login With Apple</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo $basesurl; ?>js/mlib.js"></script>
    <script src="<?php echo $basesurl; ?>js/functions.js"></script>
    <script src="<?php echo $basesurl; ?>js/utility.js"></script>
    <script src="<?php echo $basesurl; ?>js/login.js"></script>
    <script src="<?php echo $basesurl; ?>js/request.js"></script>  
</body>

</html>