<?php 
    $sk =  $this->db->query("select *, jabatan.namajabatan from jabatan inner join struktural ON jabatan.id_jabatan=struktural.id_jabatan  where id_struktural='$idstruktural'");
    $row=  $sk->row();
    $idstruktural = $row->id_struktural;
?>
<div class="main-content">
        <section class="section">
          <div class="section-body">

<div class="card">
  <div class="card-header text-light latar">
    <i class="fa fa-user-plus mr-2"></i> <?php echo $title; ?> : <?php echo $row->nama ?>
  </div>
  <div class="card-body">
    <form action="admin/updatestruktural/<?php echo $idstruktural; ?>" method="post"  enctype="multipart/form-data">
        
    <div class="form-group ">
          <label for="a">NIP</label>
          <input type="text" name="nip" value="<?php echo $row->nip ?>"  id="a" class="form-control" autocomplete="off" aria-describedby="helpId">
        </div>
    
    <div class="form-group ">
          <label for="a">Nama</label>
          <input type="text" name="nama" value="<?php echo $row->nama ?>"  id="a" class="form-control" autocomplete="off" aria-describedby="helpId">
        </div>
        <div class="form-group ">
          <label for="a">Jenis Kelamin</label>
            <select name="jk" id="" class="custom-select">
                <option value="">Pilih</option>
                <option value="L"<?php if($row->jk == 'L') echo 'selected'; ?>>Laki-laki</option>
                <option value="M"<?php if($row->jk == 'M') echo 'selected'; ?>>Perempuan</option>
            </select>
        </div>

        <div class="form-group ">
          <label for="a">Tempat Lahir</label>
          <input type="text" name="tempatlahir" value="<?php echo $row->tempat_lahir ?>"  id="a" class="form-control" autocomplete="off" aria-describedby="helpId">
        </div>
       
    <div class="form-group ">
          <label for="a">Tanggal lahir</label>
          <input type="date" name="tanggal" value="<?php echo $row->tanggal_lahir ?>"  id="a" class="form-control" autocomplete="off" aria-describedby="helpId">
        </div>
    
        <div class="form-group ">
          <label for="a">Nama Jabatan</label>
            <select name="idjabatan" id="" class="custom-select">
			
			 <?php
	$sk =  $this->db->query("select jabatan.namajabatan from jabatan inner join struktural ON jabatan.id_jabatan=struktural.id_jabatan  where id_struktural='$idstruktural'");
    $xrow=  $sk->row();
                    $q =  $this->db->query("select * from jabatan");
                    foreach($q->result() as $zrow){
				
                ?>

               <option value="<?php echo $zrow->id_jabatan?>"<?php if($zrow->namajabatan == $xrow->namajabatan) echo 'selected'; ?>><?php echo $zrow->namajabatan?>  </option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group ">
          <label for="a">Pendidikan Akhir</label>
          <input type="text" name="pendakhir" value="<?php echo $row->pendakhir ?>"  id="a" class="form-control" autocomplete="off" aria-describedby="helpId">
        </div>
        <div class="form-group ">
          <label for="a">Golongan</label>
          <input type="text" name="gol" value="<?php echo $row->gol ?>" id="a" class="form-control" autocomplete="off" aria-describedby="helpId">
        </div>
    <div class="form-group ">
          <label for="a">Foto</label><br>
          <img src="gambar/<?php echo $row->foto ?>" alt="" class="img rounded-circle" width="120">
          <br>
          <input type="file" name="gambar"  id="a" class="form-control" autocomplete="off" aria-describedby="helpId">
            <br>
            <span class="badge badge-warning">Upload Hanya Bisa Bertype JPG</span>
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