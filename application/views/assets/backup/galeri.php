<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="card">
                <div class="card-header latar text-light">
                    <h4 class="text-light">Galleri</h4>
                </div>
                <div class="card-body table-responsive">
                    <a href="admin/addgaleri" class="btn btn-primary mb-3"><i class="fa fa-images"></i> Tambah Galeri</a>
                    <table class="table table-striped" id="gallery-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1; 
                                $q = $this->db->query("SELECT * FROM galeri ORDER BY id_galeri DESC");
                                foreach($q->result() as $row){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><img src="gambar/<?php echo $row->gambar ?>" width="120" height="200" class="img img-thumbnail" alt="..."></td>
                                <td><?php echo $row->judul ?></td>
                                <td><?php echo $row->status ?></td>
                                <td>
                                    <a href="admin/hapusgaleri/<?php echo $row->id_galeri ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash"></i> Hapus</a>
                                    <a href="admin/editgaleri/<?php echo $row->id_galeri ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                </td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#gallery-table').DataTable({
        "paging": true,
        "pageLength": 8,
        "info": false,
        "searching": false,
        "lengthChange": false,
        "ordering": false,
        "autoWidth": true,
        "columnDefs": [{
            "targets": [1], // Index of the column that contains images
            "orderable": false // Disable ordering on the image column
        }]
    });
});
</script>
