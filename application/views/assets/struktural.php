
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- add content here -->
            <div class="card">
            <div class="card-header latar text-light">
               <i class="fa fa-users mr-2"></i> <?php echo $title; ?>
            </div>
            <div class="card-body table-responsive">
                <a href="admin/addstruktural" class="btn btn-primary  mb-3"><i class="fa fa-users"></i> Tambah Data</a>
                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Tanggal Lahir</th>
                            <th>Jabatan</th>
                            <th>Pendidikan Akhir</th>
                            <th>Golongan</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1; 
                            $q = $this->db->query("select struktural.*,jabatan.namajabatan from struktural
                            inner join jabatan on jabatan.id_jabatan = struktural.id_jabatan
                             order by id_struktural asc");
                            foreach($q->result() as $row){
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td style="width: 2%;"><?php echo $row->nip ?></td>
                            <td><?php echo $row->nama ?></td>
                            <td><?php echo $row->jk ?></td>
                            <td><?php echo $row->tempat_lahir ?>, <?php echo $row->tanggal_lahir ?></td>
                            <td><?php echo $row->namajabatan ?></td>
                            <td><?php echo $row->pendakhir ?></td>
                            <td><?php echo $row->gol ?></td>
                            <td><img src="gambar/<?php echo $row->foto ?>" alt="" class="img rounded-circle" width="110"></td>
                            <td>
                                <a href="admin/editstruktural/<?php echo $row->id_struktural ?>"  data-toggle="tooltip" data-placement="top"
                      title="Edit Data" class="btn btn-success"><i class="fa fa-edit"></i></a>
					                                  <a href="admin/hapusstruktural/<?php echo $row->id_struktural ?>"  data-toggle="tooltip" data-placement="top"
                      title="Hapus Data" class="btn btn-danger tombol-hapus"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $no++; } ?>
                    </tbody>
                </table>
            </div>
            </div>
            <!-- close -->
          </div>
        </section>
</div>


