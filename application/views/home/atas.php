<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <base href="<?php echo base_url(); ?>">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dinas Kehutanan Provinsi Kalimantan Utara</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="logokaltara.png">
	<link rel="icon" type="image/png" sizes="32x32" href="logokaltara.png">
	<link rel="icon" type="image/png" sizes="16x16" href="logokaltara.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="sweetalert2.min.css">
	<script src="sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="depan/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="depan/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="depan/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="depan/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="depan/css/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="depan/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="depan/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="depan/css/meanmenu.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="depan/vendor/slider/css/nivo-slider.css" type="text/css" /> 
    <link rel="stylesheet" href="depan/vendor/slider/css/preview.css" type="text/css" media="screen" />
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="depan/css/jquery.datetimepicker.css">
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="depan/css/magnific-popup.css">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="depan/css/hover-min.css">
    <!-- ReImageGrid CSS -->
    <link rel="stylesheet" href="depan/css/reImageGrid.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="depan/style.css">
    <!--Video Landing CSS-->
    <link rel="stylesheet" href="depan/videolanding.css">
    <!--Datatable-->
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">	
    <!--CSS Search-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap4.min.css">
    <!-- Modernizr Js -->
    <script src="depan/js/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div id="header2" class="header2-area">
                <div class="header-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="header-top-left">
                                    <ul>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href=""> - </a></li>
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:dishut@kaltaraprov.go.id">dishut@kaltaraprov.go.id</a></li>
										<li><i class="fa fa-instagram" aria-hidden="true"></i><a href="https://www.instagram.com/dishut.kaltara/">Dishut Kaltara</a></li>
										<li><i class="fa fa-facebook" aria-hidden="true"></i><a href=" https://www.facebook.com/profile.php?id=100089737364126">Dishut Kaltara</a></li>
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="main-menu-area bg-textPrimary" id="sticker">
                    <div class="container" style="width: 1800px;">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-3">
								<div class="logo-area" >
                                    <a href=""><img class="img-responsive" src="/logobaru.png" style="max-width:190%; " alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-7" >
                                <nav id="desktop-nav">
                                    <ul>
                                        <li class="<?php if($this->uri->segment(2) == 'index') echo 'active' ?>"><a href="home/index" >Home</a>
                                        </li>
										
                                        <li class="<?php if($this->uri->segment(2) == 'about') echo 'active' ?>"><a>Tentang Kami</a>
                                            <ul>
                                                <li class="<?php if($this->uri->segment(2) == 'sejarah') echo 'active' ?>"><a href="home/sejarah">Sejarah</a></li>
                                                <li class="<?php if($this->uri->segment(2) == 'visimisi') echo 'active' ?>"><a href="home/visimisi">Visi Misi</a></li>
												<li class="<?php if($this->uri->segment(2) == 'tugasfungsi') echo 'active' ?>"><a href="home/tugasfungsi">Tugas & Fungsi</a></li> 
											<!--	<li class="<?php if($this->uri->segment(2) == 'struktur') echo 'active' ?>"><a href="home/struktur">Struktur Organisasi</a></li> -->
                                            </ul>										 
                                        </li>
                                        

                                        <li class="<?php if($this->uri->segment(2) == 'struktural') echo 'active' ?>"><a>Layanan Publik</a>
                                              <ul>							
																					  
                                                <li class="<?php if($this->uri->segment(2) == 'sop') echo 'active' ?>"><a href="">SOP</a></li>
                                                
												<li class="<?php if($this->uri->segment(2) == 'informasipublik') echo 'active' ?>"><a href="http://ppid.kaltaraprov.go.id/">Informasi Publik</a></li>
												<li class="<?php if($this->uri->segment(2) == 'laporanpengaduan') echo 'active' ?>"><a href="https://lapor.go.id/">Laporan Pengaduan</a></li>
                                            </ul>
                                              </li>

                                        <li class="<?php if($this->uri->segment(2) == 'berita') echo 'active' ?>"><a href="home/berita">Berita</a>
                                           
                                        </li>
										
										<li class="<?php if($this->uri->segment(2) == 'webgis') echo 'active' ?>"><a href="http://webgis.dishut.kaltaraprov.go.id/">webgis</a>
                                           
                                        </li>
                                        
                                        <li class="<?php if($this->uri->segment(2) == 'uptd') echo 'active' ?>"><a>UPTD</a>
                                              <ul>
                                                <li class="<?php if($this->uri->segment(2) == 'informasipublik') echo 'active' ?>"><a href="https://kphbulungan.kaltaraprov.go.id/">UPTD KPH Bulungan</a></li>							
												<li class="<?php if($this->uri->segment(2) == 'informasipublik') echo 'active' ?>"><a href="https://kphtarakan.kaltaraprov.go.id/">UPTD KPH Tarakan</a></li>
				                                <li class="<?php if($this->uri->segment(2) == 'informasipublik') echo 'active' ?>"><a href="https://kphnunukan.kaltaraprov.go.id/">UPTD KPH Nunukan</a></li>
				                                <li class="<?php if($this->uri->segment(2) == 'informasipublik') echo 'active' ?>"><a href="https://kphtanatidung.kaltaraprov.go.id/">UPTD KPH Tana Tidung</a></li>
				                                <li class="<?php if($this->uri->segment(2) == 'informasipublik') echo 'active' ?>"><a href="https://kphmalinau.kaltaraprov.go.id/">UPTD KPH Malinau</a></li>
				                                
                                            </ul>
                                              </li>
										
										<li class="<?php if($this->uri->segment(2) == 'a') echo 'active' ?>"><a>Galeri</a>
										<ul>
									
                                                <li class="<?php if($this->uri->segment(2) == 'galeri') echo 'active' ?>"><a href="home/galeri">Foto</a></li>
												<li class="<?php if($this->uri->segment(2) == 'video') echo 'active' ?>"><a href="home/video">Video</a></li>
												
                                            </ul>
										
										</li>
                                       
                                        <li class="<?php echo ($this->uri->segment(2) == 'lainnya' OR $this->uri->segment(2) == 'lainnya') ? 'active' : '' ?>"><a >Informasi Lainnya</a>
                                            <ul>
                                                <li class="<?php if($this->uri->segment(2) == 'pengumuman') echo 'active' ?>"><a href="home/pengumuman">Pengumuman</a>
                                                <li class="<?php if($this->uri->segment(2) == 'publikasi') echo 'active' ?>"><a href="home/publikasi">Publikasi</a></li>
                                                <li class="<?php if($this->uri->segment(2) == 'kontak') echo 'active' ?>"><a href="home/kontak">Kontak, Alamat & Peta Lokasi</a></li>
                                                <li class="<?php if($this->uri->segment(2) == 'loginadmin') echo 'active' ?>"><a href="welcome">Login Admin</a></li>
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                </nav>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>

		<!--	
	
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                    <li class=""><a href="home">Home</a>
                                           
                                           </li>
                                           <li class=""><a>Tentang Kami</a>
                                                                                          <ul>
                                                <li><a href="home/sejarah">Sejarah</a></li>
                                                <li><a href="home/visimisi">Visi Misi</a></li>
                                                <li><a href="home/tugasfungsi">Tugas Fungsi</a></li>
											<!--	<li><a href="home/struktur">Struktur Organisasi</a></li> -->
                                            </ul>
                                           </li>
                                           
                                           <li class=""><a>Layanan Publik</a>
										   <ul>
											
                                               <li><a href="">SOP</a></li>
                                              
												<li><a href="https://ppid.kaltaraprov.go.id">Informasi Publik</a></li>
                                                <li><a href="https://lapor.go.id/"> Laporan Pengaduan</a></li>
											</ul>
											
                                           </li>

                                           <li class=""><a href="home/berita">Berita</a>   </li>
										   <li class=""><a href="http://webgis.dishut.kaltaraprov.go.id/">WEBGIS</a>   </li>
										   
										   <li><a>Galeri</a>
										     <ul>
                                                <li><a href="home/galeri">Foto</a></li>
                                                
												<li><a href="home/video">Video</a></li>
                                            </ul>
                                          </li>
                                           <li><a >Selengkapnya</a>
                                            <ul>
												<li><a href="home/publikasi">Publikasi</a></li>
                                                <li><a href="home/kontak">Kontak Kami</a></li>
                                                <li class=""><a href="home/pengumuman">Pengumuman</a> </li>
												<li><a href="welcome">Login Admin</a></li>
                                            </ul>
                                        </li>
                                          
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			
            <!-- Mobile Menu Area End -->
        </header>