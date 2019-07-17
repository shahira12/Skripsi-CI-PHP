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
                        <br> <br>
                         <div class="content">
                                    <div class="logo">
                                    <center>
                                    <img draggable="false" src="<?php echo base_url('assets/img/ayodonor1.png')?>" style="margin-left: 50px; width: 400px; height: 200px;""text-align: center;">
                                    </center>
                                    <center>
                                    <h4>Ayo donor darah, Setetes Darah Anda Nyawa Bagi Semua...</h4>
                                    </center>
                                    <br>
                                    <p align="center">
                                    <a button type="button" class="btn btn-default" href="<?php echo base_url() ?>index.php/admin/FormAddPrediksi" role="button">Tambah Prediksi</a>
                                    <a button type="button" class="btn btn-default" href="" role="button" >Data hasil prediksi?</a>
                                    </p>
                                </div>
                            <div class="col-md-4">
                                <br>
                            </p>
                        </div>
                    </div>
        </div>

        <script>
            function print_l() {
                window.open("<?php echo base_url()?>index.php/admin/print_dataprediksi","_blank"); 
                //buka controller admin, bikin perintah print. Setelah itu buat modelnya sesuai dengan data yang akan di print. Lihat contoh di 1. controller Admin>print_datadonordarah 2. Model M_donor_darah > tampildatalaporan1 3. buat file baru di view dg nama print_datadonordarah (copy dari data_donor_darah)
            }
        </script>
        <!-- Content Was Here -->

        <!--  FOOTER    -->
        <br>
        <?php require("application/include/footer.php"); ?>

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