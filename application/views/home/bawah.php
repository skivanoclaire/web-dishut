<br>
<br>

<footer>
            <div class="footer-area-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <a ><img class="img-responsive" src="logokaltara.png" width="140" alt="logo"></a>
                                <div class="footer-about">
                                    <p>Dinas Kehutanan Provinsi Kalimantan Utara </p>
                                </div>
                                <ul class="footer-social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 center">
                            <div class="footer-box">
                                <h3>Menu Utama</h3>
                                <ul class="featured-links">
                                    <li>
                                        <ul>
                                          
                                            <li><a href="home/berita">Berita</a></li>
                                            <li><a href="home/pengumuman">Pengumuman</a></li>
                                            <li><a href="home/kontak">Kontak Kami</a></li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 center">
                            <div class="footer-box">
                                <h3>Informasi</h3>
                                <ul class="featured-links">
                                    <li>
                                        <ul>

                                            <li><a href="https://ppid.kaltaraprov.go.id">Informasi Publik</a></li>
                                            <li><a href="https://lapor.go.id/">Laporan Pengaduan</a></li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <h3>Kontak</h3>
                                <ul class="corporate-address">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="" > -</a></li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:dishut@kaltaraprov.go.id">dishut@kaltaraprov.go.id</a></li>
									 <li><i class="fa fa-instagram" aria-hidden="true"></i><a href="https://www.instagram.com/dishut.kaltara//">Dishut Kaltara</a></li>
									<!--<li><i class="fa fa-youtube" aria-hidden="true"></i><a href="https://www.youtube.com/@uptdkphnunukan/">UPTD KPH Nunukan</a></li>-->
									<li><i class="fa fa-facebook" aria-hidden="true"></i><a href="https://www.facebook.com/profile.php?id=100089737364126">Dishut Kaltara</a></li> 
                                    <li><i class="fa fa-map-marker"></i>Jl. Rambutan No.5 Gedung Gadis II. Lt.3A. Tanjung Selor</li>
                                </ul>
								
								<ul class="corporate-address" style="color:white;">
								<li style="color:white;" ><i class="glyphicon glyphicon-user"></i>
								           <?php
        
            //if file does not exist, create it.
            if (!file_exists("local_file.log")) {
                $handle_mit_es = fopen("local_file.log", "a");
                $gone_call = 1;
            }
                
            //Open file for read and write
            $gonna_call = fopen("local_file.log", "r+");

            //gone_call get value of gonna_call
            $gone_call = fgets($gonna_call, 100);
            
            //Create cookie to only count uniqe visitors
            if (!isset($_COOKIE['cookiemonster'])) {
               
                //count plus one
                $gone_call = $gone_call + 1;

                //Reset filepointer
                rewind($gonna_call);

                //Write it back
                fputs($gonna_call, $gone_call);
                
                //Set cookie with value "true"
                setcookie('cookiemonster', true);

            } else {
                // do nothing because you are not uniqe!
            }
            
            //close file dialog
            fclose($gonna_call);

            echo "Jumlah Pengunjung : <br>". $gone_call . " Pengunjung";
            //Printout
        ?>
								</li>
								</ul>
                               
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
    <div class="footer-area-bottom" style="display: flex; justify-content: center; align-items: center;">
        <p>&copy; <?php echo date('Y'); ?> APTIKA DKISP All Rights Reserved.</p>
    </div>

        </footer>
        <!-- Footer Area End Here -->
    </div>

    <?php if($this->session->flashdata('msg') == 'berhasil') { ?>
        <script>
            Swal.fire(
                'Sukses',
                'Terima Kasih Telah Menghubungi Kami',
                'success'
            );
        </script>
    <?php   } ?>
    <?php if($this->session->flashdata('msg') == 'error') { ?>
        <script>
            Swal.fire(
                'Informasi',
                'atau password salah',
                'error'
            );
        </script>
    <?php   } ?>
    <!-- Main Body Area End Here -->
    <!-- jquery-->
    <script src="depan/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="depan/js/plugins.js" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="depan/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="depan/js/wow.min.js"></script>
    <!-- Nivo slider js -->
    <script src="depan/vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="depan/vendor/slider/home.js" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="depan/vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="depan/js/jquery.meanmenu.min.js" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="depan/js/jquery.scrollUp.min.js" type="text/javascript"></script>
    <!-- jquery.counterup js -->
    <script src="depan/js/jquery.counterup.min.js"></script>
    <script src="depan/js/waypoints.min.js"></script>
    <!-- Countdown js -->
    <script src="depan/js/jquery.countdown.min.js" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="depan/js/isotope.pkgd.min.js" type="text/javascript"></script>
    <!-- Magic Popup js -->
    <script src="depan/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <!-- Gridrotator js -->
    <script src="depan/js/jquery.gridrotator.js" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="depan/js/main.js" type="text/javascript"></script>
    <!--Js Search-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function () {
    $('#example').DataTable();
    }); </script>
    <!--Batas Js Search-->
</body>

</html>