
<h3 class="page-title"> Editable Datatables
    <small>editable datatable samples</small>
</h3>

<div class="row">
    <div class="col-md-12">
    
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">Editable Table</span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                        <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group"><a href="<?= base_url(); ?>Main/hbso"
                                                      class="nav-link nav-toggle">
                                    <button id="sample_editable_1_new" class="btn green"> Add New
                                        <i class="fa fa-plus"></i>
                                    </button>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                <thead>
                <tr>

                    <th> ID</th>
                    <th> order type</th>
                    <th> order date</th>
                    <th> order amount</th>
                    <th> แก้ไข</th>
                    <th> ลบ</th>
                </tr>
                </thead>
                <tbody>

                <?php $i = 1;
                foreach ($hbsoedit as $r) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $r['order_type'] ?></td>
                        <td><?php echo $r['order_date'] ?></td>
                        <td><?php echo $r['order_amount'] ?></td>
                        <td>
                            <center>
                                <form action="<?= base_url(); ?>main/edithbso/<?php echo $r['id'] ?>" method="post">
                                    <button type="submit" name="submit" title="แก้ไข"
                                            class="btn btn-transparent green btn-outline btn-circle btn-sm active"><i
                                            class="fa fa-pencil-square-o"></i></button>
                                </form>
                            </center>
                        </td>
                        <td>
                            <center><a class="ask-plain" href="<?= base_url() ?>main/del/<?php echo $r['id'] ?>">
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