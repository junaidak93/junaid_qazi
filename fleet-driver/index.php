<!doctype html>
<html lang="en">

<head>
    <title>Fleet Driver</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
    $srcurl = "../includes/";
    $basesurl = "../assets/";


    $style = $_SERVER['HTTP_HOST'];
    $style = $srcurl . "style.php";
    include($style);
    $urhere = "fleetdriver";

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

                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-Fleet-tab" data-toggle="pill" data-target="#pills-Fleet" type="button" role="tab" aria-controls="pills-Fleet" aria-selected="true">All Fleet Driver</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Posted-tab" data-toggle="pill" data-target="#pills-Posted" type="button" role="tab" aria-controls="pills-Posted" aria-selected="false">Videos Posted By Driver</button>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-Fleet" role="tabpanel" aria-labelledby="pills-Fleet-tab">
                        <div class="row my-4">
                            <div class="col-lg-6 align-self-center">
                                <h2 class="title">Fleet Driver</h2>
                            </div>
                            <div class="col-lg-6 text-lg-right">
                                <div class="search">
                                    <i class="icon-Group-750"></i>
                                    <input type="text" placeholder="Search Driver...">
                                </div>
                                <div class="adddriver">
                                    <div class="upload">
                                        <input type="file">
                                        <i class="icon-Group-73"><span class="path1"></span><span class="path2"></span></i>
                                    </div>
                                    <p>Add Driver</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card driver-card">
                                <div class="card-body">
                                    <img src="<?php echo $basesurl; ?>images/driver.png" alt="">
                                    <h4>Will Smith</h4>
                                    <p>Lorem ipsum dolor sit...</p>
                                    <a href="#" class="btn btn-primary btn-sm mr-2">View Detail</a>
                                    <a href="#" class="btn btn-outdanger btn-sm">Delete</a>
                                </div>
                            </div>
                            <div class="card driver-card">
                                <div class="card-body">
                                    <img src="<?php echo $basesurl; ?>images/driver.png" alt="">
                                    <h4>Will Smith</h4>
                                    <p>Lorem ipsum dolor sit...</p>
                                    <a href="#" class="btn btn-primary btn-sm mr-2">View Detail</a>
                                    <a href="#" class="btn btn-outdanger btn-sm">Delete</a>
                                </div>
                            </div>
                            <div class="card driver-card">
                                <div class="card-body">
                                    <img src="<?php echo $basesurl; ?>images/driver.png" alt="">
                                    <h4>Will Smith</h4>
                                    <p>Lorem ipsum dolor sit...</p>
                                    <a href="#" class="btn btn-primary btn-sm mr-2">View Detail</a>
                                    <a href="#" class="btn btn-outdanger btn-sm">Delete</a>
                                </div>
                            </div>
                            <div class="card driver-card">
                                <div class="card-body">
                                    <img src="<?php echo $basesurl; ?>images/driver.png" alt="">
                                    <h4>Will Smith</h4>
                                    <p>Lorem ipsum dolor sit...</p>
                                    <a href="#" class="btn btn-primary btn-sm mr-2">View Detail</a>
                                    <a href="#" class="btn btn-outdanger btn-sm">Delete</a>
                                </div>
                            </div>
                            <div class="card driver-card">
                                <div class="card-body">
                                    <img src="<?php echo $basesurl; ?>images/driver.png" alt="">
                                    <h4>Will Smith</h4>
                                    <p>Lorem ipsum dolor sit...</p>
                                    <a href="#" class="btn btn-primary btn-sm mr-2">View Detail</a>
                                    <a href="#" class="btn btn-outdanger btn-sm">Delete</a>
                                </div>
                            </div>
                            <div class="card driver-card">
                                <div class="card-body">
                                    <img src="<?php echo $basesurl; ?>images/driver.png" alt="">
                                    <h4>Will Smith</h4>
                                    <p>Lorem ipsum dolor sit...</p>
                                    <a href="#" class="btn btn-primary btn-sm mr-2">View Detail</a>
                                    <a href="#" class="btn btn-outdanger btn-sm">Delete</a>
                                </div>
                            </div>
                            <div class="card driver-card">
                                <div class="card-body">
                                    <img src="<?php echo $basesurl; ?>images/driver.png" alt="">
                                    <h4>Will Smith</h4>
                                    <p>Lorem ipsum dolor sit...</p>
                                    <a href="#" class="btn btn-primary btn-sm mr-2">View Detail</a>
                                    <a href="#" class="btn btn-outdanger btn-sm">Delete</a>
                                </div>
                            </div>
                            <div class="card driver-card">
                                <div class="card-body">
                                    <img src="<?php echo $basesurl; ?>images/driver.png" alt="">
                                    <h4>Will Smith</h4>
                                    <p>Lorem ipsum dolor sit...</p>
                                    <a href="#" class="btn btn-primary btn-sm mr-2">View Detail</a>
                                    <a href="#" class="btn btn-outdanger btn-sm">Delete</a>
                                </div>
                            </div>
                            <div class="card driver-card">
                                <div class="card-body">
                                    <img src="<?php echo $basesurl; ?>images/driver.png" alt="">
                                    <h4>Will Smith</h4>
                                    <p>Lorem ipsum dolor sit...</p>
                                    <a href="#" class="btn btn-primary btn-sm mr-2">View Detail</a>
                                    <a href="#" class="btn btn-outdanger btn-sm">Delete</a>
                                </div>
                            </div>
                            <div class="card driver-card">
                                <div class="card-body">
                                    <img src="<?php echo $basesurl; ?>images/driver.png" alt="">
                                    <h4>Will Smith</h4>
                                    <p>Lorem ipsum dolor sit...</p>
                                    <a href="#" class="btn btn-primary btn-sm mr-2">View Detail</a>
                                    <a href="#" class="btn btn-outdanger btn-sm">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Posted" role="tabpanel" aria-labelledby="pills-Posted-tab">
                        <div class="row my-4">
                            <div class="col-lg-6">
                                <h2 class="title">Videos Posted By Driver</h2>
                            </div>
                            <div class="col-lg-6 text-lg-right">
                                <div class="btn-group dropdown-filter">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Filter <I class="icon-filter_list_ic_icon"></I>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-header">Resources</li>
                                        <li>
                                            <label>
                                                <input type="checkbox">Will
                                            </label>
                                            <label>
                                                <input type="checkbox">Braine
                                            </label>
                                            <label>
                                                <input type="checkbox">John
                                            </label>
                                            <label>
                                                <input type="checkbox">Smith
                                            </label>
                                            <label>
                                                <input type="checkbox">John
                                            </label>
                                        
                                        <li role="separator" class="divider"></li>

                                        <li class="dropdown-header">Date</li>
                                        <li class="d-flex">
                                            <input type="date" class="form-control mr-2">
                                            <input type="date" class="form-control">
                                        </li>
                                        <li class="action">
                                            <button>Clear all filters</button>
                                            <div>
                                                <button>Cancel</button>
                                                <button>Apply</button>
                                            </div>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="video-thumb">
                                <div class="icons">
                                    <a href="#"><i class="icon-Union-5"></i></a>
                                    <a href="#"><i class="icon-Group-609"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                                </div>
                                <img src="<?php echo $basesurl; ?>images/group778.png" alt="">
                                <div class="center">
                                    <a href="#"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                                </div>
                                <span class="date">11/15/2022</span>
                            </div>
                            <div class="video-thumb">
                                <div class="icons">
                                    <a href="#"><i class="icon-Union-5"></i></a>
                                    <a href="#"><i class="icon-Group-609"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                                </div>
                                <img src="<?php echo $basesurl; ?>images/group779.png" alt="">
                                <div class="center">
                                    <a href="#"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                                </div>
                                <span class="date">11/15/2022</span>
                            </div>
                            <div class="video-thumb">
                                <div class="icons">
                                    <a href="#"><i class="icon-Union-5"></i></a>
                                    <a href="#"><i class="icon-Group-609"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                                </div>
                                <img src="<?php echo $basesurl; ?>images/group780.png" alt="">
                                <div class="center">
                                    <a href="#"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                                </div>
                                <span class="date">11/15/2022</span>
                            </div>
                            <div class="video-thumb">
                                <div class="icons">
                                    <a href="#"><i class="icon-Union-5"></i></a>
                                    <a href="#"><i class="icon-Group-609"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                                </div>
                                <img src="<?php echo $basesurl; ?>images/group781.png" alt="">
                                <div class="center">
                                    <a href="#"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                                </div>
                                <span class="date">11/15/2022</span>
                            </div>
                            <div class="video-thumb">
                                <div class="icons">
                                    <a href="#"><i class="icon-Union-5"></i></a>
                                    <a href="#"><i class="icon-Group-609"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                                </div>
                                <img src="<?php echo $basesurl; ?>images/group782.png" alt="">
                                <div class="center">
                                    <a href="#"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                                </div>
                                <span class="date">11/15/2022</span>
                            </div>
                            <div class="video-thumb">
                                <div class="icons">
                                    <a href="#"><i class="icon-Union-5"></i></a>
                                    <a href="#"><i class="icon-Group-609"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                                </div>
                                <img src="<?php echo $basesurl; ?>images/group783.png" alt="">
                                <div class="center">
                                    <a href="#"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                                </div>
                                <span class="date">11/15/2022</span>
                            </div>
                            <div class="video-thumb">
                                <div class="icons">
                                    <a href="#"><i class="icon-Union-5"></i></a>
                                    <a href="#"><i class="icon-Group-609"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                                </div>
                                <img src="<?php echo $basesurl; ?>images/group784.png" alt="">
                                <div class="center">
                                    <a href="#"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                                </div>
                                <span class="date">11/15/2022</span>
                            </div>
                            <div class="video-thumb">
                                <div class="icons">
                                    <a href="#"><i class="icon-Union-5"></i></a>
                                    <a href="#"><i class="icon-Group-609"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#social"><i class="icon-Icon-awesome-share-alt"></i></a>
                                </div>
                                <img src="<?php echo $basesurl; ?>images/group785.png" alt="">
                                <div class="center">
                                    <a href="#"><i class="icon-Icon-ionic-ios-videocam"></i></a>
                                </div>
                                <span class="date">11/15/2022</span>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <?php
            $footer = $_SERVER['HTTP_HOST'];
            $footer = $srcurl . "footer.php";
            include($footer);
            ?>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var calendarEl = document.getElementById('calendar');

                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        timeZone: 'UTC',
                        initialView: 'multiMonthYear',
                        editable: true,
                        events: 'https://fullcalendar.io/api/demo-feeds/events.json'
                    });

                    calendar.render();
                    $('button[data-toggle="pill"]').on('shown.bs.tab', function(e) {
                        calendar.render();
                    });

                });
            </script>
        </div>
    </div>

</body>

</html>