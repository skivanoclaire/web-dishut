<?php $struktural = $this->db->query("select * from struktural")->num_rows(); ?>
        <?php $berita = $this->db->query("select * from berita")->num_rows(); ?>
        <?php $pengumuman = $this->db->query("select * from pengumuman")->num_rows(); ?>
        <?php $galeri = $this->db->query("select * from galeri")->num_rows(); ?>

<div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- add content here -->
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon l-bg-purple">
                    <i class="fas fa-users"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0">
                          <i class="ti-arrow-up text-success"></i> <?php echo $struktural ?>
                        </h3>
                        <span class="text-muted">Pegawai</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon l-bg-green">
                    <i class="fas fa-newspaper"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0">
                          <i class="ti-arrow-up text-success"></i><?php echo $berita ?>
                        </h3>
                        <span class="text-muted">Berita</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon l-bg-cyan">
                    <i class="fas fa-images"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0">
                          <i class="ti-arrow-up text-success"></i> <?php echo $galeri ?>
                        </h3>
                        <span class="text-muted">Galeri</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon l-bg-orange">
                    <i class="fas fa-user-tie"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="padding-20">
                      <div class="text-right">
                        <h3 class="font-light mb-0">
                          <i class="ti-arrow-up text-success"></i> <?php echo $pengumuman; ?>
                        </h3>
                        <span class="text-muted">Pengumuman</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  <div class="row">
    <div class="card col-lg-5 mr-3 ">
  <div class="card-header latar text-light">
 Berita Baru Diposting
  </div>
  <div class="card-body table-responsive">
    <table class="table table-bordered table-hover">
      <thead class='table-warning'>
        <tr>
          <th>No</th>
          <th></th>
          <th>Judul</th>
          <th>Penulis</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no = 1;
        $q = $this->db->query("select berita.* ,user.nama from berita inner join user on user.id_user = berita.id_user order by id_berita desc limit 5");
        foreach($q->result() as $row){
        ?>
          <tr>
            <td><?php echo $no ?></td>
            <td></td>
            <td><?php echo $row->judul ?></td>
            <td><?php echo $row->nama ?></td>
          </tr>
        <?php $no++; } ?>
      </tbody>
    </table>
  </div>
</div>
    <div class="card col-lg-6  ">
  <div class="card-header latar text-light">
    Galleri Baru Diposting
  </div>
  <div class="card-body table-responsive">
  <table class="table table-bordered table-hover" style="width:100%;">    
    <thead class="table-warning">
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Status</th>
          <th>Tanggal Post</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no = 1;
        $q = $this->db->query("select * from galeri order by id_galeri desc limit 5");
        foreach($q->result() as $row){
        ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $row->judul ?></td>
            <td><?php echo $row->status ?></td>
            <td><?php echo date('d F Y',strtotime($row->tanggal)) ?></td>
          </tr>
        <?php $no++; } ?>
      </tbody>
    </table>
  </div>
</div>
</div>

  </div>
<!-- closeing -->
          </div>
        </section>
</div>



