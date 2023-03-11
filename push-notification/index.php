<!doctype html>
<html lang="en">

<head>
    <title>Push Notification</title>
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
                <h2 class="title ">Push Notification</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <form class="" action="" autocomplete="off">
                          
                            <div class="form-row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="">Tittle</label>
                                        <input type="text" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Discription</label>
                                        <textarea name="" id="" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6">

                                    <button class="btn btn-primary w-100 mt-2" type="submit"  data-toggle="modal" data-target="#congratulations">Push Notification</button>
                                </div>
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