<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
                        echo form_open_multipart("forgotpassword/AksiEditPassword", array("class"=>"form-horizontal"));      
                            echo form_input(array("name"  => "email",
                                                  "class" => "form-control",
                                                  "placeholder" => "Email",
                                                  "type"  => "text"));
                            echo form_input(array("name"  => "password",
                                                  "class" => "form-control",
                                                  "placeholder" => "New Password",
                                                  "type"  => "password"));
                            echo form_input(array("class" => "btn btn-success",
                                                  "type"  => "submit",
                                                  "value" => "Submit"));
                    ?>
                    <span style="width:50%; text-align:right;  display: inline-block;"><a class="small-text" href="<?php echo base_url('index.php/login')?>">Batal</a></span>
                </div> <!-- end login -->
                <div class="logo">
                    <img src="<?php echo base_url('assets/img/logo-pmi1.png')?>" style="margin-left: 50px; width: 300px; height: 150px;">
                    <div class="clearfix"></div>
                </div>
            </div>
        </center>
        </div>
    </div>
</body>