<div class="profile-content">
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <div class="caption caption-md">
                        <i class="icon-globe theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">แก้ไขประวัตติเด็ก</span>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1_1" data-toggle="tab">แก้ไขข้อมูล</a>
                        </li>


                    </ul>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <!-- PERSONAL INFO TAB -->
                        <div class="tab-pane active" id="tab_1_1">

                            <?php foreach ($edithbso as $r) { ?>
                            <form action="<?= base_url(); ?>main/editdatahbso/<?php echo $r['id'] ?>" method="post">
                                <thead>
                                <tr>

                                <tr>
                                    <div class="form-group">
                                        <td><label class="control-label">เลขประจำตัวเด็ก</label></td>
                                        <td><input type="text" name="order_type" value="<?php echo $r['order_type'] ?>"
                                                   class="form-control"/>
                                    </div>
                                    </td></tr>

                                <div class="form-group">
                                    <label class="control-label">เลขประจำตัวประชาชน</label>
                                    <input type="text" name="order_date" value="<?php echo $r['order_date'] ?>"
                                           class="form-control"/></div>
                                <div class="form-group">
                                    <label class="control-label">ชื่อ</label>
                                    <input type="text" name="order_amount" value="<?php echo $r['order_amount'] ?>"
                                           class="form-control"/></div>

                                <div class="form-actions">
                                    <button type="submit" class="btn blue">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                                <?php } ?>
                            </form>
                        </div>