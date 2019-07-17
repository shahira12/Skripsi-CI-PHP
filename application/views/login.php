<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <link href="<?php echo base_url() ?>assets/css/login.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/iconpmi.png">
</head>

<body>
    <div class="main">
        <div class="container">
        <center>
            <div class="middle">
                <div id="login">
                    <?php
                        echo form_open("login/AksiLogin", array("class"=>"form-signin"));
                    ?>
                    <fieldset class="clearfix">
                        <p ><span class="fa fa-user"></span><input type="text"  name="username" id="inputusername" class="form-control" Placeholder="Nama Pengguna" required></p> 

                        <p><span class="fa fa-lock"></span><input type="password" name="password" id="inputPassword" class="form-control"   Placeholder="Kata Sandi" required></p> 

                        <div>
                            <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="<?php echo base_url('index.php/forgotpassword/FormEditPassword/')?>">Lupa Kata Sandi?</a></span>
                            <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Masuk"></span>
                        </div>
                    </fieldset>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                </div> <!-- end login -->

                <div class="logo">
                    <img src="<?php echo base_url('assets/img/logo-pmi1.png')?>" style="margin-left: 50px; width: 250px; height: 150px;">
                    <div class="clearfix"></div>
                </div>
            </div>
        </center>
        </div>
        <div class="top-right">
            <a class="small-text" href="<?php echo base_url('index.php/login/register')?>"><strong>DAFTAR</strong></a>
        </div>
            <script type="text/javascript">
                $('.top-right').animate({
                    opacity: 1,
                    right: "50px",
                    top: "10px",
                    height: "toggle"
                    }, 1000, function() {
                }).css('position','fixed');
            </script>
    </div>
</body>