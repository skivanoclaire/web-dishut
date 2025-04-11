<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('nama')) redirect('welcome/index');
        $this->load->model('main_model');
    }
    
    public function index()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/index');
        $this->load->view('assets/bawah');
    }


    public function video()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Video';
        $this->load->view('assets/atas');
        $this->load->view('assets/video',$data);
        $this->load->view('assets/bawah');
		}
    }
    public function addvideo()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Tambah Video';
        $this->load->view('assets/atas');
        $this->load->view('assets/addvideo',$data);
        $this->load->view('assets/bawah');
		}
    }


    public function savevideo()
    {
        $judul = $_POST['judul'];
		$link_video = $_POST['link_video'];
        if($this->db->query("insert into video values('','$judul','$link_video','')")){
            $this->session->set_flashdata('msg', 'success');
            redirect('admin/video','refresh');
        }else{
            $this->session->set_flashdata('msg', 'error');
            redirect('admin/video','refresh');
        }
    }
	
    public function editvideo($id='')
    {
        $data = array(
            'id'    => $id,
            'title' => 'Edit Video : '
        );
        $this->load->view('assets/atas');
        $this->load->view('assets/editvideo',$data);
        $this->load->view('assets/bawah');
    }

    public function updatevideo($id)
    {

        $judul = $_POST['judul'];
		$link_video = $_POST['link_video'];
        $this->db->query("UPDATE video SET judul='$judul', link_video='$link_video' WHERE id_video='$id'");
        $this->session->set_flashdata('msg', 'info');
        redirect("admin/video/$id");
    }

    public function hapusvideo($id='')
    {
        $this->db->query("delete from video where id_video='$id'");
        $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/video','refresh');
    }

    public function instagram_post()
    {	
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Manajemen Instagram Post';
        $this->load->view('assets/atas');
        $this->load->view('assets/instagram_post',$data);
        $this->load->view('assets/bawah');
		}
    }
    public function addig()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Tambah Postingan IG';
        $this->load->view('assets/atas');
        $this->load->view('assets/addig',$data);
        $this->load->view('assets/bawah');
		}
    }


    public function saveig()
    {
        $judul = $_POST['judul'];
		$link_ig = $_POST['link_ig'];
        if($this->db->query("insert into instagram_post values('','$judul','$link_ig','')")){
            $this->session->set_flashdata('msg', 'success');
            redirect('admin/instagram_post','refresh');
        }else{
            $this->session->set_flashdata('msg', 'error');
            redirect('admin/instagram_post','refresh');
        }
    }
	
    public function editig($id='')
    {
		if($this->session->userdata('role')=='1'){
        $data = array(
            'id'    => $id,
            'title' => 'Edit Instagram Post : '
        );
        $this->load->view('assets/atas');
        $this->load->view('assets/editig',$data);
        $this->load->view('assets/bawah');
		}
    }

    public function update_ig($id)
    {

        $judul = $_POST['judul'];
		$link_ig = $_POST['link_ig'];
        $this->db->query("UPDATE instagram_post SET judul='$judul', link_ig='$link_ig' WHERE id_post='$id'");
        $this->session->set_flashdata('msg', 'info');
        redirect("admin/instagram_post/$id");
    }

    public function hapusig($id='')
    {
        $this->db->query("delete from instagram_post where id_post='$id'");
        $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/instagram_post','refresh');
    }



    public function kategori()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Kategori';
        $this->load->view('assets/atas');
        $this->load->view('assets/kategori',$data);
        $this->load->view('assets/bawah');
		}
    }
    public function addkategori()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Tambah Kategori';
        $this->load->view('assets/atas');
        $this->load->view('assets/addkategori',$data);
        $this->load->view('assets/bawah');
		}
    }


    public function savekategori()
    {
        $a = $_POST['a'];
        if($this->db->query("insert into kategori values('','$a')")){
            $this->session->set_flashdata('msg', 'success');
            redirect('admin/kategori','refresh');
        }else{
            $this->session->set_flashdata('msg', 'error');
            redirect('admin/kategori','refresh');
        }
    }
	
    public function editkategori($id='')
    {
		if($this->session->userdata('role')=='1'){
        $data = array(
            'id'    => $id,
            'title' => 'Ubah Jabatan : '
        );
        $this->load->view('assets/atas');
        $this->load->view('assets/ubahkategori',$data);
        $this->load->view('assets/bawah');
		}
    }

    public function updatekategori($id)
    {

        $tmp = $_POST['tmp'];
        $this->db->query("UPDATE kategori SET nmkat='$tmp' WHERE idkat='$id'");
        $this->session->set_flashdata('msg', 'info');
        redirect("admin/kategori/$id");
    }

    public function hapuskategori($id='')
    {
        $this->db->query("delete from kategori where idkat='$id'");
        $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/kategori','refresh');
    }

    public function berita()
    {
        if($this->session->userdata('role') == '1') {
            $data['title'] = 'Berita';
            
            $limit = 10; // Number of articles per page
            $offset = $this->input->get('offset') ? $this->input->get('offset') : 0;
            
            $this->db->limit($limit, $offset);
            $this->db->select('berita.*, user.nama, kategori.nmkat');
            $this->db->from('berita');
            $this->db->join('user', 'user.id_user = berita.id_user');
            $this->db->join('kategori', 'kategori.idkat = berita.idkat', 'left');
            $this->db->order_by('berita.id_berita', 'desc');
            $query = $this->db->get();
            
            $data['articles'] = $query->result();
            
            // Get total number of articles
            $total_articles = $this->db->count_all('berita');
            
            // Pagination configuration
            $this->load->library('pagination');
            $config['base_url'] = site_url('admin/berita');
            $config['total_rows'] = $total_articles;
            $config['per_page'] = $limit;
            $config['page_query_string'] = TRUE;
            $config['query_string_segment'] = 'offset';
            $this->pagination->initialize($config);
            
            $data['pagination'] = $this->pagination->create_links();
            
            $this->load->view('assets/atas');
            $this->load->view('assets/berita', $data);
            $this->load->view('assets/bawah');
        }
    }


    public function addberita()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Tambah Berita';
        $this->load->view('assets/atas');
        $this->load->view('assets/addberita',$data);
        $this->load->view('assets/bawah');
		}
    }
	
    public function editberita($id='')
{
    if ($this->session->userdata('role') == '1') {
        // Fetch the selected category ID for the given record ID
        $this->db->select('idkat');
        $this->db->from('berita'); // Make sure to replace 'berita' with your actual table name
        $this->db->where('id_berita', $id); // Replace 'id' with the correct column name
        $query = $this->db->get();
        $current_record = $query->row();
        $selected_kat = $current_record ? $current_record->idkat : '';

        // Fetch all categories
        $categories_query = $this->db->get('kategori');

        // Prepare data for the view
        $data['id'] = $id;
        $data['title'] = 'Edit Berita';
        $data['selected_kat'] = $selected_kat;
        $data['categories'] = $categories_query->result();

        $this->load->view('assets/atas');
        $this->load->view('assets/editberita', $data);
        $this->load->view('assets/bawah');
    }
}

public function saveberita()
{
    $judul = htmlspecialchars($_POST['judul'], ENT_QUOTES);
    $user = $this->session->userdata('id');
    $keyword = htmlspecialchars($_POST['keyword'], ENT_QUOTES);
    $isi = htmlspecialchars($_POST['isi'], ENT_QUOTES);
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];
    $kat = $_POST['kat'];

    // Upload images
    $gambar_fields = ['gambar', 'gambar2', 'gambar3', 'gambar4', 'gambar5'];
    $gambar_paths = [];

    foreach ($gambar_fields as $field) {
        $gambar_paths[$field] = $this->upload_gambar($field);
    }

    // Insert into berita
    $this->db->query(
        "INSERT INTO berita VALUES ('', '$judul', '$user', '{$gambar_paths['gambar']}', '{$gambar_paths['gambar2']}', '{$gambar_paths['gambar3']}', '{$gambar_paths['gambar4']}', '{$gambar_paths['gambar5']}', '$keyword', '$isi', '$tanggal', '$status', '$kat')"
    );

// Insert into galeri
foreach ($gambar_paths as $gambar) {
    if (!empty($gambar)) { // Check if $gambar has a value
        $this->insert_galeri($judul, $gambar, $status, $tanggal);
    }
}


    $this->session->set_flashdata('msg', 'success');
    redirect('admin/berita', 'refresh');
}

public function upload_gambar($field_name)
{
    $config['upload_path'] = './gambar/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['max_size'] = '5000000';
    $config['encrypt_name'] = TRUE;
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload($field_name)) {
        return '';
    } else {
        $gbr = $this->upload->data();
        // Compress Image
        $config['image_library'] = 'gd2';
        $config['source_image'] = './gambar/' . $gbr['file_name'];
        $config['new_image'] = './gambar/thumb/' . $gbr['file_name'];
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['quality'] = '85%';
        $config['width'] = 710;
        $config['height'] = 460;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        return $gbr['file_name'];
    }
}

public function insert_galeri($judul, $gambar, $status, $tanggal)
{
    if ($gambar != '') {
        $this->db->query("INSERT INTO galeri VALUES ('', '$judul', '$gambar', '$status', '$tanggal')");
    }
}


public function hapusberita($id = '')
{
    $wo = $this->db->query("SELECT * FROM berita WHERE id_berita = '$id'");
    $row = $wo->row();
    
    if ($row) {
        // Define paths for the images
        $images = [
            './gambar/' . $row->gambar,
            './gambar/' . $row->gambar2,
            './gambar/' . $row->gambar3,
            './gambar/' . $row->gambar4,
            './gambar/' . $row->gambar5,
            './gambar/thumb/' . pathinfo("./gambar/$row->gambar", PATHINFO_FILENAME) . "_thumb.jpg"
        ];

        // Loop through each image path and check if it's a file before attempting to delete
        foreach ($images as $image) {
            if (is_file($image)) {  // Check if the path is a file
                unlink($image);     // Delete the file
            }
        }

        // Delete from galeri where judul matches
        $this->db->query("DELETE FROM galeri WHERE judul = '{$row->judul}'");

        // Delete the record from the berita table
        $this->db->query("DELETE FROM berita WHERE id_berita = '$id'");
        
        $this->session->set_flashdata('msg', 'success-hapus');
    } else {
        $this->session->set_flashdata('msg', 'error-not-found');
    }
    
    redirect('admin/berita');
}



    public function updateberita($id='')
    {
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']  = '500000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if(!empty($_FILES['gambar']['name'])){ 
            $judul = $_POST['judul'];
            $user = $this->session->userdata('id');
            $gambar = $this->upload_gambar1();
            $gambar2 = $this->upload_gambar2();
            $gambar3 = $this->upload_gambar3();
            $gambar4 = $this->upload_gambar4();
            $gambar5 = $this->upload_gambar5();
            
            $keyword = $_POST['keyword'];
            $isi = $_POST['isi'];
            $tanggal = $_POST['tanggal'];
            $status = $_POST['status'];
            $kat = $_POST['kat'];

            $wo = $this->db->query("select * from berita where id_berita='$id'");
            $row = $wo->row();
            $id = $row->id_berita;
            $path_part = pathinfo("./gambar/".$row->gambar);
            $path_part = pathinfo("./gambar/".$row->gambar2);
            $path_part = pathinfo("./gambar/".$row->gambar3);
            $path_part = pathinfo("./gambar/".$row->gambar4);
            $path_part = pathinfo("./gambar/".$row->gambar5);
            
            $lok = $path_part['filename'];
            $s = $lok."_thumb.jpg";
            unlink('./gambar/'.$row->gambar);
            unlink('./gambar/'.$row->gambar2);
            unlink('./gambar/'.$row->gambar3);
            unlink('./gambar/'.$row->gambar4);
            unlink('./gambar/'.$row->gambar5);
            unlink('./gambar/thumb/'.$s);
            $this->db->query("update berita set judul='$judul',gambar='$gambar',gambar2='$gambar2',gambar3='$gambar3',gambar4='$gambar4',gambar5='$gambar5',keyword='$keyword',tanggal_post='$tanggal',isi='$isi',status_berita='$status',idkat='$kat' where id_berita='$id' ");
            $this->session->set_flashdata('msg', 'info');
            redirect('admin/berita');
        
        
			
        } else {
            $judul = $_POST['judul'];
            $keyword = $_POST['keyword'];
			$tanggal = $_POST['tanggal'];
            $isi = $_POST['isi'];
            $status = $_POST['status'];
            $kat = $_POST['kat'];
            $this->db->query("update berita set judul='$judul',keyword='$keyword',tanggal_post='$tanggal',isi='$isi',status_berita='$status',idkat='$kat' where id_berita='$id' ");
            $this->session->set_flashdata('msg', 'info');
            redirect('admin/berita');
        }
    }

    public function struktural()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Data Struktural';
        $this->load->view('assets/atas');
        $this->load->view('assets/struktural',$data);
        $this->load->view('assets/bawah');
		}
    }
	
	public function addstruktural()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Tambah Pegawai';
        $this->load->view('assets/atas');
        $this->load->view('assets/addstruktural',$data);
        $this->load->view('assets/bawah');
		}
    }
	
    public function editstruktural($idstruktural='')
    {
		if($this->session->userdata('role')=='1'){
        $data['idstruktural'] = $idstruktural;
        $data['title'] = 'Edit struktural';
        $this->load->view('assets/atas');
        $this->load->view('assets/editstruktural',$data);
        $this->load->view('assets/bawah');
		}
    }
	
    public function savestruktural()
    {
        
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']  = '500000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')){
            $this->session->set_flashdata('msg', 'error');
            redirect('admin/struktural','refresh');
        }
        else{
           
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library']    ='gd2';
            $config['source_image']     ='./gambar/'.$gbr['file_name'];
            $config['new_image']        = './gambar/thumb/'.$gbr['file_name'];
            $config['create_thumb']     = TRUE;
            $config['maintain_ratio']   = TRUE;
            $config['quality']          = '60%';
            $config['width']            = 710;
            $config['height']           = 460;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $nip = $_POST['nip'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $tempatlahir = $_POST['tempatlahir'];
            $tanggal = $_POST['tanggal'];
            $idjabatan = $_POST['idjabatan'];
            $pendakhir = $_POST['pendakhir'];
            $gol = $_POST['gol'];
            $gambar = $gbr['file_name'];
            $this->db->query("insert into struktural values('','$nip','$nama','$jk','$tempatlahir','$tanggal','$idjabatan','$pendakhir','$gol','$gambar')");
            $this->session->set_flashdata('msg', 'success');
            redirect('admin/struktural','refresh');
        } 
    }

    public function updatestruktural($id='')
    {
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']  = '500000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if(!empty($_FILES['gambar']['name'])){
        if ( ! $this->upload->do_upload('gambar')){
                $this->session->set_flashdata('msg', 'error');
                redirect('main/blog');
        } else {
            $gbr = $this->upload->data();
            $nip = $_POST['nip'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $tempatlahir = $_POST['tempatlahir'];
            $tanggal = $_POST['tanggal'];
            $idjabatan = $_POST['idjabatan'];
            $pendakhir = $_POST['pendakhir'];
            $gol = $_POST['gol'];
            $gambar = $gbr['file_name'];
            //Compress Image
            $config['image_library']    ='gd2';
            $config['source_image']     ='./gambar/'.$gbr['file_name'];
            $config['new_image']        = './gambar/thumb/'.$gbr['file_name'];
            $config['create_thumb']     = TRUE;
            $config['maintain_ratio']   = TRUE;
            $config['quality']          = '50%';
            $config['width']            = 710;
            $config['height']           = 460;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            
            $wo = $this->db->query("select * from struktural where id_struktural='$id'");
            $row = $wo->row();
            $id = $row->id_struktural;
            $path_part = pathinfo("./gambar/".$row->foto);
            $lok = $path_part['filename'];
            $s = $lok."_thumb.jpg";
            unlink('./gambar/'.$row->foto);
            unlink('./gambar/thumb/'.$s);
            $this->db->query("update struktural set nip='$nip',nama='$nama',jk='$jk',tempat_lahir='$tempatlahir',tanggal_lahir='$tanggal',id_jabatan='$idjabatan',pendakhir='$pendakhir',gol='$gol',foto='$gambar' where id_struktural='$id'");
            $this->session->set_flashdata('msg', 'info');
            redirect('admin/struktural');
        }} else {
            $nip = $_POST['nip'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $tempatlahir = $_POST['tempatlahir'];
            $tanggal = $_POST['tanggal'];
            $idjabatan = $_POST['idjabatan'];
            $pendakhir = $_POST['pendakhir'];
            $gol = $_POST['gol'];
            $this->db->query("update struktural set nip='$nip',nama='$nama',jk='$jk',tempat_lahir='$tempatlahir',tanggal_lahir='$tanggal',id_jabatan='$idjabatan',pendakhir='$pendakhir',gol='$gol' where id_struktural='$id'");
            $this->session->set_flashdata('msg', 'info');
            redirect('admin/struktural');
        }
    }
	
    public function hapusstruktural($id='')
    {
        $wo = $this->db->query("select * from struktural where id_struktural='$id'");
        $row = $wo->row();
        $path_part = pathinfo("./gambar/$row->foto");
        $lok = $path_part['filename'];
        $s = $lok."_thumb.jpg";
        unlink('./gambar/'.$row->foto);
        unlink('./gambar/thumb/'.$s);
        $this->db->query("delete from struktural where id_struktural='$id'");
        $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/struktural');
    }	
	
    public function datauser()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Manajemen Akun Pengguna';
        $this->load->view('assets/atas');
        $this->load->view('assets/datauser',$data);
        $this->load->view('assets/bawah');
		}
    }

	public function adduser()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Tambah User';
        $this->load->view('assets/atas');
        $this->load->view('assets/adduser',$data);
        $this->load->view('assets/bawah');
		}
    }

    public function edituser($iduser='')
    {
		if($this->session->userdata('role')=='1'){
        $data['iduser'] = $iduser;
        $data['title'] = 'Edit User';
        $this->load->view('assets/atas');
        $this->load->view('assets/edituser',$data);
        $this->load->view('assets/bawah');
		}
    }
	
    public function saveuser()
    {
 
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);			
            $level = $_POST['level'];
            $this->db->query("insert into user values('','$nama','$username','$password','$level')");
            $this->session->set_flashdata('msg', 'success');
            redirect('admin/datauser','refresh');
         
    }	

	public function updateuser($iduser)
    {

        $nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = $_POST['level'];
		if (empty($password)) {
		$this->db->query("UPDATE user SET nama='$nama', username='$username', level='$level' WHERE id_user='$iduser'");
		$this->session->set_flashdata('msg', 'info');
		}
		else{
		$password=md5($password);	
        $this->db->query("UPDATE user SET nama='$nama', username='$username', password='$password', level='$level' WHERE id_user='$iduser'");
        $this->session->set_flashdata('msg', 'info');
		}
        redirect("admin/datauser");
    }

	
    public function hapususer($id='')
    {
 
        $this->db->query("delete from user where id_user='$id'");
        $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/datauser','refresh');
         
    }


	
	public function jabatan()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Data Jabatan';
        $this->load->view('assets/atas');
        $this->load->view('assets/jabatan',$data);
        $this->load->view('assets/bawah');
		}
    }

    public function addjabatan()
    {
        $data['title'] = 'Tambah Jabatan';
        $this->load->view('assets/atas');
        $this->load->view('assets/addjabatan',$data);
        $this->load->view('assets/bawah');
    }

	
    public function savejabatan()
    {
        $a = $_POST['a'];
        if($this->db->query("insert into jabatan values('','$a')")){
            $this->session->set_flashdata('msg', 'success');
            redirect('admin/jabatan','refresh');
        }else{
            $this->session->set_flashdata('msg', 'error');
            redirect('admin/jabatan','refresh');
        }
    }

    public function editjabatan($id='')
    {
        $data = array(
            'id'    => $id,
            'title' => 'Ubah Jabatan : '
        );
        $this->load->view('assets/atas');
        $this->load->view('assets/ubahjabatan',$data);
        $this->load->view('assets/bawah');
    }

    public function updatejabatan($id)
    {

        $tmp = $_POST['tmp'];
        $this->db->query("UPDATE jabatan SET namajabatan='$tmp' WHERE id_jabatan='$id'");
        $this->session->set_flashdata('msg', 'info');
        redirect("admin/editjabatan/$id");
    }
	
    public function hapusjabatan($id='')
    {
        $this->db->query("delete from jabatan where id_jabatan='$id'");
        $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/jabatan','refresh');
    }


    public function slider()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Data Video Landing (Ukuran Video Wajib 2000 x 793 pixel, tipe file mp4)';
        $this->load->view('assets/atas');
        $this->load->view('assets/slider',$data);
        $this->load->view('assets/bawah');
		}
    }

//     public function addslider()
//     {
// 		if($this->session->userdata('role')=='1'){
//         $data['title'] = 'Tambah Slider';
//         $this->load->view('assets/atas');
//         $this->load->view('assets/addslider',$data);
//         $this->load->view('assets/bawah');
// 		}
//     }

    public function editslider($id_slider='')
    {
		if($this->session->userdata('role')=='1'){
        $data['id_slider'] = $id_slider;
        $data['title'] = 'Edit Video Landing';
        $this->load->view('assets/atas');
        $this->load->view('assets/editslider',$data);
        $this->load->view('assets/bawah');
		}
    }
	
    public function saveslider()
    {
        
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'jpg|jpeg';
        $config['max_size']  = '5000';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')){
            $this->session->set_flashdata('msg', 'error');
            redirect('admin/slider','refresh');
        }
        else{
           
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library']    ='gd2';
            $config['source_image']     ='./gambar/'.$gbr['file_name'];
            $config['new_image']        = './gambar/thumb/'.$gbr['file_name'];
            $config['create_thumb']     = TRUE;
            $config['maintain_ratio']   = TRUE;
            $config['quality']          = '100%';
            $config['width']            = 2000;
            $config['height']           = 783;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $gambar = $gbr['file_name'];
            $this->db->query("insert into slider values('','$gambar')");
            $this->session->set_flashdata('msg', 'success');
            redirect('admin/slider','refresh');
        } 
    }


    public function updateslider($id='')
{
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'jpg|jpeg|mp4';
        $config['max_size']  = '50000000000';
        $this->load->library('upload', $config);
        if(!empty($_FILES['gambar']['name'])){
        if ( ! $this->upload->do_upload('gambar')){
                $this->session->set_flashdata('msg', 'error');
                redirect('admin/slider');
        } else {
			
            $gbr = $this->upload->data();
            $gambar = $gbr['file_name'];
            //Compress Image
        //    $config['image_library']    ='gd2';
          //  $config['source_image']     ='./gambar/'.$gbr['file_name'];
        //    $config['new_image']        = './gambar/thumb/'.$gbr['file_name'];
          //  $config['create_thumb']     = TRUE;
        //    $config['maintain_ratio']   = TRUE;
          //  $config['quality']          = '100%';
           // $config['width']            = 2000;
          // $config['height']           = 783;
			$config['overwrite'] = TRUE;
            $this->load->library('image_lib', $config);
            //$this->image_lib->resize();
            
            $wo = $this->db->query("select * from slider where id_slider='$id'");
            $row = $wo->row();
            $id = $row->id_slider;
            $path_part = pathinfo("./gambar/".$row->foto);
            $lok = $path_part['filename'];
          //  $s = $lok."_thumb.jpg";
            unlink('./gambar/'.$row->foto);
         //   unlink('./gambar/thumb/'.$s);
            $this->db->query("update slider set foto='$gambar' where id_slider='$id'");
            $this->session->set_flashdata('msg', 'info');
            redirect('admin/slider');
			}
		} 
    }
	
    // public function hapusslider($id='')
    // {
    //     $wo = $this->db->query("select * from slider where id_slider='$id'");
    //     $row = $wo->row();
    //     $path_part = pathinfo("./gambar/$row->foto");
    //     $lok = $path_part['filename'];
    //     $s = $lok."_thumb.jpg";
    //     unlink('./gambar/'.$row->foto);
    //     unlink('./gambar/thumb/'.$s);
    //     $this->db->query("delete from slider where id_slider='$id'");
    //     $this->session->set_flashdata('msg', 'success-hapus');
    //     redirect('admin/slider');
    // }
    public function sambutan()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Data Sambutan ';
        $this->load->view('assets/atas');
        $this->load->view('assets/sambutan',$data);
        $this->load->view('assets/bawah');
		}
    }

    public function addsambutan()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Tambah Sambutan';
        $this->load->view('assets/atas');
        $this->load->view('assets/addsambutan',$data);
        $this->load->view('assets/bawah');
		}
    }

    public function editsambutan($id_sambutan='')
    {
		if($this->session->userdata('role')=='1'){
        $data['id_sambutan'] = $id_sambutan;
        $data['title'] = 'Edit Sambutan';
        $this->load->view('assets/atas');
        $this->load->view('assets/editsambutan',$data);
        $this->load->view('assets/bawah');
		}
    }
	
    public function savesambutan()
    {
        
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'jpg|jpeg';
        $config['max_size']  = '500000';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')){
            $this->session->set_flashdata('msg', 'error');
            redirect('admin/sambutan','refresh');
        }
        else{
           
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library']    ='gd2';
            $config['source_image']     ='./gambar/'.$gbr['file_name'];
            $config['new_image']        = './gambar/thumb/'.$gbr['file_name'];
            $config['create_thumb']     = TRUE;
            $config['maintain_ratio']   = TRUE;
            $config['quality']          = '100%';
            $config['width']            = 2000;
            $config['height']           = 783;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
			$judul = $_POST['judul'];
			$deskripsi = $_POST['deskripsi'];
            $gambar = $gbr['file_name'];
            $this->db->query("insert into sambutan values('','$judul','$deskripsi','$gambar')");
            $this->session->set_flashdata('msg', 'success');
            redirect('admin/sambutan','refresh');
        } 
    }

    public function updatesambutan($id='')
    {
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']  = '500000';
        $this->load->library('upload', $config);
        if(!empty($_FILES['gambar']['name'])){
        if ( ! $this->upload->do_upload('gambar')){
                $this->session->set_flashdata('msg', 'error');
                redirect('admin/sambutan');
        } else {
            $gbr = $this->upload->data();
			$gambar = $gbr['file_name'];
            $judul = $_POST['judul'];
			$deskripsi = $_POST['deskripsi'];
            $user = $this->session->userdata('id');
;
            //Compress Image
            $config['image_library']    ='gd2';
            $config['source_image']     ='./gambar/'.$gbr['file_name'];
            $config['new_image']        = './gambar/thumb/'.$gbr['file_name'];
            $config['create_thumb']     = TRUE;
            $config['maintain_ratio']   = TRUE;
            $config['quality']          = '100%';
            $config['width']            = 710;
            $config['height']           = 460;
			$config['overwrite'] = TRUE;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            
            $wo = $this->db->query("select * from sambutan where id_sambutan='$id'");
            $row = $wo->row();
            $id = $row->id_sambutan;
            $path_part = pathinfo("./gambar/".$row->gambar);
            $lok = $path_part['filename'];
            $s = $lok."_thumb.jpg";
            unlink('./gambar/'.$row->gambar);
            unlink('./gambar/thumb/'.$s);
            $this->db->query("update sambutan set judul='$judul',deskripsi='$deskripsi',foto='$gambar' where id_sambutan='$id' ");
            $this->session->set_flashdata('msg', 'info');
            redirect('admin/sambutan');
        }
	}
		else {
            $judul = $_POST['judul'];
            $deskripsi = $_POST['deskripsi'];
            $this->db->query("update sambutan set judul='$judul',deskripsi='$deskripsi' where id_sambutan='$id' ");
            $this->session->set_flashdata('msg', 'info');
            redirect('admin/sambutan');
        }
    }

 
	
    public function hapussambutan($id='')
    {
        $wo = $this->db->query("select * from sambutan where id_sambutan='$id'");
        $row = $wo->row();
        $path_part = pathinfo("./gambar/$row->foto");
        $lok = $path_part['filename'];
        $s = $lok."_thumb.jpg";
        unlink('./gambar/'.$row->foto);
        unlink('./gambar/thumb/'.$s);
        $this->db->query("delete from sambutan where id_sambutan='$id'");
        $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/sambutan');
    }
	   


	   
    public function galeri()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Galeri';
        $this->load->view('assets/atas');
        $this->load->view('assets/galeri',$data);
        $this->load->view('assets/bawah');
		}
    }
    public function addgaleri()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Galeri';
        $this->load->view('assets/atas');
        $this->load->view('assets/addgaleri',$data);
        $this->load->view('assets/bawah');
		}
    }

    public function editgaleri($id='')
    {
		if($this->session->userdata('role')=='1'){
        $data['id'] = $id;
        $data['title'] = 'Galeri';
        $this->load->view('assets/atas');
        $this->load->view('assets/editgaleri',$data);
        $this->load->view('assets/bawah');
		}
    }

    public function savegaleri()
    {
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']  = '500000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar')){
            $this->session->set_flashdata('msg', 'error');
            redirect('admin/galeri','refresh');
        }
        else{
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library']    ='gd2';
            $config['source_image']     ='./gambar/'.$gbr['file_name'];
            $config['new_image']        = './gambar/thumb/'.$gbr['file_name'];
            $config['create_thumb']     = TRUE;
            $config['maintain_ratio']   = TRUE;
            $config['quality']          = '70%';
            $config['width']            = 710;
            $config['height']           = 460;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $judul = $_POST['judul'];
            $gambar = $gbr['file_name'];
            $status = $_POST['status'];
            $tanggal = $_POST['tanggal'];
            $this->db->query("insert into galeri values('','$judul','$gambar','$status','$tanggal')");
            $this->session->set_flashdata('msg', 'success');
            redirect('admin/galeri','refresh');
        } 
    }

    public function updategaleri($id='')
    {
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']  = '500000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if(!empty($_FILES['gambar']['name'])){
        if ( ! $this->upload->do_upload('gambar')){
                $this->session->set_flashdata('msg', 'error');
                redirect('admin/galeri');
        } else {
            $gbr = $this->upload->data();
            $judul = $_POST['judul'];
            // $gambar = $gbr['file_name'];
            $status = $_POST['status'];
			$tanggal = $_POST['tanggal'];
            $gambar = $gbr['file_name'];
            //Compress Image
            $config['image_library']    ='gd2';
            $config['source_image']     ='./gambar/'.$gbr['file_name'];
            $config['new_image']        = './gambar/thumb/'.$gbr['file_name'];
            $config['create_thumb']     = TRUE;
            $config['maintain_ratio']   = TRUE;
            $config['quality']          = '100%';
            $config['width']            = 710;
            $config['height']           = 460;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            
            $wo = $this->db->query("select * from galeri where id_galeri='$id'");
            $row = $wo->row();
            $id = $row->id_galeri;
            $path_part = pathinfo("./gambar/".$row->gambar);
            $lok = $path_part['filename'];
            $s = $lok."_thumb.jpg";
            unlink('./gambar/'.$row->gambar);
            unlink('./gambar/thumb/'.$s);
            $this->db->query("update galeri set judul='$judul',gambar='$gambar',tanggal='$tanggal',status='$status' where id_galeri='$id' ");
            $this->session->set_flashdata('msg', 'info');
            redirect('admin/galeri');
        }} else {
            $judul = $_POST['judul'];
            $status = $_POST['status'];
			$tanggal = $_POST['tanggal'];
            $this->db->query("update galeri set judul='$judul',status='$status',tanggal='$tanggal' where id_galeri='$id' ");
            $this->session->set_flashdata('msg', 'info');
            redirect('admin/galeri');
        }
    }
     
    public function hapusgaleri($id = '')
    {
        $wo = $this->db->query("SELECT * FROM galeri WHERE id_galeri = '$id'");
        $row = $wo->row();
    
        if ($row) {
            // Define paths for the image and its thumbnail
            $imagePath = './gambar/' . $row->gambar;
            $thumbPath = './gambar/thumb/' . pathinfo($imagePath, PATHINFO_FILENAME) . '_thumb.jpg';
    
            // Check if image file exists before trying to delete
            if (is_file($imagePath)) {
                unlink($imagePath);
            }
    
            // Check if thumbnail file exists before trying to delete
            if (is_file($thumbPath)) {
                unlink($thumbPath);
            }
    
            // Delete the record from the database
            $this->db->query("DELETE FROM galeri WHERE id_galeri = '$id'");
            $this->session->set_flashdata('msg', 'success-hapus');
        } else {
            $this->session->set_flashdata('msg', 'error-not-found');
        }
    
        redirect('admin/galeri');
    }

    
    public function download()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Download';
        $this->load->view('assets/atas');
        $this->load->view('assets/download',$data);
        $this->load->view('assets/bawah');
		}
    }

    public function adddownload()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Tambah Download';
        $this->load->view('assets/atas');
        $this->load->view('assets/adddownload',$data);
        $this->load->view('assets/bawah');
		}
    }

    public function savedownload()
    {
        $config['upload_path'] = './file/';
        $config['allowed_types'] = 'xls|pdf|docx|doc|xlsx';
        $config['max_size']  = '5000000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('file')){
            $this->session->set_flashdata('msg', 'error');
            redirect('admin/adddownload','refresh');
        }
        else{
            $file = $this->upload->data();
            $judul = $_POST['judul'];
            $sd = $file['file_name'];
            $this->db->query("insert into download values('','$judul','$sd')");
            $this->session->set_flashdata('msg', 'success');
            redirect('admin/download','refresh');
        } 
    }

    public function hapusdownload($id)
    {
        $q = $this->db->query("select * from download where id_download='$id'");
        $row = $q->row();
        $this->db->query("delete from download where id_download='$id'");
        unlink('./file/'.$row->file);
        $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/download');
    }
	
	public function pengumuman()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Pengumuman';
        $this->load->view('assets/atas');
        $this->load->view('assets/pengumuman',$data);
        $this->load->view('assets/bawah');
		}
    }

    public function addpengumuman()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Tambah Pengumuman';
        $this->load->view('assets/atas');
        $this->load->view('assets/addpengumuman',$data);
        $this->load->view('assets/bawah');
		}
    }

    public function savepengumuman()
    {
        $config['upload_path'] = './file/';
        $config['allowed_types'] = 'xls|pdf|docx|doc|xlsx';
        $config['max_size']  = '50000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('file')){
            $this->session->set_flashdata('msg', 'error');
            redirect('admin/addpengumuman','refresh');
        }
        else{
            $file = $this->upload->data();
            $judul = $_POST['judul'];
            $sd = $file['file_name'];
            $this->db->query("insert into pengumuman values('','$judul','$sd')");
            $this->session->set_flashdata('msg', 'success');
            redirect('admin/pengumuman','refresh');
        } 
    }
	
	public function updatepengumuman($id='')
    {
        $config['upload_path'] = './file/';
        $config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|xls|xlsx';
        $config['max_size']  = '500000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if(!empty($_FILES['gambar']['name'])){
        if ( ! $this->upload->do_upload('gambar')){
                $this->session->set_flashdata('msg', 'error');
                redirect('main/blog');
        } else {
            $gbr = $this->upload->data();
            $judul = $_POST['judul'];
			$user = $this->session->userdata('id');
            // $gambar = $gbr['file_name'];
         //   $status = $_POST['status'];
            $gambar = $gbr['file_name'];
            //Compress Image
            //$config['image_library']    ='gd2';
           // $config['source_image']     ='./gambar/'.$gbr['file_name'];
         //   $config['new_image']        = './gambar/thumb/'.$gbr['file_name'];
           // $config['create_thumb']     = TRUE;
          //  $config['maintain_ratio']   = TRUE;
          //  $config['quality']          = '50%';
          //  $config['width']            = 710;
          //  $config['height']           = 460;
          //  $this->load->library('image_lib', $config);
          //  $this->image_lib->resize();
            
            $wo = $this->db->query("select * from pengumuman where id_pengumuman='$id'");
            $row = $wo->row();
            $id = $row->id_pengumuman;
          //  $path_part = pathinfo("./file/".$row->gambar);
      //      $lok = $path_part['filename'];
        //   $s = $lok."_thumb.jpg";
        //   unlink('./file/'.$row->gambar);
        //   unlink('./file/thumb/'.$s);
            $this->db->query("update pengumuman set judul='$judul',file='$gambar' where id_pengumuman='$id' ");
            $this->session->set_flashdata('msg', 'info');
            redirect('admin/pengumuman');
        }} else {
            $judul = $_POST['judul'];
           // $status = $_POST['status'];
            $this->db->query("update pengumuman set judul='$judul' where id_pengumuman='$id' ");
            $this->session->set_flashdata('msg', 'info');
            redirect('admin/pengumuman');
        }
    }
	
	public function editpengumuman($id='')
    {
		if($this->session->userdata('role')=='1'){
        $data['id'] = $id;
        $data['title'] = 'Ubah Pengumuman ';
        $this->load->view('assets/atas');
        $this->load->view('assets/editpengumuman',$data);
        $this->load->view('assets/bawah');
		}
    }

    public function hapuspengumuman($id)
    {
        $q = $this->db->query("select * from pengumuman where id_pengumuman='$id'");
        $row = $q->row();
        $this->db->query("delete from pengumuman where id_pengumuman='$id'");
        unlink('./file/'.$row->file);
        $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/pengumuman');
    }

    public function pesan()
    {
		if($this->session->userdata('role')=='1'){
        $data['title'] = 'Pesan Masuk';
        $this->load->view('assets/atas');
        $this->load->view('assets/pesan',$data);
        $this->load->view('assets/bawah');
		}
    }

    public function hapuskomentar($id='')
    {
        $this->db->query("delete from komentar where id_komentar='$id'");
        $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/pesan','refresh');
    }

}

/* End of file  */
