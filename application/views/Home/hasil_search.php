<table class="table table-striped table-hover table-bordered table-vcenter font-size-sm mb-0" id="pelanggan">
    <thead class="thead-dark">
        <tr class="text-uppercase">
            <th class="font-w700 text-center" style="width: 80px;">#ID</th>
            <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 100px;">Layanan</th>
            <th class="font-w700 text-center">Customer</th>
            <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 200px;">Status</th>
            <th class="font-w700 text-center" style="width: 60px;">+Tiket</th>
        </tr>
    </thead>
    <?php foreach ($pelanggan as $value) { ?>
    <tbody>
        <tr>
        <?php if($value["id_employ_tujuan"]==NULL){?>
            <td>
                <span class="font-w600">#<?php echo $value["id_pelanggan"] ?></span>
            </td>
            <td >
                <span class="font-w600"><?php echo $value["layanan"] ?></span>
            </td>
            <td class="text-center">
                <span class="font-w600"><?php echo $value["customer"] ?></span>
            </td>
            <?php if($value["status"]=="tidak aktif"){?>
                <td class="text-center"><span class="font-w600 text-danger "><?php echo $value["status"] ?></span></td>
            <?php }else{?>
                <td class="text-center"><span class="font-w600 text-success"><?php echo $value["status"] ?></span></td>
            <?php }?>
            <td>
            <a class="text-decoration-none" href="<?php echo base_url('index.php/tiket/index/') . $employ_id . "/" . $value["id_pelanggan"] ?>">+ tiket</a>
            </td>
        <?php } ?>
        </tr>
    </tbody>
    <?php } ?>
    <?php foreach ($taskdihead as $value) { ?>
    <tbody>
        <tr>
        <?php if($value["id_employ_tujuan"]!=NULL){?>
            <td>
                <span class="font-w600"><?php echo $value["title"] ?></span>
            </td>
            <td >
                <span class="font-w600"><?php echo $value["dateline"] ?></span>
            </td>
            <?php if($value["status"]=="belum selesai"){?>
                <td class="text-center"><span class="font-w600 text-danger"><?php echo $value["status"] ?></span></td>
            <?php }else{?>
                <td class="text-center"><span class="font-w600 text-success"><?php echo $value["status"] ?></span></td>
            <?php }?>
            <td class="text-center">
                <span class="text-success"><?php echo $value["id_employ_tujuan"] ?></span>
            </td>
            <td>
                <a class="text-decoration-none" href="<?php echo base_url('index.php/home/detail/') . $employ_id . "/" . $value['id_task'] ?>">Buka</a>
            </td>
        <?php } ?>
        </tr>
    </tbody>
    <?php } ?>
</table>