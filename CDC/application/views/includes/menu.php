
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <br>

                        <li class="nav-item start " >
                            <a href="<?= base_url(); ?>Main/welcome_message" class="nav-link nav-toggle">
                                <i class="glyphicon glyphicon-home"></i>
                                <span class="title"><i></i>หน้าแรก</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                                 <li class="nav-item start " >
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class=" glyphicon glyphicon-education"></i>
                                <span class="title">ประวัติเด็กเล็ก</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start">
                                    <a href="<?= base_url(); ?>Main/thehistoryboys1" class="nav-link nav-toggle">
                                        <i class="glyphicon glyphicon-grain"></i>
                                        <span class="title">กรอกประวัติเด็กเล็ก</span>
                                        <!-- <span class="label label-primary pull-right">2</span> -->
                                        <!-- <span class="selected"></span> -->
                                    </a>
                                </li>
                                <li class="nav-item start">
                                    <a href="<?= base_url(); ?>Main/thehistoryboys2" class="nav-link nav-toggle">
                                        <i class="glyphicon glyphicon-grain"></i>
                                        <span class="title">ดูประวัติเด็กเล็ก</span>
                                        <!-- <span class="label label-primary pull-right">2</span> -->
                                        <!-- <span class="selected"></span> -->
                                    </a>
                                </li>
                                <li class="nav-item start">
                                    <a href="<?= base_url(); ?>Main/thehistoryboys3" class="nav-link nav-toggle">
                                        <i class="glyphicon glyphicon-grain"></i>
                                        <span class="title">จัดการประวัติเด็กเล็ก</span>
                                        <!-- <span class="label label-primary pull-right">2</span> -->
                                        <!-- <span class="selected"></span> -->
                                    </a>
                                </li>
                            </ul>



                        <li class="nav-item start " >
                            <a href="<?= base_url(); ?>Main/project_information" class="nav-link nav-toggle">
                                <i class="glyphicon glyphicon-hdd"></i>
                                <span class="title"><i></i>ข้อมูลโครงการ</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    
                        <li class="nav-item start " >
                            <a href="<?= base_url(); ?>Main/more_teachers" class="nav-link nav-toggle">
                                <i class=" glyphicon glyphicon-user"></i>
                                <span class="title"><i></i>ข้อมูลครูพี่เลียง</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item start " >
                            <!--<a href="" class="nav-link nav-toggle">ฟังก์พันretrunหน้าเดิม-->
                            <a href="<?= base_url(); ?>Main/About_the_web" class="nav-link nav-toggle">
                                <i class="glyphicon glyphicon-globe"></i>
                                <span class="title"><i></i>เกี่ยวกับ เว็บไซต์</span>
                                <span class="selected"></span>
                            </a>
                        </li>



                    <!--    <li class="nav-item start " >
                            <a href="<?/*= base_url(); */?>Main/hbso" class="nav-link nav-toggle">
                                <i class=" glyphicon glyphicon-user"></i>
                                <span class="title"><i></i>HBSO</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item start " >
                            <a href="<?/*= base_url(); */?>Main/hbsoedit" class="nav-link nav-toggle">
                                <i class=" glyphicon glyphicon-user"></i>
                                <span class="title"><i></i>HBSO/แก้ไข</span>
                                <span class="selected"></span>
                            </a>
                        </li>-->
               

                    </ul>
                    <!-- END SIDEBAR MENU<?php if($sit == "user"){ ?>
                        <li class="nav-item start " >
                            <a href="<?= base_url(); ?>Main/homeuser" class="nav-link nav-toggle">
                                <i class="glyphicon glyphicon-home"></i>
                                <span class="title"><i></i>หน้าแรก</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <?php }else{} ?> -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    
                    