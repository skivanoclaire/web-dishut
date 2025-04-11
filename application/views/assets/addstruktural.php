<div class="main-content">
        <section class="section">
          <div class="section-body">

<div class="card">
  <div class="card-header text-light latar">
    <i class="fa fa-user-plus mr-2"></i> <?php echo $title; ?>
  </div>
  <div class="card-body">
    <form action="admin/savestruktural" method="post"  enctype="multipart/form-data">
        
    <div class="form-group ">
          <label for="a">NIP</label>
          <input type="text" name="nip" required id="a" class="form-control" autocomplete="off" aria-describedby="helpId">
        </div>
    
    <div class="form-group ">
          <label for="a">Nama</label>
          <input type="text" name="nama" required id="a" class="form-control" autocomplete="off" aria-describedby="helpId">
        </div>
        <div class="form-group ">
          <label for="a">Jenis Kelamin</label>
            <select name="jk" id="" class="custom-select">
                <option value="">Pilih</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="form-group ">
          <label for="a">Tempat Lahir</label>
          <input type="text" name="tempatlahir" required id="a" class="form-control" autocomplete="off" aria-describedby="helpId">
        </div>
       
    <div class="form-group ">
          <label for="a">Tanggal lahir</label>
          <input type="date" name="tanggal" required  id="a" class="form-control" autocomplete="off" aria-describedby="helpId">
        </div>
    
        <div class="form-group ">
          <label for="a">Jabatan</label>
            <select name="idjabatan" id="" class="custom-select">
                <option value="">Pilih</option>
                <?php
                    $q =  $this->db->query("select * from jabatan");
                    foreach($q->result() as $row){
                ?>
                <option value="<?php echo $row->id_jabatan?>"><?php echo $row->namajabatan?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group ">
          <label for="a">Pendidikan Akhir</label>
          <input type="text" name="pendakhir" required id="a" class="form-control" autocomplete="off" aria-describedby="helpId">
        </div>
        <div class="form-group ">
          <label for="a">Golongan</label>
          <input type="text" name="gol" required id="a" class="form-control" autocomplete="off" aria-describedby="helpId">
        </div>
    <div class="form-group ">
          <label for="a">Foto</label>
          <input type="file" name="gambar" required id="a" class="form-control" autocomplete="off" aria-describedby="helpId">
            <br>
            <span class="badge badge-warning">Upload Hanya Bisa Bertype JPG GIF PNG JPEG BMP</span>
        </div>


        <div class="form-group">
          <label for="a"></label>
          <a href="admin/struktural" class="btn btn-warning"><i class="fas fa-sync"></i> Kembali</a>
          <button type="submit" class="btn btn-primary "><i class="fa fa-paper-plane"></i> Simpan</button>
        </div>
    </form>
  </div>
</div>


          </div>
        </section>
</div>