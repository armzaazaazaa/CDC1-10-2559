


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

                                    <?php foreach ($editroom as $r) { ?>
                                    <form action="<?= base_url(); ?>main/edit/<?php echo $r['id'] ?>" method="post">
                                        <thead>
                                        <tr>


                                        <tr>
                                            <div class="form-group">
                                                <td><label class="control-label">เลขประจำตัวเด็ก</label></td>
                                                <td><input type="text" name="student_id"
                                                           value="<?php echo $r['student_id'] ?>"
                                                           class="form-control"/>
                                            </div>
                                            </td></tr>

                                        <div class="form-group">
                                            <label class="control-label">เลขประจำตัวประชาชน</label>
                                            <input type="text" name="id_card" value="<?php echo $r['id_card'] ?>"
                                                   class="form-control"/></div>
                                        <div class="form-group">
                                            <label class="control-label">ชื่อ</label>
                                            <input type="text" name="name" value="<?php echo $r['name'] ?>"
                                                   class="form-control"/></div>
                                        <div class="form-group">
                                            <label class="control-label">นามสกุล</label>
                                            <input type="text" name="last_names" value="<?php echo $r['last_names'] ?>"
                                                   class="form-control"/></div>

                                        <div class="form-group">
                                            <label>วันเกิดเด็ก</label>

                                            <form action="#" class="form-horizontal form-bordered">
                                                <div class="form-body">
                                                </div>
                                                <div class="form-group">

                                                    <div class="col-md-3">
                                                        <div class="input-group input-medium date date-picker"
                                                             data-date-format="dd-mm-yyyy">
                                                            <input type="text" class="form-control" readonly
                                                                   name="birthday"
                                                                   value=<?php echo $r['birthday'] ?>"
                                                        <span class=" input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label">น้ำหนัก</label>
                                                    <input type="text" name="weight" value="<?php echo $r['weight'] ?>"
                                                           class="form-control"/></div>

                                                <div class="form-group">
                                                    <label class="control-label">ส่วนสูง</label>
                                                    <input type="text" name="height" value="<?php echo $r['height'] ?>"
                                                           class="form-control"/></div>

                                                <div class="form-group">
                                                    <label class="control-label">โรคประจำตัว</label>
                                                    <input type="text" name="congenital_disease"
                                                           value="<?php echo $r['congenital_disease'] ?>"
                                                           class="form-control"/>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">ชื่อผู้ปกครอง</label>
                                                    <input type="text" name="parents_name"
                                                           value="<?php echo $r['parents_name'] ?>"
                                                           class="form-control"/></div>

                                                <div class="form-group">
                                                    <label class="control-label">ที่อยู่</label>
                                                    <input type="text" name="address"
                                                           value="<?php echo $r['address'] ?>"
                                                           class="form-control"/></div>
                                                <div class="form-group">
                                                    <label class="control-label">อาชีพผู้ปกครอง</label>
                                                    <input type="text" name="career" value="<?php echo $r['career'] ?>"
                                                           class="form-control"/></div>
                                                <div class="form-group">
                                                    <label class="control-label">เบอร์โทรศัพท์(บ้าน/มือถือ)</label>
                                                    <input type="text" name="telephone"
                                                           value="<?php echo $r['telephone'] ?>"
                                                           class="form-control"/></div>
                                                <label>กรุณาเลือกห้องเด็ก</label>
                                                <select class="form-control" name="classroom">
                                                    <option><?php echo $r['classroom'] ?></option>
                                                    <option>ห้อง1</option>
                                                    <option>ห้อง2</option>
                                                    <option>ห้อง3</option>
                                                    <option>ห้อง4</option>
                                                    <option>ห้อง5</option>
                                                </select>

                                                <div class="form-actions">
                                                    <button type="submit" class="btn blue">Submit</button>
                                                    <button type="button" class="btn default">Cancel</button>
                                                </div>
                                                <?php } ?>
                                            </form>
                                        </div>
                                        </tb></tr>
                                        </thead>


