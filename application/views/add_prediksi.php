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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pe-icon-7-stroke.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/demo.css');?>">
    <!-- Animation library for notifications   -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.min.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sass/light-bootstrap-dashboard.scss');?>">

    <!--  Light Bootstrap Table core CSS    -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/light-bootstrap-dashboard.css');?>"/>
    
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300'>
    <link rel='stylesheet' type='text/css' href="<?php echo base_url('assets/css/pe-icon-7-stroke.css');?>"/>

    <!--  Table CSS    -->
    <style>
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
        }
        th, td {
        padding: 10px;
        }
        th {
        background-color: black;
        color: white;
        }
    </style>

    <!--  JQuery Slide and Show/Hidden    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script> 
    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideToggle("slow");
        });
    });
    </script>
    <style> 
    #panel, #flip {
        text-align: left;
    }
    #panel {
        display: none;
    }
    </style>

</head>
<body>

<div class="wrapper">
    
    <!--  SIDEBAR    -->
    <?php require("application/include/sidebar.php"); ?>

    <div class="main-panel">
        <!--  HEADER    -->
        <?php require("application/include/header.php"); ?>

        <!-- Content Was Here -->
        <div class="content">
            <div class="container-fluid">
            <h3>PREDIKSI STOK DARAH MENGGUNAKAN FUZZY MAMDANI</h3>
              <br>
                 <div class="panel-footer modal_custom">
                 <div class="container">
    
    <form action="<?php echo base_url()?>index.php/mamdani/AksiAddPrediksi" role="form" method="post">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="form-group">
            <label for="form-elem-3"> Bulan</label>
            <select class="form-control" name="bulan">
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
          </select>
          </div>

           <div class="form-group">
            <label for="form-elem-3">Tahun</label>
          <select class="form-control" name="tahun">
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
          </select>
          </div>

          <div class="form-group">
            <label for="form-elem-3">Golongan Darah</label>
          <select class="form-control" name="gol_darah">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="O">O</option>
            <option value="AB">AB</option>
          </select>
          </div>
          
          <div class="form-group">
            <label for="form-elem-4"> Kegiatan Donor Darah</label>
            <input type="text" name="kegiatan" id="form-elem-4" class="form-control" placeholder="Kegiatan <= 31"/>
            
         <div class="form-group">
            <label for="form-elem-3">Pendonor Darah</label>
            <input type="text" name="pendonor" id="form-elem-3" class="form-control" placeholder="Pendonor" />
          </div>

          <div class="form-group">
            <label for="form-elem-3">Kebutuhan Rumah Sakit</label>
            <input type="text" name="kebutuhan" id="form-elem-3" class="form-control" placeholder="Kebutuhan" />
          </div>


          <div style="margin-left: -100px;" class="col-md-6">
          <div class="form-group">
            <label class="col-md-2" for="comment"></label>
            <div class="col-md-9">
              <br>

            <input type="submit" class="btn btn-primary" value="submit">
             <span style="width:10%; text-align:right;  display: inline-block;"><a class="small-text" href="<?php echo base_url('index.php/admin/dataprediksi')?>">Batal</a></span>
            </div>
          </div>          
        </div>
            </div>
        </div>
        </div>
        <br><br>
       <!-- Content Was Here -->

        <!--  FOOTER    -->
        
    </div>
</div>


</body>

   <!--   Core JS Files   -->
    <script src="http://localhost/Prediksistokdarah/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="http://localhost/Prediksistokdarah/assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/chartist.min.js"></script>
    <script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/demo.js"></script>
    <script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/docs.js"></script>
    
    <!--  Notifications Plugin    -->
    <script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/bootstrap-select.js"></script>    

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/light-bootstrap-dashboard.js"></script>
    <script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="http://localhost/Prediksistokdarah/assets/js/ie10-viewport-bug-workaround.js"></script>

</html>