<div class="slider-content s-tb slide-1">
<div class="title-container s-tb-c">
<div class="video-background-holder">
  <div class="video-background-overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <?php
                            $no = 1; 
                            $q = $this->db->query("select * from slider order by id_slider asc");
                            foreach($q->result() as $row){
                        ?>
                    <source src="gambar/<?php echo $row->foto ?>" type="video/mp4" />
         
					  <?php $no++; } ?>
					  </video>
					  
  </div><!-- end video-background-overlay-->
</div>
</div>


		
		                 <?php
                            $no = 1; 
                            $q = $this->db->query("select * from sambutan order by id_sambutan asc");
                            foreach($q->result() as $row){
                        ?>
<div class="about-page1-area" style="font-family: 'Arial', sans-serif; color: #333;">
    <div class="container">
        <h1 class="about-title" style="font-size: 2.5em; font-weight: bold; margin-bottom: 20px;"><?php echo htmlspecialchars($row->judul); ?></h1>
        <p class="about-sub-title" style="margin-bottom: 30px;"></p>
        <div class="row about-page1-inner">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="about-page-content-holder" style="background-color: #f9f9f9; padding: 20px; border-radius: 10px;">
                    <div class="content-box">
                        <p align="justify" style="line-height: 1.6;"><?php echo nl2br(htmlspecialchars($row->deskripsi)); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="about-page-img-holder" style="text-align: center;">
                    <img src="/gambar/<?php echo htmlspecialchars($row->foto); ?>" width="500" class="img-responsive" alt="about" style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>
</div>


<?php $no++; } ?>






        <?php $video = $this->db->query("select * from video")->num_rows(); ?>
        <?php $berita = $this->db->query("select * from berita")->num_rows(); ?>
        <?php $pengumuman = $this->db->query("select * from pengumuman")->num_rows(); ?>
        <?php $galeri = $this->db->query("select * from galeri")->num_rows(); ?>
        <div class="counter-area bg-primary-deep" style="background-image: url('gubernur.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                        <h2 class="about-counter title-bar-counter" data-num="<?php echo $video ?>"></h2>
                        <p>Video Terbaru</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                        <h2 class="about-counter title-bar-counter" data-num="<?php echo $berita ?>"></h2>
                        <p>Berita Terbaru </p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                        <h2 class="about-counter title-bar-counter" data-num="<?php echo $galeri ?>"></h2>
                        <p>Galeri</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                        <h2 class="about-counter title-bar-counter" data-num="<?php echo $pengumuman ?>"></h2>
                        <p>Pengumuman</p>
                    </div>
                </div>
            </div>
        </div>


<div class="news-event-area" style="font-family: 'Arial', sans-serif; color: #333;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area" style="padding-bottom: 20px;">
                <h2 class="title-default-left" style="font-size: 2em; font-weight: bold; margin-bottom: 20px;">Foto Terbaru</h2>
                <ul class="news-wrapper">
                    <?php 
                    $xb = $this->db->query("select * from galeri order by id_galeri desc limit 1 ");
                        foreach($xb->result() as $b){
                    ?>
                        <li style="margin-bottom: 20px;">
                            <div class="news-img-holder">
                                <a href="home/galeri"><img src="gambar/<?php echo htmlspecialchars($b->gambar); ?>" width="130" class="img img-thumbnail mr-2 img-responsive" style="border-radius: 10px;" alt="news"></a>
                            </div>
                            <div class="news-content-holder" style="padding: 10px;">
                                <h3><a href="home/galeri" style="text-decoration: none; color: #333;"><?php echo htmlspecialchars($b->judul); ?></a></h3>
                                <div class="post-date" style="font-size: 0.9em; color: #888;"><?php echo date('d F Y ', strtotime($b->tanggal)); ?></div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
                <div class="news-btn-holder">
                    <a href="home/galeri" class="view-all-accent-btn" style="text-decoration: none; color: white;">Selengkapnya</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
                <h2 class="title-default-left" style="font-size: 2em; font-weight: bold; margin-bottom: 20px;">Berita Terbaru</h2>
                <ul class="news-wrapper">
                    <?php 
                    $xb = $this->db->query("select berita.*,user.nama from berita inner join user on user.id_user =  berita.id_user where status_berita='Publish'  order by id_berita desc limit 1");
                        foreach($xb->result() as $b){
                    ?>
                        <li style="margin-bottom: 20px;">
                            <div class="news-img-holder">
                                <a href="home/detail/<?php echo htmlspecialchars($b->id_berita); ?>"><img src="gambar/<?php echo htmlspecialchars($b->gambar); ?>" width="160" class="img img-thumbnail mr-2 img-responsive" style="border-radius: 10px;" alt="news"></a>
                            </div>
                            <div class="news-content-holder" style="padding: 10px;">
                                <h3><a href="home/detail/<?php echo htmlspecialchars($b->id_berita); ?>" style="text-decoration: none; color: #333;"><?php echo htmlspecialchars($b->judul); ?></a></h3>
                                <div class="post-date" style="font-size: 0.9em; color: #888;"><?php echo date('d F Y ', strtotime($b->tanggal_post)); ?></div>
                                <p style="line-height: 1.6;"><?php echo substr(htmlspecialchars_decode($b->isi), 0, 550); ?>...</p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
                <div class="news-btn-holder">
                    <a href="home/berita" class="view-all-accent-btn" style="text-decoration: none; color: white;">Selengkapnya</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area" style="margin-top: 40px;">
                <h2 class="title-default-left" style="font-size: 2em; font-weight: bold; margin-bottom: 20px;">Postingan Instagram Terbaru</h2>
                <ul class="news-wrapper">
                    <?php 
                    $xb = $this->db->query("select * from instagram_post order by id_post asc limit 1 ");
                        foreach($xb->result() as $c){
                    ?>
                        <li style="margin-bottom: 20px;">
                            <div class="news-img-holder">
                                <?php echo $c->link_ig; ?>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>


        
        <!--Pop up Iklan-->
<style>
.hide{display:none;visibility:hidden;}
.popbox{position:fixed;top:0;left:0;bottom:0;width:100%;z-index:1000000;}
.pop-content{width:520px;height:700px;display:block;position:absolute;top:50%;left:50%;margin:-350px 0 0 -250px;z-index:2;box-shadow:0 3px 20px 0 rgba(0,0,0,.5);}
.popcontent{width:100%;height:100%;display:block;background:#fff;border-radius:5px;overflow:hidden}
.pop-overlay{position:absolute;top:0;left:0;bottom:0;width:100%;z-index:1;background:rgba(0,0,0,.7)}
.popbox-close-button{position:absolute;width:28px;height:28px;line-height:28px;text-align:center;top:-14px;right:-14px;background-color:#fff;box-shadow:0 -1px 1px 0 rgba(0,0,0,.2);border:none;border-radius:50%;cursor:pointer;font-size:34px;font-weight:lighter;padding:0}
.popcontent img{width:100%;height:100%;display:block}
.flowbox{position:relative;overflow:hidden}
@media screen and (max-width:840px){.pop-content{width:90%;height:auto;top:20%;margin:0 0 0 -45%}
.popcontent img{height:auto;}
}
</style>
<!--
<div class='popbox ' id='popbox'>
    <div aria-label='Close' class='pop-overlay' onclick='document.getElementById(&quot;popbox&quot;).style.display=&quot;none&quot;;removeClassonBody();' role='button' tabindex='0'/>
        <div class='pop-content'>
            <a href='https://www.lapor.go.id/' rel='noopener noreferrer' target='_blank' title='box'>
                <div class='popcontent'>
                    <img src="popup.jpg" src='https://www.lapor.go.id/'>
                </div>
                
                    
            </a>
            <button aria-label='Close' class='popbox-close-button' onclick='document.getElementById(&quot;popbox&quot;).style.display=&quot;none&quot;;removeClassonBody();'><b>&times;</b></button>
        </div>
    </div>
  -->  
    <script>
    //<![CDATA[
    setTimeout(function(){
        document.getElementById('popbox').classList.add('hide');
        //document.body.className=" flowbox"// untuk tidak bisa discroll
    }, 6000);
    function removeClassonBody(){
        var element=document.body;
        //element.className=element.className.replace(/\bflowbox\b/g,"")// mematikan
    }
    //]]>
     </script>
</div>

<!--Batas Pop op Iklan-->