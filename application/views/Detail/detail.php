<!DOCTYPE html>
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
    <link rel="stylesheet" href="<?php echo base_url('assets/js/plugins/sweetalert2/sweetalert2.min.css') ?>">

    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="<?php echo base_url('assets/oneui/css/oneui.min.css') ?>">



    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <!-- Right Section -->
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

                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.html">
                        <span>Profile</span>
                        <span>
                            <span class="badge badge-pill badge-success">1</span>
                            <i class="si si-user ml-1"></i>
                        </span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                        <span>Settings</span>
                        <i class="si si-settings"></i>
                    </a>
                    <div role="separator" class="dropdown-divider"></div>
                    <h5 class="dropdown-header text-uppercase">Actions</h5>

                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?php echo base_url('index.php/home/hapussession') ?>">
                        <span>Log Out</span>
                        <i class="si si-logout ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- END User Dropdown -->
    </div>
    <!-- END Right Section -->
    <!-- Batas account dan main container -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image overflow-hidden" style="background-image: url('http://localhost/crm-gink/assets/oneui/media/photos/photo3@2x.jpg');">
            <div class="bg-primary-dark-op">
                <div class="content content-narrow content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                        <div class="flex-sm-fill">
                            <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Detail Tiket</h1>

                            <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Selamat Datang , <?php echo $employ_nama ?></h2>

                            <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250"><?php echo $status . " " . $nama_dept ?> di Gink Technology</h2>
                        </div>
                        <?php if ($cekTabel == 'Request') { ?>
                            <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                                <span class="d-inline-block invisible" data-toggle="appear" data-timeout="350">
                                    <a class="btn btn-primary px-4 py-2" class="p-2 bg-primary text-white text-decoration-none tiket" data-toggle="modal" data-target="#modal-block-large-sub-tiket" href="">
                                        <i class="fa fa-plus mr-1"></i> Buat Sub Tiket
                                    </a>
                                </span>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->
    </main>
    <!-- END Main Container -->



    <!-- Page Content -->
    <div class="content">
        <!-- Discussion -->
        <div class="block">
            <div class="block-header block-header-default ">
                <h3 class="block-title dark ">Hallo <?php echo $employ_nama ?> , berikut isi Detail Tasknya</h3>
            </div>
            <div class="block-content">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td class="d-none d-sm-table-cell text-center" rowspan="11" style="width: 15%;">
                                <p>
                                    <a href="be_pages_generic_profile.html">
                                        <img class="img-avatar " src="<?php echo base_url('assets/oneui/media/avatars/avatar7.jpg') ?>" alt="">

                                    </a>
                                </p>
                                <p class="font-size-sm "><?php echo $nama_kirim . " (" . $task["nama_dept_kirim"] . ")" ?></p>
                            </td>
                            <td class="font-weight-bold mt-2" width="15%">Title</td>
                            <td width="70%">: <?php echo $task["title"] ?> </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold  ">Deskripsi Task</td>
                            <td>
                                <p>: <?php echo $task["deskripsi"] ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Nama Pengirim</td>
                            <td>: <?php echo $nama_kirim . " (" . $task["nama_dept_kirim"] . ")" ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Departemen Tujuan</td>
                            <td>: <?php echo $task["nama_dept_tujuan"] ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Deadline</td>
                            <td>: <?php echo $task["dateline"] ?></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Status Task</td>
                            <td>: <?php echo $task["status"] ?></td>
                        </tr>
                        <tr>
                            <?php if ($cekTabel == 'Request') { ?>
                                <td class="font-weight-bold ">Penanggung Jawab</td>
                                <td>
                                    <form method="post" action="<?php echo base_url('index.php/detail/ubahPJ/' . $employ_id . '/' . $task['id_task']) ?>">
                                        : <?php $isi = $PJ_task['id_employ_tujuan'] ?>
                                        <?php if ($isi != null) {
                                            echo $namaPJ . "(" . $dept_PJtask . ")";
                                        } else { ?>
                                            <select name="PJbaru" id="PJbaru" class="btn btn-light dropdown-toggle">
                                                <option disabled selected> Belum ada </option>
                                                <?php
                                                $employe = [];
                                                foreach ($tugas_employ as $value) {
                                                    foreach ($semua_employ as $value2) {
                                                        if ($value2["nama"] == $value["nama"]) {
                                                            if (!in_array($value["nama"], $employe)) {
                                                                array_push($employe, $value["nama"]);
                                                            }
                                                ?>
                                                            <option value="<?= $value["id_employ_tujuan"] ?>"><?php echo $value["nama"] . " | " . $value["count(task.status)"] ?></option>
                                                        <?php }
                                                    }
                                                }
                                                foreach ($semua_employ as $value2) {
                                                    if (!in_array($value2["nama"], $employe)) { ?>
                                                        <option value="<?= $value2["id_employ"] ?>"><?php echo $value2["nama"] . " | 0" ?></option>
                                                <?php }
                                                }
                                                ?>
                                            </select>
                                            </br>
                                            </br>
                                            <div class="row items-push text-center text-sm-left mb-4 mr-10 mt-2" style="float:right;margin-bottom:3%">
                                                <div class="col-sm-6 col-xl-4 ">
                                                    <input type="submit" value="Simpan" class="btn btn-primary" data-toggle="click-ripple"></input>
                                                </div>
                                            <?php } ?>
                                    </form>
                                </td>
                            <?php } else if ($cekTabel == 'TugasBelum' && $task["id_parent"] != NULL || $status == "staff" || count($subtask) == 0) { ?>
                                <?php echo form_open_multipart('index.php/detail/insertLaporan/' . $employ_id . '/' . $task['id_task']); ?>
                                <td class="font-weight-bold">Berkas (opsional)</td>
                                <td>
                                    : <input type="file" name="file">
                                    <div class="block-content block-content-full text-right border-top mt-5">
                                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-sm btn-primary" value="Selesai">
                                    </div>
                                </td>

                                <!-- komentar -->





                                <!-- <input type="submit" value="Selesai"> -->
                                <?php echo form_close(); ?>
                            <?php } else if ($cekTabel == 'TugasSelesai' && $task["id_parent"] != NULL) { ?>
                                <?php echo form_open_multipart('index.php/detail/insertLaporan/' . $employ_id . '/' . $task['id_task']); ?>
                                <td class="font-weight-bold">Berkas (opsional)</td>
                                <td>
                                    :
                                    <?php if ($task['berkas'] != null) { ?>
                                        <a href="<?= base_url('upload/') . $task['berkas'] ?>"><?= $task['berkas'] ?></a>
                                        </br>
                                    <?php } ?>
                                    <input type="file" name="file">
                                    </br>
                                    <input type="submit" value="Simpan">
                                </td>
                                <?php echo form_close(); ?>
                            <?php } ?>
                        </tr>
                        <?php if ($cekTabel == 'Tiket') { ?>
                            <tr>
                                <td class="font-weight-bold">Penanggung Jawab</td>
                                <td>
                                    : <?= $namaPJ . " (" . $dept_PJtask . ")" ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Waktu Selesai</td>
                                <td>
                                    :
                                    <?php if ($task['status'] == 'belum selesai') {
                                        echo '-';
                                    } ?>
                                    <?= $task['waktu_selesai'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold  ">Berkas</td>
                                <td>
                                    :
                                    <?php if ($task['berkas'] == null) {
                                        echo '-';
                                    } ?>
                                    <a href="<?= base_url('upload/') . $task['berkas'] ?>"><?= $task['berkas'] ?></a>
                                </td>
                            </tr>
                        <?php } ?>
                        <?php if ($cekTabel == "Request" && count($subtask) != 0) { ?>
                            <!-- tabel sub task -->
                            <div class="container-fluid">
                                <table class="table table-striped table-hover table-vcenter font-size-sm mb-0">
                                    <thead>
                                        <tr>
                                            <td colspan="6">
                                                <h4>Progres Task</h4>
                                                <div class="progress push">
                                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo (count($subtaskselesai)/count($subtask))*100?>%;" aria-valuenow="<?php echo (count($subtaskselesai)/count($subtask))*100?>%" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="font-size-sm font-w600"><?php echo (count($subtaskselesai)/count($subtask))*100?>%</span>
                                                    </div>
                                                </div>

                                                <?php $progres = count($subtaskselesai)/count($subtask)*100;
                                                if($progres < 100){?>
                                                    <a class="btn btn-danger" class="bg-gander text-white text-decoration-none" href="<?php echo base_url('index.php/detail/ubahstatustask/' . $employ_id . '/' . $task['id_task']) ?>" style="float:right">
                                                        Konfirmasi Selesai
                                                    </a>
                                                <?php }else{?>
                                                    <a class="btn btn-success" class="bg-success text-white text-decoration-none" href="<?php echo base_url('index.php/detail/ubahstatustask/' . $employ_id . '/' . $task['id_task']) ?>" style="float:right">
                                                        Konfirmasi Selesai
                                                    </a>
                                                <?php }?>
                                            </td>
                                        </tr>
                                    </thead>
                                    <thead class="thead-dark">
                                        <tr class="text-uppercase">
                                            <th class="font-w700 text-center" style="width: 10%;"># ID Sub Task</th>
                                            <th class="font-w700 text-center" style="width: 25%;">Title Sub Task</th>
                                            <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 20%;">Penanggung Jawab</th>
                                            <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 20%;">Deadline</th>
                                            <th class="font-w700 text-center" style="width: 15%;">Status</th>
                                            <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 10%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($subtask as $value) { ?>
                                        <tbody>
                                            <tr>
                                                <td style="width: 10%;">
                                                    <span class="font-w600">#<?php echo $value["id_task"] ?></span>
                                                </td>
                                                <td style="width: 25%;">
                                                    <span class="font-w600"><?php echo $value["title"] ?></span>
                                                </td>
                                                <td style="width: 20%;">
                                                    <span class="font-w600"><?php echo $value["nama"] ?></span>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-center font-w700" style="width: 20%;">
                                                    <span class="font-size-sm  "><?php echo $value["dateline"] ?></span>
                                                </td>
                                                <?php if ($value["status"] == "Belum Selesai") { ?>
                                                    <td class="text-danger text-center" style="width: 15%;">
                                                        <span class="font-w600   btn-sm btn-block btn-danger "><i class="fa fa-fw fa-exclamation-circle"></i> <?php echo $value["status"] ?></span>
                                                    </td>
                                                <?php } else { ?>
                                                    <td class="text-danger text-center" style="width: 15%;">
                                                        <span class="font-w600   btn-sm btn-block btn-success "><i class="fa fa-fw fa-check"></i> <?php echo $value["status"] ?></span>
                                                    </td>
                                                <?php } ?>
                                                <td class="d-none d-sm-table-cell text-center" style="width: 10%;">
                                                    <a class="link-fx font-weight-bold" href="<?php echo base_url('index.php/home/detail/') . $employ_id . "/" . $value['id_task'] . "/Tiket" ?>" class="text-decoration-none">Buka</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                                
                            </div>
                            <!-- END tabel sub task -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Discussion -->
    </div>
    <!-- END Page Content -->
    <div class="block">
        <div class="block-header block-header-default bg-dark ">
            <h3 class="block-title text-gray-lighter ml-3 pt-2 pb-2">Komentar/Catatan</h3>
            <div class="block-options">
                <a class="btn-block-option mr-2 text-gray-lighter" href="#forum-reply-form " data-toggle="scroll-to">
                    <i class="fa fa-reply mr-1  "> </i> Reply

                </a>

                <button type="button" class="btn-block-option text-gray-lighter" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh mr-3"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <table class="table table-borderless">
                <tbody>
                    <?php if ($task["id_parent"] == null) { ?>
                        <?php foreach ($komentar as $value) { ?>
                            <tr class="table-active">
                                <td class="d-none d-sm-table-cell"></td>
                                <td class="font-size-sm text-muted">
                                    <a href="be_pages_generic_profile.html"><?= $value["nama_kirim_komen"] ?></a> on <em><?= $value["tanggal_komen"] ?></em>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                                    <p>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="<?php echo base_url('assets/oneui/media/avatars/avatar7.jpg') ?>" alt="">
                                        </a>
                                    </p>
                                    <p class="font-size-sm"><?= $value["nama_kirim_komen"] ?><br><?= $task["nama_dept_tujuan"] ?></p>
                                </td>
                                <td>
                                    <p><?= $value["komentar"] ?></p>
                                </td>
                            </tr>
                        <?php }
                    } else { ?>
                        <?php foreach ($komentarsub as $value) { ?>
                            <tr class="table-active">
                                <td class="d-none d-sm-table-cell"></td>
                                <td class="font-size-sm text-muted">
                                    <a href="be_pages_generic_profile.html"><?= $value["nama_kirim_komen"] ?></a> on <em><?= $value["tanggal_komen"] ?></em>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                                    <p>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="<?php echo base_url('assets/oneui/media/avatars/avatar7.jpg') ?>" alt="">
                                        </a>
                                    </p>
                                    <p class="font-size-sm"><?= $value["nama_kirim_komen"] ?><br><?= $task["nama_dept_tujuan"] ?></p>
                                </td>
                                <td>
                                    <p><?= $value["komentar"] ?></p>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>

                    <tr class="table-active" id="forum-reply-form">
                        <td class="d-none d-sm-table-cell"></td>
                        <td class="font-size-sm text-muted">
                            <a href="be_pages_generic_profile.html"></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-none d-sm-table-cell text-center">
                            <p>
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="assets/media/avatars/avatar10.jpg" alt="">
                                </a>
                            </p>
                            <p class="font-size-sm"><?= $employ_nama ?><br><?= $nama_dept ?></p>
                        </td>
                        <td>
                            <form action="<?php echo base_url('index.php/detail/addkomen/') . $task["id_task"] . "/" . $employ_nama . "/" . $employ_id . "/" . $cekTabel ?>" method="POST">
                                <div class="form-group">
                                    <!-- CKEditor (js-ckeditor id is initialized in Helpers.ckeditor()) -->
                                    <!-- For more info and examples you can check out http://ckeditor.com -->
                                    <textarea id="js-ckeditor" name="komentar"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-reply mr-1"></i> Reply
                                    </button>
                                </div>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Discussion -->
    </div>
    <!-- END Page Content -->

    </main>
    <!-- END Main Container -->



    <!-- pop up tiket staff -->
    <div class="modal fade" id="modal-block-large-sub-tiket" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Buat Sub Tiket</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content font-size-sm mt-3 text-justify ">
                        <h4>Isi Data Dibawah Ini dengan Lengkap untuk Membuat Sub Tiket</h4>
                        <form action="<?php echo base_url('index.php/detail/addsubtiket/') . $employ_id . "/" . $task["id_task"] . "/" . $cekTabel ?>" method="POST" id="form-staff">
                            <input type="text" name="id_parent" value="<?php echo $task["id_task"] ?>" hidden>

                            <div class="form-group">
                                <label for="title">Judul Parent Task</label>
                                <input type="text" class="form-control required" name="title" id="title" value="<?php echo $task["title"] ?>" readonly>
                            </div>


                            <div class="form-group">
                                <label for="title">Judul Sub Task</label>
                                <input type="text" class="form-control required" name="title" id="title" placeholder="Judul/Subject">
                            </div>

                            <div class="form-group">
                                <label for="PJsubtask">Penanggung Jawab Sub Task</label></br>
                                <select name="PJsubtask" id="PJsubtask" class="btn btn-secondary dropdown-toggle">
                                    <option disabled selected> Belum ada </option>
                                    <?php
                                    $employe = [];
                                    foreach ($tugas_employ as $value) {
                                        foreach ($semua_employ as $value2) {
                                            if ($value2["nama"] == $value["nama"]) {
                                                if (!in_array($value["nama"], $employe)) {
                                                    array_push($employe, $value["nama"]);
                                                }
                                    ?>
                                                <option value="<?= $value["id_employ_tujuan"] ?>"><?php echo $value["nama"] . " | " . $value["count(task.status)"] ?></option>
                                            <?php }
                                        }
                                    }
                                    foreach ($semua_employ as $value2) {
                                        if (!in_array($value2["nama"], $employe)) { ?>
                                            <option value="<?= $value2["id_employ"] ?>"><?php echo $value2["nama"] . " | 0" ?></option>
                                    <?php }
                                    }
                                    ?>
                                </select>
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
                                <textarea class="form-control required" name="deskripsi" id="deskripsi" rows="3" placeholder="Isi Deskripsi"></textarea>
                            </div>
                            <div style="float:right;margin-bottom:3%">
                                <button type="reset" class="btn btn-outline-warning mr-2">Reset</button>
                                <button type="submit" class="btn btn-primary">Buat</button>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- akhir pop up tiket staff -->





    <script src="<?php echo base_url('assets/oneui/js/oneui.core.min.js') ?>"></script>


    <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <script src="<?php echo base_url('assets/oneui/js/oneui.app.min.js') ?>"></script>

    <!-- Page JS Plugins -->
    <script src="<?php echo base_url('assets/oneui/js/plugins/es6-promise/es6-promise.auto.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/oneui/js/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>

    <!-- Page JS Code -->
    <script src="<?php echo base_url('assets/oneui/js/pages/be_comp_dialogs.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/oneui/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>"></script>
    <!-- Page JS Helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
    <script>
        jQuery(function() {
            One.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']);
        });
    </script>


    <!-- Page JS Plugins -->
    <script src="<?php echo base_url('assets/oneui/js/plugins/ckeditor/ckeditor.js') ?>"></script>

    <!-- Page JS Helpers (CKEditor plugin) -->
    <script>
        jQuery(function() {
            One.helpers(['ckeditor']);
        });
    </script>

</body>

</html>