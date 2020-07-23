<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Dashboard </title>

    <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/oneui/media/favicons/favicon.png') ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('assets/oneui/media/favicons/favicon-192x192.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/oneui/media/favicons/apple-touch-icon-180x180.png') ?>">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home/home.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/oneui/js/plugins/datatables/dataTables.bootstrap4.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/oneui/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="<?php echo base_url('assets/oneui/css/oneui.min.css') ?>">

    <!-- style tdatepicker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/oneui/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') ?>">

    <!-- Page JS Plugins CSS untuk summernote -->
    <link rel="stylesheet" href="<?php echo base_url('assets/oneui/js/plugins/summernote/summernote-bs4.css') ?>">


    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <!-- Home button -->
    <?php if ($status == "C-Level") {
        $linkhome = base_url('index.php/home/ceo/') . $username;
    } else {
        $linkhome = base_url('index.php/home/index/') . $username;
    } ?>
    <div class="ml-4" style="float:left;">
        <a class="btn btn-sm btn-dual" href="<?php echo $linkhome ?>">
            <img class="rounded" src="<?php echo base_url('assets/oneui/media/avatars/home.png') ?>" alt="Header Avatar" style="width: 18px;">
            <span class="ml-2">Home</span>

        </a>
    </div>
    <!-- end home button -->
    <div class="col-md-2 ml-auto px-4">
        <!-- User Dropdown -->
        <div class="dropdown d-inline-block ml-2">
            <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded" src="<?php echo base_url('assets/oneui/media/avatars/avatar10.jpg') ?>" alt="Header Avatar" style="width: 18px;">
                <span class="d-none d-sm-inline-block ml-1"><?php echo $employ_nama ?> </span>
                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
            </button>


            <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm " aria-labelledby="page-header-user-dropdown">
                <div class="p-3 text-center bg-primary">
                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="<?php echo base_url('assets/oneui/media/avatars/avatar10.jpg') ?>" alt="">
                </div>
                <div class="p-2">
                    <h5 class="dropdown-header text-uppercase">User Options</h5>
                    <!-- button untuk login -->
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?php echo base_url('index.php/home/hapussession') ?>">
                        <span>Log Out</span>
                        <i class="si si-logout ml-1"></i>
                    </a>
                    <!-- akhir button untuk login -->
                </div>
            </div>
        </div>
        <!-- END User Dropdown -->
    </div>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image overflow-hidden" style="background-image: url('http://localhost/crm-gink/assets/oneui/media/photos/photo29@2x.jpg');">
            <div class="bg-primary-dark-op">
                <div class="content content-narrow content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                        <div class="flex-sm-fill">
                            <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Dashboard</h1>

                            <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Selama Datang , <?php echo $employ_nama ?></h2>

                            <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250"><?php echo $nama_departemen ?> di Gink Technology</h2>
                        </div>
                        <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                            <span class="d-inline-block invisible" data-toggle="appear" data-timeout="350">
                                <a class="btn btn-primary px-4 py-2" class="p-2 bg-primary text-white text-decoration-none tiket" data-toggle="modal" data-target="#modal-block-large-staff" href="">
                                    <i class="fa fa-plus mr-1"></i> Buat Tiket
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->
    </main>
    <!-- END Main Container -->
    <!-- Page Content -->
    <!-- request task,pelanggan,tugas selesai,tugas Belum Selesai,tiket selesai,tiket Belum Selesai -->
    <!-- navigasi bar pilih tabel -->
    <ul class="nav nav-tabs nav-tabs-block ml-4 px-2 mt-3" data-toggle="tabs" role="tablist">
        <li style="background-color:lavender" class="nav-item">
            <a class="nav-link" href="#pelanggan">Data Pelanggan</a>
        </li>
        <?php if ($status == "Manager") { ?>
            <li style="background-color:lavender" class="nav-item">
                <a class="nav-link" href="#request">Request Tugas</a>
            </li>
            <li style="background-color:lavender" class="nav-item">
                <a class="nav-link" href="#report">Report Staff</a>
            </li>
        <?php } ?>
        <li style="background-color:lavender" class="nav-item">
            <a class="nav-link" href="#tugas">Tugas Saya</a>
        </li>
        <li style="background-color:lavender" class="nav-item">
            <a class="nav-link" href="#tiket">Tiket Saya</a>
        </li>
    </ul>
    <!-- akhir navigasi bar pilih tabel -->
    <div class="block-content tab-content overflow-hidden">
        <!-- pelanggan -->
        <div class="tab-pane fade fade-up show active" id="pelanggan" role="tabpanel">
            <div class="container-fluid">
                <div class="block block-mode-loading-oneui">
                    <div class="block-header border-bottom">
                        <h3 class="block-title text-primary">Data Pelanggan</h3>
                    </div>
                    <div class="col-3 float-right">
                        <select name="filter-status-layanan" id="filter-status-layanan" class="form-control">
                            <option value="">Status</option>
                            <option value="Active">Aktif</option>
                            <option value="Not Active">Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-hover table-vcenter font-size-sm mb-0" id="table-pelanggan">
                            <thead class="thead-dark">
                                <tr class="text-uppercase">
                                    <th class="font-w700 text-center" style="width: 10%;">#ID</th>
                                    <th class="font-w700 text-center" style="width: 30%;">Customer</th>
                                    <th class="font-w700 text-center" style="width: 30%;">Layanan</th>
                                    <th class="font-w700 text-center" style="width: 15%;">Status</th>
                                    <th class="font-w700 text-center" style="width: 15%;">+Tiket</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END pelanggan -->
        <!-- Request Task dan report -->
        <?php if ($status == "Manager") { ?>
            <div class="tab-pane fade fade-up" id="request" role="tabpanel">
                <div class="container-fluid">
                    <div class="block block-mode-loading-oneui">
                        <div class="block-header border-bottom ">
                            <h3 class="block-title text-primary">Request Tugas</h3>
                        </div>
                        <div class="col-3 float-right">
                            <select name="filter-status" id="filter-status" class="form-control">
                                <option value="">Status</option>
                                <option value="Finish">Selesai</option>
                                <option value="Not Finished">Belum Selesai</option>
                            </select>
                        </div>
                        <div style="clear:both"></div>
                        <div class="block-content block-content-full">
                            <table class="table table-bordered table-hover table-vcenter font-size-sm mb-0 w-100" id="table-request">
                                <thead class="thead-dark">
                                    <tr class="text-uppercase">
                                        <th class="font-w700 text-center" style="width: 20%;">Title</th>
                                        <th class="font-w700 text-center" style="width: 20%;">Penanggung Jawab</th>
                                        <th class="font-w700 text-center" style="width: 20%;">Deadline</th>
                                        <th class="font-w700 text-center" style="width:15%" ;>Status</th>
                                        <th class="font-w700 text-center" style="width: 20%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--report -->
            <div class="tab-pane fade fade-up" id="report" role="tabpanel">
                <div class="container-fluid">
                    <div class="block block-mode-loading-oneui">
                        <div class="block-header border-bottom ">
                            <h3 class="block-title text-primary">Report Staff</h3>
                        </div>
                        <button class="btn btn-primary search mt-3 ml-2 mr-4" data-toggle="click-ripple" id="button-report">Terapkan</button>
                        <button class="btn btn-outline-danger search mt-3 ml-1 mr-2" data-toggle="click-ripple" id="button-reset">Reset</button>

                        <input type="text" class="js-datepicker form-control col-2 search  mt-3 ml-2 mr-4 search required" name="tgl-end" id="tgl-end" data-date-format="yyyy-mm-dd" data-week-start="0" data-autoclose="true" data-today-highlight="true" placeholder="Tanggal End">

                        <h1 class="search"><i class="fa fa-minus mr-2"></i></h1>

                        <input type="text" class="js-datepicker form-control col-2 search  mt-3 ml-2 mr-4 search required" name="tgl-start" id="tgl-start" data-date-format="yyyy-mm-dd" data-week-start="0" data-autoclose="true" data-today-highlight="true" placeholder="Tanggal Start">

                        <input type="text" name="alamat-report" id="alamat-report" value="<?php echo base_url('index.php/home/searchreport/') . $employ_id . "/" ?>" hidden>

                        <div class="block-content block-content-full" id="report-table">
                            <table class="table table-bordered table-hover table-vcenter font-size-sm mb-0">
                                <thead class="thead-dark">
                                    <tr class="text-uppercase">
                                        <th class="font-w700 text-center" style="width: 16%;">Nama</th>
                                        <th class="font-w700 text-center" style="width: 16%;">Departemen</th>
                                        <!-- <th class="font-w700 text-center" style="width: 16%;">Jabatan</th> -->
                                        <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 16%;">Request Tugas</th>
                                        <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 16%;">Selesai</th>
                                        <th class="font-w700 text-center" style="width:16%" ;>On Progress</th>
                                    </tr>
                                </thead>
                                <?php $data_report = [];
                                foreach ($report as $value) {
                                    array_push($data_report, $value["employee_name"]);
                                }
                                foreach ($employ_report as $value) {
                                    if (!in_array($value["employee_name"], $data_report)) { ?>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="font-w600"><?php echo $value["employee_name"] ?></span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="font-w600"><?php echo $value["department_name"] ?></span>
                                                </td>
                                                <!-- <td class="text-center">
                                                    <span class="font-w600"><?php echo $value["status_employ"] ?></span>
                                                </td> -->
                                                <td class="text-center">
                                                    <span class="font-w600">0 Tugas</span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="font-w600 text-success">0 Tugas</span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="font-w600 text-danger">0 Tugas</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                <?php }
                                } ?>
                                <?php $employe = [];
                                foreach ($report as $value) { ?>
                                    <tbody>
                                        <?php foreach ($tugas_selesai as $value2) {
                                            if ($value2["employee_name"] == $value["employee_name"]) {
                                                array_push($employe, $value["employee_name"]); ?>
                                                <tr>
                                                    <td>
                                                        <span class="font-w600"><?php echo $value["employee_name"] ?></span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="font-w600"><?php echo $value["department_name"] ?></span>
                                                    </td>
                                                    <!-- <td class="text-center">
                                                        <span class="font-w600"><?php echo $value["status_employ"] ?></span>
                                                    </td> -->
                                                    <td class="text-center">
                                                        <span class="font-w600"><?php echo $value["count(tm_task.task_status)"] ?> Tugas</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="font-w600 text-success"><?php echo $value2["count(tm_task.task_status)"] ?> Tugas</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="font-w600 text-danger"><?php echo $value["count(tm_task.task_status)"] - $value2["count(tm_task.task_status)"] ?> Tugas</span>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        } ?>
                                    </tbody>
                                <?php } ?>
                                <?php foreach ($report as $value) { ?>
                                    <tbody>
                                        <?php foreach ($tugas_belum as $value2) {
                                            if ($value2["employee_name"] == $value["employee_name"] && !in_array($value["employee_name"], $employe)) {
                                                array_push($employe, $value["employee_name"]); ?>
                                                <tr>
                                                    <td>
                                                        <span class="font-w600"><?php echo $value["employee_name"] ?></span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="font-w600"><?php echo $value["department_name"] ?></span>
                                                    </td>
                                                    <!-- <td class="text-center">
                                                        <span class="font-w600"><?php echo $value["status_employ"] ?></span>
                                                    </td> -->
                                                    <td class="text-center">
                                                        <span class="font-w600"><?php echo $value["count(tm_task.task_status)"] ?> Tugas</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="font-w600 text-success"><?php echo $value["count(tm_task.task_status)"] - $value2["count(tm_task.task_status)"] ?> Tugas</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="font-w600 text-danger"><?php echo $value2["count(tm_task.task_status)"] ?> Tugas</span>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        } ?>
                                    </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END report-->
        <?php } ?>
        <!-- END Request Task dan report-->
        <div class="tab-pane fade fade-up" id="tugas" role="tabpanel">
            <!-- Belum Selesai -->
            <div class="container-fluid">
                <div class="block block-mode-loading-oneui">
                    <div class="block-header border-bottom">
                        <h3 class="block-title text-danger">Tugas Saya | Belum Selesai</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-hover table-vcenter font-size-sm mb-0">
                            <thead class="thead-dark">
                                <tr class="text-uppercase">
                                    <th class="font-w700 text-center" style="width: 16%;"># ID Task</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Ketua Task</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Sub Title Task</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Deadline</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Status</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Aksi</th>
                                </tr>
                            </thead>
                            <!-- body jika tidak ada sub task -->
                            <tbody>
                                <?php foreach ($tasksaya as $valueparent) {
                                    if ($valueparent["task_status"] == "Not Finished") { ?>
                                        <tr>
                                            <td style="width: 10%;">
                                                <span class="font-w600">#<?php echo $valueparent["task_id"] . " " . $valueparent["task_title"] ?></span>
                                            </td>
                                            <td class="text-center" style="width: 10%;">
                                                <span class="font-w600"><?php echo $valueparent["employee_destination"] ?></span>
                                            </td>
                                            <td style="width: 10%;" class="text-center">
                                                <span class="font-w600">-</span>
                                            </td>
                                            <td class="text-center font-w700" style="width: 20%;">
                                                <span class="font-size-sm "><?php echo $valueparent["task_dateline"] ?></span>
                                            </td>
                                            <td class="text-danger text-center" style="width: 15%;">
                                                <span class="font-w600 btn-sm btn-block btn-danger"><i class="fa fa-fw fa-exclamation-circle"></i> <?php echo $valueparent["task_status"] ?></span>
                                            </td>
                                            <td class="text-center" style="width: 15%;">
                                                <a class="link-fx font-weight-bold" href="<?php echo base_url('index.php/home/detail/') . $designation . "/" . $employ_id . "/" . $valueparent['task_id'] . "/" . $status . "/TugasBelum" ?>" class="text-decoration-none">Buka</a>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                            <tbody>
                                <!-- akhir body jika tidak ada sub task -->
                                <!-- body jika tidak sub task -->
                            <tbody>
                                <?php foreach ($taskparent as $valueparent) {
                                    $i = 1;
                                    $row_taskbelum = 1; //untuk row span
                                    foreach ($taskbelum as $value) {
                                        if ($valueparent["task_id"] == $value["task_parent"]) {
                                            $row_taskbelum += 1;
                                        }
                                    }
                                ?>
                                    <tr>
                                        <?php if ($row_taskbelum != 1) { //jika $row_taskbelum bukan 1
                                        ?>
                                            <td style="width: 10%;" rowspan="<?= $row_taskbelum ?>">
                                                <span class="font-w600">#<?php echo $valueparent["task_id"] . " " . $valueparent["task_title"] ?></span>
                                            </td>
                                            <td class="text-center" style="width: 10%;" rowspan="<?= $row_taskbelum ?>">
                                                <span class="font-w600"><?php echo $valueparent["employee_destination"] ?></span>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                    <?php foreach ($taskbelum as $value) {
                                        if ($valueparent["task_id"] == $value["task_parent"]) { ?>
                                            <tr>
                                                <td style="width: 10%;">
                                                    <span class="font-w600"><?php echo $i . "." . $value["task_title"] ?></span>
                                                </td>
                                                <td class="text-center font-w700" style="width: 20%;">
                                                    <span class="font-size-sm  "><?php echo $value["task_dateline"] ?></span>
                                                </td>
                                                <td class="text-danger text-center" style="width: 15%;">
                                                    <span class="font-w600   btn-sm btn-block btn-danger "><i class="fa fa-fw fa-exclamation-circle"></i> <?php echo $value["task_status"] ?></span>
                                                </td>
                                                <td class="text-center" style="width: 15%;">
                                                    <a class="link-fx font-weight-bold" href="<?php echo base_url('index.php/home/detail/') . $designation . "/" . $employ_id . "/" . $value['task_id'] . "/" . $status . "/TugasBelum" ?>" class="text-decoration-none">Buka | </a>
                                                    <a class="link-fx font-weight-bold" href="<?php echo base_url('index.php/home/status/') . $value["task_id"] ?>" class="text-decoration-none">Selesai</a>
                                                </td>
                                            </tr>
                                <?php $i += 1;
                                        }
                                    }
                                } ?>
                            </tbody>
                            <!-- akhir body jika ada sub task -->
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Belum Selesai -->
            <!--  Selesai -->
            <div class="container-fluid">
                <div class="block block-mode-loading-oneui">
                    <div class="block-header border-bottom">
                        <h3 class="block-title text-success">Tugas Saya | Selesai</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-hover table-vcenter font-size-sm mb-0">
                            <thead class="thead-dark">
                                <tr class="text-uppercase">
                                    <th class="font-w700 text-center" style="width: 16%;"># ID Task</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Ketua Task</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Sub Title Task</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Deadline</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Status</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Aksi</th>
                                </tr>
                            </thead>
                            <!-- body jika tidak ada sub task -->
                            <tbody>
                                <?php foreach ($tasksaya as $valueparent) {
                                    if ($valueparent["task_status"] == "Finish") { ?>
                                        <tr>
                                            <td style="width: 10%;" `>
                                                <span class="font-w600">#<?php echo $valueparent["task_id"] . " " . $valueparent["task_title"] ?></span>
                                            </td>
                                            <td class="text-center" style="width: 10%;" `>
                                                <span class="font-w600"><?php echo $valueparent["employee_destination"] ?></span>
                                            </td>
                                            <td style="width: 10%;" class="text-center">
                                                <span class="font-w600">-</span>
                                            </td>
                                            <td class="text-center font-w700" style="width: 20%;">
                                                <span class="font-size-sm  "><?php echo $valueparent["task_dateline"] ?></span>
                                            </td>
                                            <td class="text-danger text-center" style="width: 15%;">
                                                <span class="font-w600   btn-sm btn-block btn-success "><i class="fa fa-fw fa-check"></i> <?php echo $valueparent["task_status"] ?></span>
                                            </td>
                                            <td class="text-center" style="width: 15%;">
                                                <a class="link-fx font-weight-bold" href="<?php echo base_url('index.php/home/detail/') . $designation . "/" . $employ_id . "/" . $valueparent['task_id'] . "/" . $status . "/TugasSelesai" ?>" class="text-decoration-none">Buka</a>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                            <!-- akhir body jika tidak ada sub task -->
                            <!-- body jika ada sub task -->
                            <tbody>
                                <?php foreach ($taskparent as $valueparent) {
                                    $i = 1;
                                    $row_taskselesai = 1; //untuk row span
                                    foreach ($taskselesai as $value) {
                                        if ($valueparent["task_id"] == $value["task_parent"]) {
                                            $row_taskselesai += 1;
                                        }
                                    }
                                ?>
                                    <tr>
                                        <?php if ($row_taskselesai != 1) { ?>
                                            <td style="width: 10%;" rowspan="<?= $row_taskselesai ?>">
                                                <span class="font-w600">#<?php echo $valueparent["task_id"] . " " . $valueparent["task_title"] ?></span>
                                            </td>
                                            <td class="text-center" style="width: 10%;" rowspan="<?= $row_taskselesai ?>">
                                                <span class="font-w600"><?php echo $valueparent["employee_destination"] ?></span>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                    <?php foreach ($taskselesai as $value) {
                                        if ($valueparent["task_id"] == $value["task_parent"]) { ?>
                                            <tr>
                                                <td style="width: 10%;">
                                                    <span class="font-w600"><?php echo $i . "." . $value["task_title"] ?></span>
                                                </td>
                                                <td class="text-center font-w700" style="width: 20%;">
                                                    <span class="font-size-sm  "><?php echo $value["task_dateline"] ?></span>
                                                </td>
                                                <td class="text-danger text-center" style="width: 15%;">
                                                    <span class="font-w600   btn-sm btn-block btn-success "><i class="fa fa-fw fa-check"></i> <?php echo $value["task_status"] ?></span>
                                                </td>
                                                <td class="text-center" style="width: 15%;">
                                                    <a class="link-fx font-weight-bold" href="<?php echo base_url('index.php/home/detail/') . $designation . "/" . $employ_id . "/" . $value['task_id'] . "/" . $status . "/TugasSelesai" ?>" class="text-decoration-none">Buka</a>
                                                </td>
                                            </tr>
                                <?php $i += 1;
                                        }
                                    }
                                } ?>
                            </tbody>
                            <!-- akhir body jika ada sub task -->
                        </table>
                    </div>
                </div>
            </div>
            <!-- END  Selesai -->
        </div>
        <div class="tab-pane fade fade-up" id="tiket" role="tabpanel">
            <!--  Tiket Belum Selesai -->
            <div class="container-fluid">
                <div class="block block-mode-loading-oneui">
                    <div class="block-header border-bottom">
                        <h3 class="block-title text-danger">Tiket Saya | Belum Selesai</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-hover table-vcenter font-size-sm mb-0">
                            <thead class="thead-dark">
                                <tr class="text-uppercase">
                                    <th class="font-w700 text-center" style="width: 16%;"># ID Task</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Ketua Task</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Sub Title Task</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Deadline</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Status</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Aksi</th>
                                </tr>
                            </thead>
                            <!-- body jika tidak ada sub task dan belum ada PJ-->
                            <tbody>
                                <?php foreach ($tiketsaya as $value) {
                                    if ($value["task_status"] == "Not Finished" && $value["task_parent"] == "") { ?>
                                        <tr>
                                            <td style="width: 10%;">
                                                <span class="font-w600">#<?php echo $value["task_id"] . " " . $value["task_title"] ?></span>
                                            </td>
                                            <td style="width: 10%;" class="text-center">
                                                <span class="font-w600">-</span>
                                            </td>
                                            <td style="width: 10%;" class="text-center">
                                                <span class="font-w600">-</span>
                                            </td>
                                            <td class="text-center font-w700" style="width: 20%;">
                                                <span class="font-size-sm  "><?php echo $value["task_dateline"] ?></span>
                                            </td>
                                            <td class="text-danger text-center" style="width: 15%;">
                                                <span class="font-w600   btn-sm btn-block btn-danger "><i class="fa fa-fw fa-exclamation-circle"></i> <?php echo $value["task_status"] ?></span>
                                            </td>
                                            <td class="text-center" style="width: 15%;">
                                                <a class="link-fx font-weight-bold" href="<?php echo base_url('index.php/home/detail/') . $designation . "/" . $employ_id . "/" . $value['task_id'] . "/" . $status . "/Tiket" ?>" class="text-decoration-none">Buka</a>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                                <!-- akhir body jika tidak ada sub task dan belum ada PJ-->
                                <!-- body jika tidak ada sub task dan ada PJ-->
                                <?php foreach ($tiket as $value) {
                                    if ($value["task_status"] == "Not Finished" && $value["task_parent"] == "") { ?>
                                        <tr>
                                            <td style="width: 10%;">
                                                <span class="font-w600">#<?php echo $value["task_id"] . " " . $value["title"] ?></span>
                                            </td>
                                            <td class="text-center" style="width: 10%;">
                                                <span class="font-w600"><?php echo $value["employee_destination"] ?></span>
                                            </td>
                                            <td style="width: 10%;" class="text-center">
                                                <span class="font-w600">-</span>
                                            </td>
                                            <td class="text-center font-w700" style="width: 20%;">
                                                <span class="font-size-sm  "><?php echo $value["task_dateline"] ?></span>
                                            </td>
                                            <td class="text-danger text-center" style="width: 15%;">
                                                <span class="font-w600   btn-sm btn-block btn-danger "><i class="fa fa-fw fa-exclamation-circle"></i> <?php echo $value["task_status"] ?></span>
                                            </td>
                                            <td class="text-center" style="width: 15%;">
                                                <a class="link-fx font-weight-bold" href="<?php echo base_url('index.php/home/detail/') .$designation."/". $employ_id . "/" . $value['task_id'] ."/".$status. "/Tiket" ?>" class="text-decoration-none">Buka</a>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                                <!-- akhir body jika tidak ada sub task dan ada PJ-->
                                <!-- body jika ada sub task dan ada PJ-->
                                <?php foreach ($taskparent as $valueparent) {
                                    $i = 1;
                                    $row_tiketbelum = 1; //untuk rowspan
                                    foreach ($tiket as $value) {
                                        if ($valueparent["task_id"] == $value["task_parent"] && $value["task_status"] == "Not Finished") {
                                            $row_tiketbelum += 1;
                                        }
                                    }
                                ?>
                                    <tr>
                                        <?php if ($row_tiketbelum != 1) { ?>
                                            <td style="width: 10%;" rowspan="<?= $row_tiketbelum ?>">
                                                <span class="font-w600">#<?php echo $valueparent["task_id"] . " " . $valueparent["task_title"] ?></span>
                                            </td>
                                            <td class="text-center" style="width: 10%;" rowspan="<?= $row_tiketbelum ?>">
                                                <span class="font-w600"><?php echo $valueparent["employee_destination"] ?></span>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                    <?php foreach ($tiket as $value) {
                                        if ($valueparent["task_id"] == $value["task_parent"] && $value["task_status"] == "Not Finished") { ?>
                                            <tr>
                                                <td style="width: 10%;">
                                                    <span class="font-w600"><?php echo $i . "." . $value["task_title"] ?></span>
                                                </td>
                                                <td class="text-center font-w700" style="width: 20%;">
                                                    <span class="font-size-sm "><?php echo $value["task_dateline"] ?></span>
                                                </td>
                                                <td class="text-danger text-center" style="width: 15%;">
                                                    <span class="font-w600  btn-sm btn-block btn-danger "><i class="fa fa-fw fa-exclamation-circle"></i> <?php echo $value["task_status"] ?></span>
                                                </td>
                                                <td class="text-center" style="width: 15%;">
                                                    <a class="link-fx font-weight-bold" href="<?php echo base_url('index.php/home/detail/') .$designation."/". $employ_id . "/" . $value['task_id'] ."/".$status. "/Tiket" ?>" class="text-decoration-none">Buka</a>
                                                </td>
                                            </tr>
                                <?php $i += 1;
                                        }
                                    }
                                } ?>
                            </tbody>
                            <!-- akhir body jika ada sub task dan ada PJ-->
                        </table>
                    </div>
                </div>
            </div>
            <!-- END  Tiket Belum Selesai -->
            <!--  Tiket Selesai -->
            <div class="container-fluid">
                <div class="block block-mode-loading-oneui">
                    <div class="block-header border-bottom">
                        <h3 class="block-title text-success">Tiket Saya | Selesai</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-bordered table-hover table-vcenter font-size-sm mb-0">
                            <thead class="thead-dark">
                                <tr class="text-uppercase">
                                    <th class="font-w700 text-center" style="width: 16%;"># ID Task</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Ketua Task</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Sub Title Task</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Deadline</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Status</th>
                                    <th class="font-w700 text-center" style="width: 16%;">Aksi</th>
                                </tr>
                            </thead>
                            <!-- body jika tidak ada sub task dan ada PJ-->
                            <tbody>
                                <?php foreach ($tiket as $value) {
                                    if ($value["task_status"] == "Finish" && $value["task_parent"] == "") { ?>
                                        <tr>
                                            <td style="width: 10%;">
                                                <span class="font-w600">#<?php echo $value["task_id"] . " " . $value["task_title"] ?></span>
                                            </td>
                                            <td class="text-center" style="width: 10%;">
                                                <span class="font-w600"><?php echo $value["employee_destination"] ?></span>
                                            </td>
                                            <td style="width: 10%;" class="text-center">
                                                <span class="font-w600">-</span>
                                            </td>
                                            <td class="text-center font-w700" style="width: 20%;">
                                                <span class="font-size-sm  "><?php echo $value["task_dateline"] ?></span>
                                            </td>
                                            <td class="text-danger text-center" style="width: 15%;">
                                                <span class="font-w600   btn-sm btn-block btn-success "><i class="fa fa-fw fa-check"></i> <?php echo $value["task_status"] ?></span>
                                            </td>
                                            <td class="text-center" style="width: 15%;">
                                                <a class="link-fx font-weight-bold" href="<?php echo base_url('index.php/home/detail/') . $employ_id . "/" . $value['task_id'] . "/Tiket" ?>" class="text-decoration-none">Buka</a>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>

                                <!-- akhir body jika tidak ada sub task dan ada PJ-->
                                <!-- body jika ada sub task dan ada PJ-->
                            <tbody>
                                <?php foreach ($taskparent as $valueparent) {
                                    $i = 1;
                                    $row = 1;
                                    foreach ($tiket as $value) {
                                        if ($valueparent["task_id"] == $value["task_parent"] && $value["task_status"] == "Finish") {
                                            $row += 1;
                                        }
                                    }
                                ?>
                                    <tr>
                                        <?php if ($row != 1) { ?>
                                            <td style="width: 10%;" rowspan="<?= $row ?>">
                                                <span class="font-w600">#<?php echo $valueparent["task_id"] . " " . $valueparent["task_title"] ?></span>
                                            </td>
                                            <td class="text-center" style="width: 10%;" rowspan="<?= $row ?>">
                                                <span class="font-w600"><?php echo $valueparent["employee_destination"] ?></span>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                    <?php foreach ($tiket as $value) {
                                        if ($valueparent["task_id"] == $value["task_parent"] && $value["task_status"] == "finish") { ?>
                                            <tr>
                                                <td style="width: 10%;">
                                                    <span class="font-w600"><?php echo $i . "." . $value["task_title"] ?></span>
                                                </td>
                                                <td class="text-center font-w700" style="width: 20%;">
                                                    <span class="font-size-sm  "><?php echo $value["task_dateline"] ?></span>
                                                </td>
                                                <td class="text-danger text-center" style="width: 15%;">
                                                    <span class="font-w600   btn-sm btn-block btn-success "><i class="fa fa-fw fa-check"></i> <?php echo $value["task_status"] ?></span>
                                                </td>
                                                <td class="text-center" style="width: 15%;">
                                                    <a class="link-fx font-weight-bold" href="<?php echo base_url('index.php/home/detail/') . $employ_id . "/" . $value['task_id'] . "/Tiket" ?>" class="text-decoration-none">Buka</a>
                                                </td>
                                            </tr>
                                <?php $i += 1;
                                        }
                                    }
                                } ?>
                            </tbody>
                            <!-- akhir body jika ada sub task dan ada PJ-->
                        </table>
                    </div>
                </div>
            </div>
            <!-- END  Tiket Selesai -->
        </div>
    </div>
    <!-- END request task,pelanggan,tugas selesai,tugas Belum Selesai,tiket selesai,tiket Belum Selesai -->
    <!-- pop up tiket pelanggan -->
    <div class="modal fade" id="modal-block-large" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Buat Tiket</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content font-size-sm mt-3 text-justify ">
                        <h4>Isi Data Dibawah Ini dengan Lengkap Untuk Membuat Tiket</h4>
                        <form action="<?php echo base_url('index.php/home/addtiket/') . $employ_id ?>" method="POST" id="form-tiket">
                            <input type="text" name="id_pelanggan" id="id_pelanggan" value="123" hidden>
                            <div class="form-group">
                                <label for="title">Customer</label>
                                <input type="text" class="form-control" name="customer" id="customer" value="" placeholder="" readonly>
                            </div>
                            <div class="form-group">
                                <label for="layanan">Layanan</label>
                                <input type="text" class="form-control" name="layanan" id="layanan-pelanggan" readonly>
                            </div>
                            <div class="form-group">
                                <label for="masalah">Jenis Masalah</label>
                                <select name="masalah" id="masalah" class="form-control">
                                    <option value="umum">General</option>
                                    <option value="support">Support</option>
                                    <option value="hosting">Hosting</option>
                                    <option value="biling">Billing</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Judul Tugas</label>
                                <input type="text" class="form-control required" name="title" id="title" placeholder="Judul/Subject">
                                <?= form_error('title', '<span class="text-danger">', '</span>') ?>
                            </div>
                            <div class="form-group">
                                <label for="dateline">Deadline</label>
                                <div class="input-group">
                                    <span class="input-group-text input-group-text-alt">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <input type="text" class="js-datepicker form-control required" name="dateline" id="dateline" data-date-format="yyyy-mm-dd" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control required js-summernote" name="deskripsi" id="deskripsi" rows="3"></textarea>
                                <?= form_error('deskripsi', '<span class="text-danger">', '</span>') ?>

                            </div>
                            <div style="float:right;margin-bottom:3%;">
                                <button type="reset" class="btn btn-outline-danger mr-2">Reset</button>
                                <button type="submit" class="btn btn-primary">Buat</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir pop up tiket pelanggan -->
    <!-- pop up tiket staff -->
    <div class="modal fade" id="modal-block-large-staff" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Buat Tiket</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content font-size-sm mt-3 text-justify ">
                        <h4>Isi Data Dibawah Ini dengan Lengkap untuk Membuat Tiket</h4>
                        <form action="<?php echo base_url('index.php/home/addtiket/') . $employ_id ?>" method="POST" id="form-staff">

                            <input type="text" name="masalah" value="" hidden>
                            <input type="text" name="layanan" value="" hidden>
                            <div class="form-group">
                                <label for="departemen">Departemen tujuan</label>
                                <select name="departemen" id="departemen" class="form-control">
                                    <option value="Sales And Marketing">Sales And Marketing</option>
                                    <option value="Research And Development">Research And Development</option>
                                    <option value="Support">Support</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Judul Tugas</label>
                                <input type="text" class="form-control required" name="title" id="title" placeholder="Judul/Subject">
                                <?= form_error('title', '<span class="text-danger">', '</span>') ?>
                            </div>
                            <div class="form-group">
                                <label for="dateline">Deadline</label>
                                <div class="input-group">
                                    <span class="input-group-text input-group-text-alt">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <input type="text" class="js-datepicker form-control required" name="dateline" id="dateline" data-date-format="yyyy-mm-dd" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control required js-summernote" name="deskripsi" id="deskripsi" rows="3"></textarea>
                                <?= form_error('deskripsi', '<span class="text-danger">', '</span>') ?>
                            </div>
                            <div style="float:right;margin-bottom:3%">
                                <button type="reset" class="btn btn-outline-danger mr-2">Reset</button>
                                <button type="submit" class="btn btn-primary mr-3">Buat</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir pop up tiket staff -->
    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-3">
            <div class="row font-size-sm">
                <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="" target="_blank">ARMTEAM</a>
                </div>
                <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                    <a class="font-w600" href="https://1.envato.market/xWy" target="_blank">Gink Technology x ARMTEAM</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>

    <!-- END Footer -->
    <!-- END Page Content -->
    <script src="<?php echo base_url('assets/oneui/js/oneui.core.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/oneui/js/oneui.app.min.js') ?>"></script>
    <!-- //script datatable -->
    <script src="<?php echo base_url('assets/oneui/js/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/oneui/js/plugins/datatables/dataTables.bootstrap4.min.js') ?>"></script>
    <script>
        $(document).ready(function() {
            var table = null;
            table = $('#table-request').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "order": [
                    [0, 'asc']
                ],
                "ajax": {
                    "url": "<?php echo base_url('index.php/home/view/') . $employ_dept["department_id"] ?>",
                    "type": "POST",
                    'data': function(data) {
                        data.searchStatus = $('#filter-status').val();;
                    }
                },
                "deferRender": true,
                "aLengthMenu": [
                    [5, 50, 100],
                    [5, 50, 100]
                ],
                "columns": [{
                        "data": "task_title",
                        className: 'font-weight-bold'
                    },
                    {
                        "data": "employee_name",
                        className: 'text-center font-weight-bold'
                    },
                    {
                        "data": "task_dateline",
                        className: 'text-center font-weight-bold'


                    },
                    {
                        "data": "task_status",
                        className: 'text-center',
                        render: function(data, type, row) {
                            if (data == "Finish") {
                                let html = "<strong class='btn-sm btn-block btn-success'><i class='fa fa-fw fa-check'></i>" + data + "</strong>";
                                return html;
                            } else {
                                let html = "<strong class='btn-sm btn-block btn-danger'><i class='fa fa-fw fa-exclamation-circle'></i>" + data + "</strong>";
                                return html;
                            }
                        }
                    },
                    {
                        "data": "task_id",
                        className: 'text-center',
                        render: function(data, type, row) {
                            let html = "<a class='link-fx font-weight-bold' href='<?php echo base_url('index.php/home/detail/') . $designation . "/" . $employ_id . '/' ?>" +
                                data + "/<?php echo $status ?>" + "/Request'>Buka</a>";
                            return html;
                        }
                    }
                ],
            });
            $("#filter-status").change(function() {
                table.ajax.reload();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var table = null;
            table = $('#table-pelanggan').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "order": [
                    [0, 'asc']
                ],
                "ajax": {
                    "url": "<?php echo base_url('index.php/home/view_pelanggan/') ?>",
                    "type": "POST",
                    'data': function(data) {
                        data.searchStatus = $('#filter-status-layanan').val();
                    }
                },
                "deferRender": true,
                "aLengthMenu": [
                    [5, 50, 100],
                    [5, 50, 100]
                ],
                "columns": [{
                        "data": "service_id",
                        className: 'font-weight-bold'
                    },
                    {
                        "data": "customer_name",
                        className: 'text-center font-weight-bold'
                    },
                    {
                        "data": "service_name",
                        className: 'text-center font-weight-bold',
                    },
                    {
                        "data": "service_status",
                        className: 'text-center',
                        render: function(data, type, row) {
                            if (data == "Active" && data != "") {
                                let html = "<strong class='btn-sm btn-block btn-success'><i class='fa fa-fw fa-check'></i>" + data + "</strong>";
                                return html;
                            } else if (data == "Not Active" && data != "") {
                                let html = "<strong class='btn-sm btn-block btn-danger'><i class='fa fa-fw fa-exclamation-circle'></i>" + data + "</strong>";
                                return html;
                            } else {
                                let html = "<strong></strong>";
                                return html;
                            }
                        }
                    },
                    {
                        "data": "service_id",
                        className: 'text-center',
                        render: function(data, type, row) {
                            let html = "<a href='javascript:void(0)' data-toggle='modal' data-target='#modal-block-large' data-pk='" + data +
                                "' class='btn btn-light btn-edit'><i class='fa fa-plus fa-2x'></i></a>";
                            return html;
                        }
                    }
                ],
                drawCallback: function() {
                    $('.btn-edit').click(function(a) {
                        let pk = $(this).data('pk');
                        // alert(pk);
                        $.ajax({ //ajax ambil data pelanggan
                            type: "GET",
                            url: "<?php echo base_url('index.php/home/get_pelanggan') ?>",
                            dataType: "JSON",
                            data: {
                                id: pk
                            },
                            success: function(data) { //jika ambil data sukses
                                $('input[name="customer"]').val(data["customer_name"]); //set value
                                $('input[name="service"]').val(pk); //set value
                                $('input[name="id_pelanggan"]').val(data["customer_id"]); //set value
                                $('input[id="layanan-pelanggan"]').val(data["service_name"]); //set value
                            }
                        });
                    });
                }
            });
            $("#filter-status-layanan").change(function() {
                // alert($('#filter-status-layanan').val());   
                table.ajax.reload();
            });
        });
    </script>
    <!-- //end script datatable -->

    <!-- POP UP BUAT TIKET -->
    <script>
        //fungsi ambil data pelanggan
        function datapelanggan(a, status) {
            var id_pelanggan = a.id; //set variabel
            $.ajax({ //ajax ambil data pelanggan
                type: "GET",
                url: "<?php echo base_url('index.php/home/get_pelanggan') ?>",
                dataType: "JSON",
                data: {
                    id: id_pelanggan
                },
                success: function(data) { //jika ambil data sukses
                    $('input[name="customer"]').val(data["customer"]); //set value
                    $('input[name="id_pelanggan"]').val(data["id_pelanggan"]); //set value
                    $('input[id="layanan-pelanggan"]').val(data["nama_layanan"]); //set value
                }
            });
            // $.ajax({ //ajax ambil data layanan
            //     type: "GET",
            //     url: "<?php echo base_url('index.php/home/get_layanan') ?>",
            //     dataType: "JSON",
            //     data: {
            //         id: id_pelanggan
            //     },
            //     success: function(data) {
            //         $("#layanan-pelanggan").empty(); //reset tag select jadi kosong
            //         //set value tag options di tag select
            //         for(i=0;i<data.length;i++){
            //             $('#layanan-pelanggan').append(new Option(data[i]["nama_layanan"], data[i]["nama_layanan"])); 
            //         }
            //         $("#layanan_pelanggan").val(data.length); //set value
            //     }
            // });
        }
    </script>

    <!-- script atur summernote height di buat tiket pelanggan -->
    <script type='text/javascript'>
        //<![CDATA[ 
        $(function() {
            $('#deskripsi').summernote({
                height: 200
            });

        }); //]]>  
    </script>
    <!-- akhir script atur summernote height di buat tiket pelanggan-->

    <!-- validasi form -->
    <script src="<?php echo base_url('assets/oneui/js/plugins/jquery-validation/jquery.validate.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $("#form-staff").validate(); //validasi form
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#form-tiket").validate(); //validasi form
        });
    </script>
    <!-- akhir validasi form -->

    <!-- Page JS Plugins -->
    <script src="<?php echo base_url('assets/oneui/js/plugins/chart.js/Chart.bundle.min.js') ?>"></script>
    <!-- Page JS Code -->
    <script src="<?php echo base_url('assets/oneui/js/pages/be_pages_dashboard.min.js') ?>"></script>
    <!-- search pelanggan -->
    <script src="<?php echo base_url('assets/ajax/search.js') ?>"></script>
    <script src="<?php echo base_url('assets/oneui/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>"></script>
    <!-- Page JS Helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
    <script>
        jQuery(function() {
            One.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']);
        });
    </script>
    <!-- Page JS Plugins -->
    <script src="<?php echo base_url('assets/oneui/js/plugins/summernote/summernote-bs4.min.js') ?>"></script>
    <!-- Page JS Helpers (Summernote + CKEditor + SimpleMDE plugins) -->
    <script>
        jQuery(function() {
            One.helpers(['summernote']);
        });
    </script>

</body>

</html>