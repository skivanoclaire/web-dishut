<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                    <div class="card">
                        <div class="latar card-header">
                            <h4 class="text-light">Galleri</h4>
                        </div>
                        <div class="card-body">
                            <a href="admin/addgaleri" class="btn btn-primary mb-3"><i class="fa fa-images"></i> Tambah Galeri</a>
                            <div id="gallery-container" class="row">
                                <?php
                                    $limit = 10; // Number of cards per page
                                    $page = $this->input->get('page');
                                    $page = isset($page) && is_numeric($page) ? (int)$page : 1; // Validate and sanitize input
                                    $offset = ($page - 1) * $limit;

                                    $total_rows = $this->db->count_all('galeri');
                                    $total_pages = ceil($total_rows / $limit);

                                    $this->db->order_by('id_galeri', 'DESC');
                                    $this->db->limit($limit, $offset);
                                    $q = $this->db->get('galeri');
                                    
                                    foreach ($q->result() as $row) {
                                ?>
                                    <div class="card mr-3 mb-3" style="width: 18rem;">
                                        <img src="gambar/<?php echo htmlspecialchars($row->gambar); ?>" width="120" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text"><?php echo htmlspecialchars($row->judul); ?></p>
                                            <p class="card-text">Status: <?php echo htmlspecialchars($row->status); ?></p>
                                            <a href="admin/hapusgaleri/<?php echo (int)$row->id_galeri; ?>" class="tombol-hapus btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                            <a href="admin/editgaleri/<?php echo (int)$row->id_galeri; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="pagination-container">
                                <ul id="pagination" class="pagination">
                                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                        <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                                            <a class="page-link" href="admin/galeri?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                        </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
