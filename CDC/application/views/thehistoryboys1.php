<div class="portlet-body form" xmlns="http://www.w3.org/1999/html">
    <div role="form">
        <div class="form-body">
            <div class="form-group">
                <?php echo form_open_multipart('main/insertdepa'); ?>
                <div class="form-group last">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <tbody>
                        <tr>
                            <td><label>กรุณาเลือกรูป</label></td>
                            <td>
                                <div class="col-md-9">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                             style="max-width: 200px; max-height: 200px;"></div>
                                        <div>
                                            <span class="btn default btn-file">
                                                <!--<span class="fileinput-new"> Select image </span>
                                                <span class="fileinput-exists"> Change </span>-->
                                                <input type="file" name="image" value="111"> </span>
                                            <a href="javascript:;" class="btn red fileinput-exists"
                                               data-dismiss="fileinput"> Remove </a>
                                        </div>
                                    </div>
                                </div>
                </div>
                </td>
                </tr>

                <td>
                    <div class="form-group">
                        <label for="exampleInputPassword1">เลขประจำตัวเด็ก</label>
                </td>
                <td>
                    <div class="input-group">
                        <input type="เลขประจำตัวเด็ก" class="form-control" id="exampleInputPassword1"
                               placeholder="เลขประจำตัวเด็ก" name="student_id">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    </div>
                </td>
                </tr>


                <td>
                    <div class="form-group">
                        <label for="exampleInputPassword1">เลขประจำตัวประชาชน</label>
                </td>

                <td>
                    <div class="input-group">
                        <input type="เลขประจำตัวประชาชน" class="form-control" id="exampleInputPassword1"
                               placeholder="เลขประจำตัวประชาชน" name="id_card">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                    </div>
                </td>
                </tr>

                <td>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ชื่อ</label>
                </td>

                <td>
                    <div class="input-group">
                        <input type="ชื่อ" class="form-control" id="exampleInputPassword1" placeholder="ชื่อ"
                               name="name">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                    </div>
                </td>
                </tr>

                <td>
                    <div class="form-group">
                        <label for="exampleInputPassword1">นามสกุล</label>
                </td>

                <td>
                    <div class="input-group">
                        <input type="สกุล" class="form-control" id="exampleInputPassword1"
                               placeholder="สกุล" name="last_names">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                    </div>
                </td>
                </tr>


                <td>
                    <div class="form-group">
                        <label>วันเกิดเด็ก</label>
                </td>


                <td>
                    <form action="#" class="form-horizontal form-bordered">
                        <div class="form-body">

                        </div>
                        <div class="form-group">

                            <div class="col-md-3">
                                <div class="input-group input-medium date date-picker"
                                     data-date-format="dd-mm-yyyy">
                                    <input type="text" class="form-control" readonly name="birthday">
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                </div>


                            </div>
                        </div>


                </td>
                </tr>

                <td>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">อายุ</label></td>

                <td>
                    <div class="input-group">
                        <input type="สกุล" class="form-control" id="exampleInputPassword1" placeholder="อายุ"
                               name="age">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                    </div>
            </div>
            </td></tr>


            <td>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">น้ำหนัก</label></td>

            <td>
                <div class="input-group">
                    <input type="สกุล" class="form-control" id="exampleInputPassword1" placeholder="น้ำหนัก"
                           name="weight">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                </div>
        </div>
        </td></tr>

        <td>
            <div class="form-group">
                <label for="exampleInputPassword1">ส่วนสูง</label>
        </td>

        <td>
            <div class="input-group">
                <input type="สกุล" class="form-control" id="exampleInputPassword1" placeholder="สวนสูง"
                       name="height">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
            </div>
        </td>
        </tr>

        <td>
            <div class="form-group">
                <label for="exampleInputPassword1">โรคประจำตัว</label>
        </td>

        <td>
            <div class="input-group">
                <input type="สกุล" class="form-control" id="exampleInputPassword1"
                       placeholder="โรคประจำตัว" name="congenital_disease">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
            </div>
        </td>
        </tr>


        <td>
            <div class="form-group">
                <label for="exampleInputPassword1">ชื่อผู้ปกครอง</label>
        </td>

        <td>
            <div class="input-group">
                <input type="ชื่อผู้ปกครอง" class="form-control" id="exampleInputPassword1"
                       placeholder="ชื่อผู้ปกครอง" name="parents_name">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
            </div>
        </td>
        </tr>


        <td>
            <div class="for -group">
                <label for="exampleInputPassword1">ที่อยู่</label>
        </td>

        <td>
            <div class="input-group">
                <input type="ที่อยู่" class="form-control" id="exampleInputPassword1"
                       placeholder="ที่อยู่" name="address">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
            </div>
        </td>
        </tr>


        <td>
            <div class="form-group">
                <label for="exampleInputPassword1">อาชีพผู้ปกครอง</label>
        </td>

        <td>
            <div class="input-group">
                <input type="อาชีพผู้ปกครอง" class="form-control" id="exampleInputPassword1"
                       placeholder="อาชีพผู้ปกครอง" name="career">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
            </div>
        </td>
        </tr>


        <td>
            <div class="form-group">
                <label for="exampleInputPassword1">เบอร์โทรศัพท์(บ้าน/มือถือ)</label>
        </td>

        <td>
            <div class="input-group">
                <input type="เบอร์โทรศัพท์(บ้าน/มือถือ)" class="form-control"
                       id="exampleInputPassword1"
                       placeholder="เบอร์โทรศัพท์(บ้าน/มือถือ)" name="telephone">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
            </div>
        </td>
        </tr>


        <td><label>กรุณาเลือกห้องเด็ก</label></td>
        <td><select class="form-control" name="classroom">
                <option></option>
                <option>ห้อง1</option>
                <option>ห้อง2</option>
                <option>ห้อง3</option>
                <option>ห้อง4</option>
                <option>ห้อง5</option>
            </select>
    </div>
    </td></tr>
    <div class="form-actions">
        <button type="submit" id="submit" class="btn blue">Submit</button>


        <button type="button" class="btn default">Cancel</button>
    </div>
    </form>
</div>
</div>
</div>


