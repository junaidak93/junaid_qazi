<!doctype html>
<html lang="en">

<head>
    <title>profile Edit</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
    $srcurl = "../includes/";
    $basesurl = "../assets/";


    $style = $_SERVER['HTTP_HOST'];
    $style = $srcurl . "style.php";
    include($style);
    $urhere = "profile";

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
                    <div class="col-lg-10">
                        <form class="" action="" autocomplete="off">
                            <div class="proimg">
                                <img src="<?php echo $basesurl; ?>images/proimg.png" alt="">
                                <div class="upload">
                                    <input type="file">
                                    <i class="icon-Group-73"><span class="path1"></span><span class="path2"></span></i>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="">Name</label>
                                        <input type="text" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="">Password</label>
                                        <input type="text" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
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
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="">Gender</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Male</option>
                                            <option value="">Female</option>
                                            <option value="">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>About yourself</label>
                                        <input type="text" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Receive newsletters</label>
                                    </div>
                                    <button class="btn btn-primary w-100 mt-4"  type="submit">Save</button>
                                </div>
                            </div>
                        </form>
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