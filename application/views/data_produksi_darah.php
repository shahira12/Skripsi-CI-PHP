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
                                                
                        <h3>Data Produksi Darah UTD PMI Kabupaten Bandung April 2017 - Maret 2018</h3>
                            <table align="center" cellspacing="0" cellpadding="5" width="100%">
                            <thead>
                                <th><center>No.</center></th>
                                <th><center>Bulan</center></th>
                                <th><center>Tahun</center></th>
                                <th><center>Golongan A</center></th>
                                <th><center>Golongan B</center></th>
                                <th><center>Golongan O</center></th>
                                <th><center>Golongan AB</center></th>
                                <th colspan="2"><center>Aksi</center></th>
                            </thead>
                            <tbody>
                            <?php
                            $no=1;
                                 foreach ($produksi_darah as $a) {
                                   echo "<tr>
                                            <td>$no</td>
                                            <td>$a->bulan</td>
                                            <td>$a->tahun</td>
                                            <td>$a->gol_a</td>
                                            <td>$a->gol_b</td>
                                            <td>$a->gol_o</td>
                                            <td>$a->gol_ab</td>
                                            <td>
                                            <a href='".base_url()."index.php/admin/FormEditProduksiDarah/".$a->id_produksi."'>
                                            <center>Sunting</a>
                                            </td>
                                            <td>
                                            <a href='".base_url()."index.php/admin/AksiDeleteProduksiDarah/".$a->id_produksi."'>
                                            <center>Hapus</a>
                                           </td>
                                        </tr>";
                                    $no++;
                                }
                            ?>
                              </tbody>
                            </table>
                            <br/>
                            <p align="center">
                                <a button type="button" class="btn btn-default" href="<?php echo base_url() ?>index.php/admin/FormAddProduksiDarah" role="button">Tambah Data</a>
                                <a button type="button" class="btn btn-default" href="" role="button" onclick="print_l()">Cetak Laporan</a>
                            </p>
                    </div>
        </div>

        <script>
            function print_l() {
                window.open("<?php echo base_url()?>index.php/admin/print_dataproduksidarah","_blank"); 
                //buka controller admin, bikin perintah print. Setelah itu buat modelnya sesuai dengan data yang akan di print. Lihat contoh di 1. controller Admin>print_datadonordarah 2. Model M_donor_darah > tampildatalaporan1 3. buat file baru di view dg nama print_datadonordarah (copy dari data_donor_darah)
            }
        </script>
                    </div>
        </div>
        <!-- Content Was Here -->

        <!--  FOOTER    -->
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