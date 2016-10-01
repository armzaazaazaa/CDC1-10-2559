<div class="page-bar">
    <ul class="page-breadcrumb">

        <li>
            <span>ดูประวัดเด็ก</span>
        </li>
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown">
                เลือกห้องที่ต้องการ
                <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>

                    <a href="<?= base_url(); ?>Main/studentroom1" class="nav-link nav-toggle">
                        <i class="i"></i> ห้อง 1</a>
                </li>

                <li>
                    <a href="<?= base_url(); ?>Main/studentroom2" class="nav-link nav-toggle">ห้อง 2</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>Main/studentroom3" class="nav-link nav-toggle">ห้อง 3</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>Main/studentroom4" class="nav-link nav-toggle">ห้อง 4</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>Main/studentroom5" class="nav-link nav-toggle">ห้อง 5</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">ดูประวัติเด็กเล็ก</span>
                </div>
                <div class="tools"></div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                    <tr>
                        <th> ที่</th>
                        <th> รหัสประจำตัว</th>
                        <th> ชื่อ</th>
                        <th> สกุล</th>
                        <th> ที่อยู่</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    foreach ($thehistoryboys2 as $r) { ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $r['student_id'] ?></td>
                            <td><?php echo $r['name'] ?></td>
                            <td><?php echo $r['last_names'] ?></td>
                            <td><?php echo $r['address'] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
     