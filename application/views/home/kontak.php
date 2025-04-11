<div class="inner-page-banner-area" style="background-image: url('gubernur.jpg');">
            <div class="container">
                <div class="pagination-area">
                    <h1><?php echo $title; ?> </h1>
                    <ul>
                        <li><a href="home/">Home</a> -</li>
                        <li><?php echo $title; ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="contact-us-page1-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-us-info1">
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h3>Kontak Kami</h3>
                                    <p>-</p>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h3>Alamat</h3>
                                    <p> Jl. Rambutan No.5 Gedung Gadis II. Lt.3A. Tanjung Selor  </p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <h3>E-mail</h3><br>
                                    <p>dishut@kaltaraprov.go.id</p>
                                </li>
                                <li>
                                    <h3>Ikuti kami</h3>
                                    <ul class="contact-social">
                                        <li><a href="https://www.facebook.com/profile.php?id=100089737364126"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                       <!--    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
                                        <li><a href="https://www.instagram.com/dishut.kaltara//"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                      <!--  <li><a href="https://www.youtube.com/@uptd_kph_nunukan6039"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>-->
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="title-default-left title-bar-high">Hubungi Kami</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="contact-form1">
                                <form id="contact-form" action="home/hubungi" method="post">
                                    <fieldset>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Masukan nama anda..." class="form-control" name="nama" id="form-name" data-error="Nama harus diisi" required>
                                                <div class="help-block with-errors"></div>
                                            </div>											<div class="form-group">											<input type="text" placeholder="Nomor HP/WA.." class="form-control" name="nomorkontak" id="form-name" data-error="Nomor kontak harus diisi" required>											    </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" placeholder="Email.." class="form-control" name="email" id="form-email" data-error="Email field harus diisi" required>												 
                                                <input type="hidden" placeholder="Email.." class="form-control" name="tanggal" value="<?php echo date('Y-m-d') ?>" id="" data-error="" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>										
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea placeholder="Kirim pesan..." class="textarea form-control" name="subjek" id="form-message" rows="8" cols="20" data-error="Pesan harus diisi" required></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>																				 <div class="col-sm-12">                                            <div class="form-group">										<div class="g-recaptcha" data-sitekey="6LfffwsfAAAAAKg-wWMBWTuHE5nkqHwySgsxTvTP" data-callback="enableBtn"></div>										      </div>                                        </div>										
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                            <div class="form-group margin-bottom-none">
                                                <button type="submit" class="default-big-btn" id="submit_details" disabled="disabled">Kirim Pesan</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                            <div class='form-response'></div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
					
					
					
					
                </div>
            </div>            
			<div class="container-fluid">               
			<div class="row">                    
			<div class="google-map-area">                  
			<div id="mapid" style="width:100%; height:590px;">						

<iframe src="https://www.google.com/maps/embed?pb=!4v1675065832507!6m8!1m7!1sUNj5emnKybb9fYXVhkG8mA!2m2!1d2.843351963571087!2d117.3734019389467!3f146.0379!4f0!5f0.7820865974627469" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>                 
			</div>              
			</div>            
			</div>    
			</div>
        <!--    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

            <div class="container-fluid">
                <div class="row">
                    <div class="google-map-area">
                        <div id="mapid" style="width:100%; height:395px;"></div>
                    </div>
                </div>
            </div>
        </div>				-->
        <!-- Contact Us Page 1 Area End Here -->	<script src="https://www.google.com/recaptcha/api.js"></script>	<script>    function enableBtn(){        document.getElementById("submit_details").disabled = false;    }</script>
<script>

var mymap = L.map('mapid').setView([-1.967944469859582, 101.35553070018204], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);

L.marker([-1.9697934048305674, 101.35637278149547]).addTo(mymap)
    .bindPopup("<b>Lokasi Kami!</b><br />").openPopup();


var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);

</script>

