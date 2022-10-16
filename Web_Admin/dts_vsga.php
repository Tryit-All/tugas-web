<?php
require('koneksi.php');
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: pages-login.php");
    exit();
}

// if (isset($_SESSION['level']) == 'user'){
//     header('Location: ../Web_User/index.php');
//     exit();
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus Admin: Creative Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="../css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="../css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="../css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
    <link href="../css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
    <link href="../css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../css/lib/themify-icons.css" rel="stylesheet">
    <link href="../css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../css/lib/weather-icons.css" rel="stylesheet" />
    <link href="../css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../css/lib/helper.css" rel="stylesheet">
    <link href="app-event-calender.html" rel="stylesheet">
    <link href="../css/lib/toastr/toastr.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body class="pace-done">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano has-scrollbar">
            <div class="nano-content active" style="right: -17px;" tabindex="0">
                <div class="logo"><a href="index.html">
                        <!-- <img src="images/logo.png" alt="" /> --><span><img src="assets/img/logo.png" alt=""></span>
                    </a></div>
                <ul class="d-block">
                    <li class="label">Features</li>
                    <li><a href="index.php"><i class="ti-layout-grid4-alt" h></i> Table</a></li>
                    <li><a href="Multipleuplode.php"><i class="ti-view-list-alt" h></i> Mutiple Uplode</a></li>
                    <li class="active open"><a><i class="ti-user"></i> DTS VSGA</a>
                    </li>
                    <li><a href="logout.php"><i class="ti-close" h></i> Logout</a></li>
                </ul>
            </div>
            <div class="nano-pane" style="display: none;">
                <div class="nano-slider" style="height: 590px; transform: translate(0px, 0px);"></div>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->


    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle is-active">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Tasnim</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/1.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/2.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/2.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-email"></i>
                                                    <span>Inbox</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-settings"></i>
                                                    <span>Setting</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-lock"></i>
                                                    <span>Lock Screen</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Features</a></li>
                                    <li class="breadcrumb-item active">DTS VSGA</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="jsgrid-table-panel">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-success">
                                                            <i></i> Tambah
                                                        </a>
                                                        <!-- <a href="input.php"><input class="btn btn-success" type="submit" name="update" value="Tambah"></a> -->
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                    </div>
                                                    <!-- Modal Add Category -->
                                                    <div class="modal fade none-border" id="add-category">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">
                                                                        <strong>Add a Data </strong>
                                                                    </h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="tambah.php" method="POST">
                                                                        <div class="column">
                                                                            <div class="col-md-6">
                                                                                <label class="control-label">Name</label>
                                                                                <input class="form-control form-white" placeholder="Enter nama" type="text" name="nama" />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="tgl">Tanggal Lahir Anda:</label>
                                                                                <input type="date" name="tgl" id="tgl" class="form-control form-white" placeholder="Masukan tanggal lahir anda" required>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="control-label">Email</label>
                                                                                <input class="form-control form-white" placeholder="Enter email" type="text" name="email" />
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="control-label">Nomor telpon</label>
                                                                                <input class="form-control form-white" placeholder="Enter telp" type="text" name="tlpn" />
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="control-label">Alamat</label>
                                                                                <input class="form-control form-white" placeholder="Enter alamat" type="text" name="alamat" />
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="kelamin">Jenis Kelamin</label>
                                                                                <select name="kelamin" id="Kelamin" class="form-control" required>
                                                                                    <option value="">- Pilih Jenis Kelamin -</option>
                                                                                    <option value="Pria">Pria</option>
                                                                                    <option value="Wanita">Wanita</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                                            <!-- <input type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal" name="tambah" value="Save"> -->
                                                                            <input  type="submit" class="btn btn-danger waves-effect waves-light save-category" name="tambah2" value="Save">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 15px;">No</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 80.1719px;">Fullname</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 40.1719px;">Tanggal Lahir</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 80.6094px;">Email</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 40.1719px;">Nomor Telpon</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 40.1719px;">Alamat</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 35.1719px;">Jenis Kelamin</th>
                                                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 66.1094px;">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <th rowspan="1" colspan="1">Nomor</th>
                                                                    <th rowspan="1" colspan="1">Fullname</th>
                                                                    <th rowspan="1" colspan="1">Tanggal lahir</th>
                                                                    <th rowspan="1" colspan="1">Email</th>
                                                                    <th rowspan="1" colspan="1">Nomor telpon</th>
                                                                    <th rowspan="1" colspan="1">Alamat</th>
                                                                    <th rowspan="1" colspan="1">Jenis Kelamin</th>
                                                                    <th rowspan="1" colspan="1">Aksi</th>
                                                                </tr>
                                                            </tfoot>
                                                            <?php
                                                            $connected = new query();

                                                            $query = 'SELECT * FROM diri';
                                                            $result = mysqli_query($connected->connect(), $query);
                                                            $no = 1;
                                                            while ($row = mysqli_fetch_array($result)) {
                                                                $idUser = $row['id'];
                                                                $userName = $row['nama'];
                                                                $userLahir = $row['lahir'];
                                                                $userMail = $row['email'];
                                                                $userTelpon = $row['telpon'];
                                                                $userAlamat = $row['alamat'];
                                                                $userKelamin = $row['kelamin'];

                                                            ?>
                                                                <tbody>

                                                                    <tr class="odd">
                                                                        <form action="editDelete.php?id=<?php echo $row['id']; ?>" method="POST">
                                                                            <td class="sorting_1"><?php echo $no ?></td>
                                                                            <td><input type="text" name="nama" id="nama" class="form-control" value="<?php echo $userName; ?>"></td>
                                                                            <td><input type="date" name="tgl" id="tgl" class="form-control" value="<?php echo $userLahir; ?>"></td>
                                                                            <td><input type="email" name="email" id="email" name="email" class="formcontrol" value="<?php echo $userMail; ?>"></td>
                                                                            <td><input type="number" name="tlpn" id="tlpn" pattern="[0-9]{12}" onkeypress="return hanyaAngka(event)" class="form-control" value="<?php echo $userTelpon; ?>"></td>
                                                                            <td><input class="form-control" name="alamat" id="alamat" rows="3" value="<?php echo $userAlamat; ?>"></td>
                                                                            <td> <select name="kelamin" id="Kelamin" value="" class="form-control">
                                                                                    <option value="<?php echo $data['kelamin']; ?>"><?php echo $userKelamin; ?></option>
                                                                                    <option value="<?php
                                                                                                    if ($userKelamin == 'Pria') {
                                                                                                        echo 'Wanita';
                                                                                                    } else {
                                                                                                        echo 'Pria';
                                                                                                    }
                                                                                                    ?>">
                                                                                        <?php
                                                                                        if ($userKelamin == 'Pria') {
                                                                                            echo 'Wanita';
                                                                                        } else {
                                                                                            echo 'Pria';
                                                                                        }
                                                                                        ?>

                                                                                    </option>
                                                                                </select>
                                                                            </td>
                                                                            <td>
                                                                                <input class="btn btn-primary" type="submit" name="update" value="Edit">
                                                                                <input class="btn btn-danger" type="submit" name="delete" value="Hapus">
                                                                            </td>
                                                                        </form>
                                                                    </tr>

                                                                </tbody>
                                                            <?php
                                                                $no++;
                                                            }
                                                            ?>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-5">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>











    <!-- jquery vendor -->
    <script src="../js/lib/jquery.min.js"></script>
    <script src="../js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../js/lib/menubar/sidebar.js"></script>
    <script src="../js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <!-- bootstrap -->



    <!-- JS Grid Scripts Start-->
    <script src="../js/lib/jsgrid/db.js"></script>
    <script src="../js/lib/jsgrid/jsgrid.core.js"></script>
    <script src="../js/lib/jsgrid/jsgrid.load-indicator.js"></script>
    <script src="../js/lib/jsgrid/jsgrid.load-strategies.js"></script>
    <script src="../js/lib/jsgrid/jsgrid.sort-strategies.js"></script>
    <script src="../js/lib/jsgrid/jsgrid.field.js"></script>
    <script src="../js/lib/jsgrid/fields/jsgrid.field.text.js"></script>
    <script src="../js/lib/jsgrid/fields/jsgrid.field.number.js"></script>
    <script src="../js/lib/jsgrid/fields/jsgrid.field.select.js"></script>
    <script src="../js/lib/jsgrid/fields/jsgrid.field.checkbox.js"></script>
    <script src="../js/lib/jsgrid/fields/jsgrid.field.control.js"></script>
    <script src="../js/lib/jsgrid/jsgrid-init.js"></script>
    <script src="../js/lib/toastr/toastr.min.js"></script>
    <script src="../js/lib/toastr/toastr.init.js"></script>
    <!-- JS Grid Scripts End-->

    <script src="../js/lib/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
    <!-- scripit init-->








</body>

</html>