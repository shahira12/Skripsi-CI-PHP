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
</head>
<body>

<div class="wrapper">

    <!--  SIDEBAR    -->
    <?php require("application/include/sidebar.php"); ?>

    <div class="main-panel">
        <!--  HEADER    -->
        <?php require("application/include/header.php"); ?>

        <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title"><b>SELAMAT DATANG DI SISTEM PREDIKSI STOK DARAH</b></h4>
                                </div>

                                <div class="content">
                                    <div class="logo">
                                    <center>
                                    <img draggable="false" src="<?php echo base_url('assets/img/dondar.png')?>" style="margin-left: 50px; width: 400px; height: 200px;""text-align: center;">
                                    </center>
                                    </a>
                                </div>

                                 
                                    <p><b>DONOR DARAH</b></p>

                                    <p>Donor Darah merupakan suatu aktivitas yang selain mulia dari sgi sosial juga dapat memberikan efek positif bagi kesehatan. Namun ada beberapa ketentuan dari sisi medis yang perlu diperhatikan sebelum mendonorkan darahnya. Beberapa ketentuan tersebut bermanfaat bagi keamanan diri sendiri maupun orang lain kelak akan mendapatkan darah donor.</p>

                                    <p>Berikut syarat – syarat yang perlu dipenuhi untuk menjadi pihak pendonor antara lain :</p>
                                    
                                    <p>1. Usia antara 17 – 60 tahun, jika ingin menjadi pendonor sebelum usia 17 tahun perlu adanya surat ijin dari pihak wali seperti misalnya orang tua. Sedangkan untuk usia 70 tahun memerlukan surat keterangan sehat dari pihak dokter, dan sebaiknya frekuensi donor dibatasi dengan interval tidak berdekatan</p>

                                   <p>2. Berat badan cukup minimal 45 kg.</p>

                                    <p>3. Tidak sedang demam (suhu < 37,5 C)</p>

                                    <p>4. Tekanan Darah tidak sedang tinggi maupun rendah yaitu batas atas sistolik jangan melewati 160 mmhg sedangkan batas bawah sebaiknya diatas 100 mmhg</p>

                                    <p>5. Denyut nadi teratur dan dalam rentang 60 – 110 x per menit

                                    <p>6. Haemoglobin darah sebaiknya diatas 12,5 gr/dl (wanita) atau lebih dari 12,5 gr/dl (pria)</p>

                                    <p>7. Donor yang baik jika intervalnya paling dekat 3 bulan sekali</p>

                                    <p>8. Tidak sedang minum obat</p>

                                    <p>9. Tidur tidak kurang dari 5 jam</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>


        <!--  FOOTER    -->
        <?php require("application/include/footer.php"); ?>
        
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>

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
