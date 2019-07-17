<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/iconpmi.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Unit Transfusi Darah PMI Kabupaten Bandung</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/demo.css">

    <!-- Animation library for notifications   -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/sass/light-bootstrap-dashboard.scss">

    <!--  Light Bootstrap Table core CSS    -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/light-bootstrap-dashboard.css"/>
    
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300'>
    <link rel='stylesheet' type='text/css' href="<?php echo base_url()?>assets/css/pe-icon-7-stroke.css"/>

</head>
<body>

<div class="wrapper">

    <!--  SIDEBAR    -->
    <?php require("application/include/sidebar.php"); ?>

    <div class="main-panel">
        <!--  HEADER    -->
        <?php require("application/include/header.php"); ?>

        <?php
            /* Mengambil query report*/
            foreach($stok_darah as $result){
                $bulan[] = $result->bulan;
                $tahun[] = $result->tahun;
                $gol_a[] = $result->gol_a;
                $gol_b[] = $result->gol_b;
                $gol_o[] = $result->gol_o;
                $gol_ab[] = $result->gol_ab;
            }
            /* end mengambil query*/
        ?>

        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div id="grafik_donor" style=" height: 500px; margin: 0 auto">
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
        
    </div>
</div>

</body>

    <!--     HighCharts     -->
    <script src="https://code.highcharts.com/highcharts.js" type="text/javascript"></script>
    <script src="https://code.highcharts.com/modules/exporting.js" type="text/javascript"></script>
    <script src="https://code.highcharts.com/modules/export-data.js" type="text/javascript"></script>
    <script type="text/javascript">
      Highcharts.chart('grafik_donor', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'JUMLAH STOK DARAH'
    },
    subtitle: {
        text: 'Tahun 2017-2018'
    },
    xAxis: {
        categories: [
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec',
            'Jan',
            'Feb',
            'Mar'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} orang</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Golongan A',
        data: [120, -40, -283, 67, -31, -200, 288, 110, 102, -173, -21, 103]

    }, {
        name: 'Golongan B',
        data: [125, 82, -316, 73, 55, 223, 370, 186, -153, -76, 52, 53]

    }, {
        name: 'Golongan O',
        data: [161, 172, -305, 72, 122, -245, 522, 184, -121, 101, 140, 151]

    }, {
        name: 'Golongan AB',
        data: [-11, 44, -82, 69, -22, -110, 68, 30, -92, 2, 1, 1]

    }]
});
    </script>

    <<!--   Core JS Files   -->
    <script type='text/javascript' src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script type='text/javascript' src="<?php echo base_url()?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script type='text/javascript' src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script type='text/javascript' src="<?php echo base_url()?>assets/js/jquery-migrate-1.2.1.js"></script>
    <script type='text/javascript' src="<?php echo base_url()?>assets/js/jquery-ui-1.10.3-custom.min.js"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/chartist.min.js"></script>
    
    <!--  Notifications Plugin    -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-select.js"></script>    

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/light-bootstrap-dashboard.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/ie10-viewport-bug-workaround.js"></script>

</html>
