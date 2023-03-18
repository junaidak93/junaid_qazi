<!doctype html>
<html lang="en">

<head>
    <title>Profile Create</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
    $srcurl = "../includes/";
    $basesurl = "../assets/";


    $style = $_SERVER['HTTP_HOST'];
    $style = $srcurl . "style.php";
    include($style);
    $urhere = "";

    ?>

    <?php

    if ($_SERVER['HTTP_HOST'] == "localhost") {
        $folder_name = "";
        $path = 'https://localhost/retroaction/' . $folder_name;
    } else {
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

                        <form class="" action="" autocomplete="off">
                            <div class="proimg">
                                <img src="<?php echo $basesurl; ?>images/proimg.png" alt="">
                                <div class="upload">
                                    <input type="file">
                                    <i class="icon-Group-73"><span class="path1"></span><span class="path2"></span></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="">Name</label>
                                <input type="text" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label class="">About yourself</label>
                                <textarea name="" id="" rows="5" class="form-control"></textarea>
                            </div>
                            <label class="">DOB</label>
                            <div class="form-row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="">Gender</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                    <option value="">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>City, State</label>
                                <input type="text" class="form-control" autocomplete="off" required>
                            </div>
                            

                            <button class="btn btn-primary w-100" type="submit">Continue</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo $basesurl; ?>js/mlib.js"></script>
    <script src="<?php echo $basesurl; ?>js/functions.js"></script>
</body>

</html>