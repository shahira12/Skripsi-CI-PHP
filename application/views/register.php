<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="<?php echo base_url() ?>assets/css/login.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/iconpmi.png">

   <title>Unit Transfusi Darah PMI Kabupaten Bandung</title>
</head>
    
<body>
    <div class="main">
        <div class="container">
        <center>
            <div class="middle">
                <div id="login">
                    <?php
                        echo form_open("register/DaftarUser", array("class"=>"form-horizontal"));

                        echo "<span class='fa fa-user-plus'></span>";
                        echo form_input (array("name" => "name",
                                                "class" => "form-control",
                                                "placeholder" => "Nama",
                                                "type" => "text"));

                        echo "<span class='fa fa-user'></span>";
                        echo form_input (array("name" => "username",
                                                "class" => "form-control",
                                                "placeholder" => "Nama Pengguna",
                                                "type" => "text"));

                        echo "<span class='fa fa-envelope'></span>";
                        echo form_input (array("name" => "email",
                                                "class" => "form-control",
                                                "placeholder" => "Email",
                                                "type" => "text"));

                        echo "<span class='fa fa-phone'></span>";
                        echo form_input (array("name" => "phone",
                                                 "class" => "form-control",
                                                 "placeholder" => "Nomor Telepon",
                                                 "type" => "text"));

                        echo "<span class='fa fa-lock'></span>";
                        echo form_input (array("name" => "password",
                                                 "class" => "form-control",
                                                 "placeholder" => "Kata Sandi",
                                                 "type" => "password"));
                        echo "<br>";
                        echo form_input (array("class" => "btn btn-success",
                                                 "type" => "submit",
                                                 "value" => "Daftar"));
                    ?>
                    <span style="width:50%; text-align:right;  display: inline-block;"><a class="small-text" href="<?php echo base_url('index.php/login')?>">Batal</a></span>

                </div> <!-- end login -->
                 <div class="logo">
                    <img src="<?php echo base_url('assets/img/logo-pmi1.png')?>" style="margin-left: 50px; margin-top: 95px; width: 250px; height: 150px;">
                    <div class="clearfix"></div>
                </div>
            </div>
        </center>
        </div>
    </div>
</body>