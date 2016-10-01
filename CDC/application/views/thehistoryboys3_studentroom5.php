<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-user font-dark"></i>
            <span class="caption-subject bold uppercase">รายชื่อเด็กห้อง5</span>
        </div>
        <div class="tools"></div>
    </div>
    <div class="portlet-body">

        <div class="row">
            <div class="col-md-1">
                <div class="btn-group"><a href="<?= base_url(); ?>Main/thehistoryboys1"
                                          class="nav-link nav-toggle">
                        <button id="sample_editable_1_new" class="btn green"> เพิ่มรายชื่อ
                            <i class="fa icon-user-follow"></i>
                        </button>
                </div>
            </div>


            <div class="col-md-6">
                <div class="btn-group pull-right">

                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:;"> Print </a>
                        </li>
                        <li>
                            <a href="javascript:;"> Save as PDF </a>
                        </li>
                        <li>
                            <a href="javascript:;"> Export to Excel </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="page-toolbar">
                <div class="btn-group pull-right">
                    <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown">
                        เลือกห้องที่ต้องการ
                        <i class="fa icon-arrow-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li>
                            <a href="<?= base_url(); ?>Main/thehistoryboys3">
                                <i class="i"></i>ดูทั้งหมด</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>Main/thehistoryboys3_studentroom1">
                                <i class="i"></i> ห้อง 1</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>Main/thehistoryboys3_studentroom2">
                                <i class="i"></i> ห้อง 2</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>Main/thehistoryboys3_studentroom3">
                                <i class="i"></i> ห้อง 3</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>Main/thehistoryboys3_studentroom4">
                                <i class="i"></i> ห้อง 4</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>


        <table class="table table-striped table-bordered table-hover" id="sample_2">
            <table class="table table-striped table-bordered table-hover" id="sample_1">
                <thead>
                <tr>

                    <th> ที่</th>
                    <th> รหัสประจำตัว</th>
                    <th> ชื่อ</th>
                    <th> นามสกุล</th>
                    <th> แก้ไข</th>
                    <th> ลบ</th>
                </tr>
                </thead>
                <tbody>

                <?php $i = 1;
                foreach ($thehistoryboys3_studentroom5 as $r) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $r['student_id'] ?></td>
                        <td><?php echo $r['name'] ?></td>
                        <td><?php echo $r['last_names'] ?></td>
                        <td>
                            <center>
                                <form action="<?= base_url(); ?>main/editroom/<?php echo $r['id'] ?>" method="post">
                                    <button type="submit" name="submit" title="แก้ไข"
                                            class="btn btn-transparent green btn-outline btn-circle btn-sm active"><i
                                            class="fa fa-pencil-square-o"></i></button>
                                </form>
                            </center>
                        </td>
                        <td>
                            <center><a class="ask-plain" href="<?= base_url() ?>main/delstudent/<?php echo $r['id'] ?>">
                                    <button type="submit" name="submit" title="ลบ"
                                            class="btn btn-transparent red btn-outline btn-circle btn-sm active"><i
                                            class="fa fa-trash"></i></button>
                                </a>
                            </center>
                        </td>
                    </tr>
                <?php } ?>
                </td>
                </tr>
                </tbody>
            </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->
</div>
</div>
</div>
<!-- END CONTENT BODY -->
<script type="text/javascript">
    $(document).ready(function () {
        $('.ask-plain').click(function (e) {
            e.preventDefault();
            thisHref = $(this).attr('href');
            if (confirm('Are you sure')) {
                window.location = thisHref;
            }
        });
        $('.ask-custom').jConfirmAction({question: "Do you want to delete?", yesAnswer: "Yes", cancelAnswer: "Cancel"});
        $('.ask').jConfirmAction();
    });

</script>