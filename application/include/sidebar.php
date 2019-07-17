<div id="sidebar">
<!-- Sidebar Was Here -->
	<div class="sidebar" data-color="red" data-image="<?php echo base_url('assets/img/iconpmi.png'); ?>">
        <div class="sidebar-wrapper">
            <div class="logo">
                <img draggable="false" src="<?php echo base_url('assets/img/logo-pmi1.png')?>" style="margin-left: 50px; width: 150px; height: 80px;">
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url() ?>index.php/admin/index">
                        <i class="fa fa-dashboard fa-fw" aria-hidden="true"></i>
                        <p>Beranda</p>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#">
                        <i class="fa fa-eyedropper fa-fw" aria-hidden="true"></i>
                        <p>Data Donor Darah</p>
                    </a>
                    <ul style="list-style-type: none;">
                        <li>
                            <a href="<?php echo base_url() ?>index.php/admin/datadonordarah"><span class="fa fa-check"></span> Tabel Donor Darah
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/admin/grafikdonordarah"><span class="fa fa-check"></span> Grafik Donor Darah
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">
                        <i class="fa fa-plus-square fa-fw" aria-hidden="true"></i>
                        <p>Data Produksi Darah</p>
                    </a>
                    <ul style="list-style-type: none;">
                        <li>
                            <a href="<?php echo base_url() ?>index.php/admin/dataproduksidarah"><span class="fa fa-check"></span> Tabel Produksi Darah
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/admin/grafikproduksidarah"><span class="fa fa-check"></span> Grafik Produksi Darah
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="#">
                        <i class="fa fa-medkit fa-fw" aria-hidden="true"></i>
                        <p>Data Stok Darah</p>
                    </a>
                    <ul style="list-style-type: none;">
                        <li>
                            <a href="<?php echo base_url() ?>index.php/admin/datastokdarah"><span class="fa fa-check"></span> Tabel Stok Darah
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/admin/grafikstokdarah"><span class="fa fa-check"></span> Grafik Stok Darah
                            </a>
                        </li>
                    </ul>
                </li>
                 <li>
                    <a href="<?php echo base_url() ?>index.php/admin/datapermintaandarah">
                        <i class="fa fa-child fa-fw" aria-hidden="true"></i>
                        <p>Data Permintaan Darah</p>
                    </a>
                </li>
                
                <li>
                    <a href="<?php echo base_url() ?>index.php/admin/dataprediksi">
                        <i class="fa fa-line-chart fa-fw" aria-hidden="true"></i>
                        <p>Prediksi Stok Darah</p>
                    </a>
                </li>
            </ul>
      </div>
    </div>
<!-- Sidebar END -->
</div>