<?php echo form_open_multipart('main/inserthbso'); ?>

<div class="portlet box purple ">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i> Horizontal Form Height Sizing
        </div>
        <div class="tools">
            <a href="" class="collapse"> </a>
            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
            <a href="" class="reload"> </a>
            <a href="" class="remove"> </a>
        </div>
    </div>
    <div class="portlet-body form">
        <form class="form-horizontal" role="form">
            <div class="form-body">


                <div class="form-group">
                    <label class="col-md-3 control-label">เลือกข้อมูล</label>

                    <div class="col-md-9">
                        <select class="form-control" name="order_type">
                            <option>1</option>
                            <option>2</option>

                        </select>
                    </div>
                </div>
                <br/><br/>

                <label class="col-md-3 control-label">order date</label>

                <div class="col-md-5">
                    <div class="input-group">
                        <input type="text" class="form-control timepicker timepicker-24" name="order_date">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn default" type="button">
                                                                            <i class="fa fa-clock-o"></i>
                                                                        </button>
                                                                    </span>
                    </div>
                </div>
            </div>
            <br/><br/>

            <div class="form-group">
                <label for="exampleInputPassword1">จำนวนorder</label></td>

                <td>
                    <div class="input-group">
                        <input type="สกุล" class="form-control" id="exampleInputPassword1"
                               placeholder="จำนวนorder" name="order_amount">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                    </div>
                    <br/><br/>

                    <div class="form-actions">
                        <button type="submit" id="submit" class="btn blue">Submit</button>


                        <button type="button" class="btn default">Cancel</button>
                    </div>
        </form>
    </div>
</div>
</div>



</html> 
