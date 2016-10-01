<div class="page-bar">
    <ul class="page-breadcrumb">
        <img alt="" class="img-circle" style="width: 40px;margin-top: -20px;"
             src="<?= base_url(); ?>assets/layouts/layout/img/logocpe.png"/>
        &nbsp;&nbsp;
        <li>
            <h4>ระบบบริหารวัสดุและครุภัณฑ์สำหรับห้องปฏิบัติการสาขาวิชาวิศวกรรมคอมพิวเตอร์</h4>
            <h5>Asset and Material Management System for Computer Engineering Laboratory</h5>
        </li>
    </ul>
</div><br>
<h3 class="page-title">
    <div class="col-md-4">
        <i class="fa fa-bar-chart"></i>&nbsp; สถิติการใช้งาน&nbsp;&nbsp;
        <small>Status</small>
    </div>
    <div class="col-md-5"></div>

</h3>
<br><br><br>
<div id="chart" style="min-width: 310px;box-shadow: #D0CFCF 0.2em 0.2em 0.2em; height: 500px; margin: 0 auto"></div>

<script src="<?= base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<?php
$sql = "SELECT * FROM hbso WHERE Date_Ream BETWEEN '2016-01-01' AND '2016-01-31';";
$query = $this->db->query($sql);
$jan = $query->result_array();
?>
<?php
$sql = "SELECT * FROM hbso WHERE Date_Ream BETWEEN '2016-02-01' AND '2016-02-29';";
$query = $this->db->query($sql);
$feb = $query->result_array();
?>
<?php
$sql = "SELECT * FROM hbso WHERE Date_Ream BETWEEN '2016-03-01' AND '2016-03-31';";
$query = $this->db->query($sql);
$mar = $query->result_array();
?>
<?php
$sql = "SELECT * FROM hbso WHERE Date_Ream BETWEEN '2016-04-01' AND '2016-04-30';";
$query = $this->db->query($sql);
$apr = $query->result_array();
?>
<?php
$sql = "SELECT * FROM hbso WHERE Date_Ream BETWEEN '2016-05-01' AND '2016-05-31';";
$query = $this->db->query($sql);
$may = $query->result_array();
?>
<?php
$sql = "SELECT * FROM hbso WHERE Date_Ream BETWEEN '2016-06-01' AND '2016-06-30';";
$query = $this->db->query($sql);
$jun = $query->result_array();
?>
<?php
$sql = "SELECT * FROM hbso WHERE Date_Ream BETWEEN '2016-07-01' AND '2016-07-31';";
$query = $this->db->query($sql);
$jul = $query->result_array();
?>
<?php
$sql = "SELECT * FROM hbso WHERE Date_Ream BETWEEN '2016-08-01' AND '2016-08-31';";
$query = $this->db->query($sql);
$aug = $query->result_array();
?>
<?php
$sql = "SELECT * FROM hbso WHERE Date_Ream BETWEEN '2016-09-01' AND '2016-09-30';";
$query = $this->db->query($sql);
$sep = $query->result_array();
?>
<?php
$sql = "SELECT * FROM hbso WHERE Date_Ream BETWEEN '2016-10-01' AND '2016-10-31';";
$query = $this->db->query($sql);
$oct = $query->result_array();
?>
<?php
$sql = "SELECT * FROM hbso WHERE Date_Ream BETWEEN '2016-11-01' AND '2016-11-30';";
$query = $this->db->query($sql);
$nov = $query->result_array();
?>
<?php
$sql = "SELECT * FROM hbso WHERE Date_Ream BETWEEN '2016-12-01' AND '2016-12-31';";
$query = $this->db->query($sql);
$dec = $query->result_array();
?>
<!-- ........................................... -->
<?php
$sql = "SELECT * FROM hbso WHERE name_ream";
$query = $this->db->query($sql);
$test = $query->result_array();
?>


<script type="text/javascript">
    $(function () {
        // Create the chart
        $('#chart').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'สถิติการเบิกวัสดุสิ้นเปลือง'
            },
            subtitle: {
                text: 'Click the columns to view versions. Source: <a href="http://netmarketshare.com">netmarketshare.com</a>.'
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'จำนวนวัสดุสิ้นเปลือง'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y} รายการ'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:14px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>เบิกทั้งหมด {point.y} รายการ</b><br/>'
            },

            series: [{
                name: 'เดือน',
                colorByPoint: true,
                data: [{
                    name: 'มกราคม',
                    y: <?php echo sizeof($jan); ?>,
                }, {
                    name: 'กุมภาพันธ์',
                    y: <?php echo sizeof($feb); ?>,

                }, {
                    name: 'มีนาคม',
                    y: <?php echo sizeof($mar); ?>,

                }, {
                    name: 'เมษายน',
                    y: <?php echo sizeof($apr); ?>,

                }, {
                    name: 'พฤษภาคม',
                    y: <?php echo sizeof($may); ?>,

                }, {
                    name: 'มิถุนายน',
                    y: <?php echo sizeof($jun); ?>,

                }, {
                    name: 'กรกฏาคม',
                    y: <?php echo sizeof($jul); ?>,

                }, {
                    name: 'สิงหาคม',
                    y: <?php echo sizeof($aug); ?>,

                }, {
                    name: 'กันยายน',
                    y: <?php echo sizeof($sep); ?>,

                }, {
                    name: 'ตุลาคม',
                    y: <?php echo sizeof($oct); ?>,

                }, {
                    name: 'พฤศจิกายน',
                    y: <?php echo sizeof($nov); ?>,

                }, {
                    name: 'ธันวาคม',
                    y: <?php echo sizeof($dec); ?>,

                }]
            }],

        });
    });
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>



