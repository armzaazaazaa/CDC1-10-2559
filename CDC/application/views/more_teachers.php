<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase">ข้อมูลครูพี่เลี้ยง</span>
        </div>
        <div class="tools"></div>
    </div>
    <div class="portlet-body">

        <table class="table table-striped table-bordered table-hover" id="sample_2">
            <table class="table table-striped table-bordered table-hover" id="sample_1">
                <thead>
                <tr>
                    <th> ที่</th>
                    <th> ชื่อ</th>
                    <th> นามสกุล</th>
                    <th> เลือกดูข้อมูล</th>

                </tr>
                </thead>
                <tbody>
                <?php $i = 1;
                foreach ($more_teachers as $r) { ?>

                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $r['first_name'] ?></td>
                    <td><?php echo $r['last_name'] ?></td>
                    <td>

                        <!-- START Modal -->
                        <?php /*foreach ($more_teachers as $r) { */?><!--
                        <form action="<?/*= base_url(); */?>main/more_teachers/<?php /*echo $r['id'] */?>" method="post">-->
                        <button type="button" class="btn btn-info btn-s" data-toggle="modal" data-target="#myModal">
                            ดูข้อมูล
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">

                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">ชื่อ....</h4>
                                    </div>
                                    <div class="modal-body">

                                        <div class="portlet light profile-sidebar-portlet ">
                                            <!-- SIDEBAR USERPIC -->
                                            <div class="profile-userpic">
                                                <img src="../assets/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""></div>
                                            <!-- END SIDEBAR USERPIC -->
                                            <!-- SIDEBAR USER TITLE -->
                                            <div class="profile-usertitle"> </br>
                                                <div class="profile-usertitle-name"> ชื่อ        <?php echo $r['first_name'] ?></div>
                                                <div class="profile-usertitle-job">  นามสกุล    <?php echo $r['last_name'] ?></div>
                                                <div class="profile-usertitle-job">  วันเกิด     <?php echo $r['birthday'] ?></div>
                                                <div class="profile-usertitle-job">  ที่อยู่       <?php echo $r['address'] ?> </div>
                                                <div class="profile-usertitle-job">  ห้องที่สอน   <?php echo $r['at_teaching'] ?></div>

                                            </div>
                                            <!-- END SIDEBAR USER TITLE -->

                                        </form>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">ออก</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- END Modal --></td>

    </tr>
    <?php } ?>
    </tbody>
    </table>
</div>
</div>
