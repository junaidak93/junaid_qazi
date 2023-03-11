<!doctype html>
<html lang="en">

<head>
    <title>Create New Pasword</title>
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
                    <div class="col-lg-8 mx-auto">
                        <div class="company-logo">
                            <img src="<?php echo $basesurl; ?>images/logo.svg" alt="">
                        </div>
                        <form onsubmit="event.preventDefault();" class="digit-group" action="" method="get" class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                            <h1 class="heading">One Time Password</h1>
                            <div class="have-account">Enter your OTP</div>
                            <div class="form-group mb-30">
                                <input type="password" class="form-control" id="digit-1" name="digit-1" data-next="digit-2" autofocus />
                                <input type="password" class="form-control" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
                                <input type="password" class="form-control" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
                                <input type="password" class="form-control" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" />
                                <input type="password" class="form-control" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4" />
                            </div>

                            <div style="display:none;" id="wrong_code_error">
                                <label class="errormsg">Please enter correct code.</label>
                            </div>
                            <div style="display:none;" id="fields_error">
                                <label class="errormsg">Please input all fields.</label>
                            </div>                            

                            <button onclick="return otpSetup.IsValidate();" class="btn btn-primary w-75" type="button>">Continue</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo $basesurl; ?>js/mlib.js"></script>
    <script src="<?php echo $basesurl; ?>js/functions.js"></script>
    <script src="<?php echo $basesurl; ?>js/utility.js"></script>
    <script src="<?php echo $basesurl; ?>js/otpSetup.js"></script>
    <script src="<?php echo $basesurl; ?>js/request.js"></script>
</body>

</html>