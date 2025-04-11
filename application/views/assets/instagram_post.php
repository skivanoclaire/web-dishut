
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- add content here -->
            <div class="card">
            <div class="card-header latar text-light">
            Manajemen Instagram 
            </div>
            <div>                                             
            <p style="color:black;">Kode embed dapat diambil dengan membuka instagram dari web browser. Buka postingan instagram yang akan disematkan/embed, klik tombol titik tiga, pilih Embed/Sematkan, lalu pilih Copy Embed Code/Salin Kode Semat</p>
            <img src="petunjuk 1.png" alt="Example Image" style="border: 2px solid black;width: 700px;">
             <img src="petunjuk 2.png" alt="Example Image" style="border: 2px solid black;width: 700px;"></div>
            <div class="card-body table-responsive">
                <a href="admin/addig" class="btn btn-primary  mb-3"><i class="fa fa-tags"></i> Tambah Data</a>
                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Postingan</th>
                            <th>Link/Kode Embed/Embed Code</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1; 
                            $q = $this->db->query("select * from instagram_post order by id_post asc");
                            foreach($q->result() as $row){
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->judul ?></td>
                            <td><?php echo htmlspecialchars($row->link_ig, ENT_QUOTES); ?></td>
                            <td>
					            <a href="admin/editig/<?php echo $row->id_post ?>"  data-toggle="tooltip" data-placement="top"
                      title="Ubah Data" class="btn btn-info "><i class="fa fa-edit"></i></a>							
                                <a href="admin/hapusig/<?php echo $row->id_post ?>"  data-toggle="tooltip" data-placement="top"
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


