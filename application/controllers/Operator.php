<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect('login');
        }
        $this->load->library(array('upload','form_validation'));
        $this->load->model(array('m_artikel','m_menu','m_pengguna','m_gallery','m_slider'));
    }

    function index(){
        $data['total_artikel'] = $this->m_artikel->get(array('tbl_artikel.kd_kategori'=>1))->num_rows();
        $data['total_info'] = $this->m_artikel->get(array('tbl_artikel.kd_kategori'=>2))->num_rows();
        $data['total_kegiatan'] = $this->m_artikel->get(array('tbl_artikel.kd_kategori'=>3))->num_rows();
        $data['total_gallery'] = $this->m_gallery->get_all()->num_rows();
        $data['content'] = 'admin/home';
        $this->load->view('admin/main_view',$data);
    }

    function sekolah(){
        $this->load->model('m_sekolah');
        $data['show_sekolah'] = $this->m_sekolah->get();
        $data['content'] = 'admin/sekolah/ubah_sekolah';
        $this->load->view('admin/main_view',$data);
    }

    function proses_ubah_sekolah(){
        $this->load->model('m_sekolah');
        if ($this->m_sekolah->ubah()){
            echo "<script data-cfasync='false'>alert('Data berhasil diubah')</script>";
        } else{
            echo "<script data-cfasync='false'>alert('Data gagal diubah');</script>";
        }
        echo "<script data-cfasync='false'>history.go(-1)</script>";
    }

    function artikel(){
        $where = array('tbl_artikel.kd_kategori'=>1);
        $data['show_artikel'] = $this->m_artikel->get($where);
        $data['content'] = 'admin/artikel/artikel_view';
        $this->load->view('admin/main_view',$data);
    }

    function tambah_artikel(){
        $data['content'] = 'admin/artikel/tambah_artikel';
        $this->load->view('admin/main_view',$data);
    }

    function proses_tambah_artikel(){
    if (isset($_FILES['gambar']['name']) && !empty($_FILES['gambar']['name'])) {
        $config['upload_path'] = './uploads/gambar/';
        $config['allowed_types'] = 'jpg|jpeg|png|bmp';
        $config['max_size'] = '2048';
        $config['overwrite'] = TRUE;
        $config['file_name'] = url_title($this->input->post("judul"),"-",TRUE);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('gambar')){
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error',$error['error']);

            $this->tambah_artikel();

        } else {
            $datafiles = $this->upload->data();
            $data['upload_data']= $datafiles;
            if ($datafiles['file_name']){
                $files=$datafiles['file_name'];
            }

            $this->m_artikel->tambah($files);
            echo "<script data-cfasync='false'>alert('Data berhasil ditambahkan');history.go(-2)</script>";
        }
    }
}

    function ubah_artikel($kd, $slug){
        $where = array(
            'kd_artikel'=>$kd,
            'slug'=>$slug,
        );
        $data['show_artikel'] = $this->m_artikel->get_one($where);
        $data['content'] = 'admin/artikel/ubah_artikel';
        $this->load->view('admin/main_view',$data);
    }

    function proses_ubah_artikel(){
        $kd = $this->input->post('kd_artikel');
        $where = array(
            'kd_artikel'=>$kd
        );
        //jika gambar diubah
        if (isset($_FILES['gambar']['name']) && !empty($_FILES['gambar']['name'])) {
            $r = $this->m_artikel->get_one($where);
            foreach ($r->result() as $item) {
                $gambar = $item->gambar;
            }

            $config['upload_path'] = './uploads/gambar/';
            $config['allowed_types'] = 'jpg|jpeg|png|bmp';
            $config['max_size'] = '2048';
            $config['overwrite'] = TRUE;
            $config['file_name'] = url_title($this->input->post("judul"),"-",TRUE);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error',$error['error']);

                $this->ubah_artikel($this->input->post('kd_artikel'),url_title($this->input->post("judul"),"-",TRUE));
            }

            else{
                $datafiles = $this->upload->data();
                $data['upload_data']= $datafiles;
                if ($datafiles['file_name']){
                    $files=$datafiles['file_name'];
                }
                $this->m_artikel->ubah($kd,$files);
                echo "<script data-cfasync='false'>alert('Data berhasil diubah');history.go(-2)</script>";
            }
        }
        else{
            if($this->m_artikel->ubah_tanpa_gambar($kd))
                echo "<script data-cfasync='false'>alert('Data berhasil diubah');history.go(-2)</script>";
        }
    }

    function hapus_artikel($kd,$slug){
        $where = array(
            'kd_artikel'=>$kd,
            'slug'=>$slug
        );
        $data = $this->m_artikel->get_one($where);
        foreach ($data->result() as $item) {
            $gambar = $item->gambar;
        }
        if(file_exists("./uploads/gambar/".$gambar)){
            unlink("./uploads/gambar/".$gambar);
            $this->m_artikel->hapus($where);
            echo "<script data-cfasync='false'>history.go(-1)</script>";
        }
    }

    function kegiatan(){
        $where = array('tbl_artikel.kd_kategori'=>3);
        $data['show_kegiatan'] = $this->m_artikel->get($where);
        $data['content'] = 'admin/artikel/kegiatan_view';
        $this->load->view('admin/main_view',$data);
    }
    function tambah_kegiatan(){
        $data['content'] = 'admin/artikel/tambah_kegiatan';
        $this->load->view('admin/main_view',$data);
    }

    function info(){
        $where = array('tbl_artikel.kd_kategori'=>2);
        $data['show_artikel'] = $this->m_artikel->get($where);
        $data['content'] = 'admin/artikel/info_view';
        $this->load->view('admin/main_view',$data);
    }

    function tambah_info(){
        $data['content'] = 'admin/artikel/tambah_info';
        $this->load->view('admin/main_view',$data);
    }

    function ubah_info(){

    }

    function hapus_info(){

    }


    function pengguna(){
        $data['show_pengguna'] = $this->m_pengguna->get_all();
        $data['content'] = 'admin/pengguna/pengguna_view';
        $this->load->view('admin/main_view',$data);
    }

    function tambah_pengguna(){
        $data['content'] = 'admin/pengguna/tambah_pengguna';
        $this->load->view('admin/main_view',$data);
    }

    function proses_tambah_pengguna(){
        $this->load->library('form_validation');
        $config = array(
            array(
                'field' => 'nama_pengguna',
                'label' => 'Nama Pengguna',
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Minimal 5 Karakter',
                ),
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|is_unique[tbl_pengguna.email]',
                'errors' => array(
                    'is_unique' => 'Email Sudah Terdaftar',
        ),
            )
        );

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE)
        {
            $data['content'] = 'admin/pengguna/tambah_pengguna';
            $this->load->view('admin/main_view',$data);
        }
        else
        {
            $this->m_pengguna->tambah();
            echo "<script data-cfasync='false'>alert('Data berhasil ditambahkan');history.go(-2)</script>";
        }
    }

    function ubah_password($kd){
        $where = array('kd_pengguna'=>$kd);
        $data['show_pengguna'] = $this->m_pengguna->get_one($where);
        $data['content'] = 'admin/pengguna/ubah_password';
        $this->load->view('admin/main_view',$data);
    }

    function proses_ubah_password(){
        $where = array(
            'kd_pengguna'=>$this->input->post('kd_pengguna')
        );

        $pass = $this->m_pengguna->get_one($where)->row()->password;
        $old_password = $this->input->post('old_password');
        if (password_verify($old_password,$pass)){
            $this->m_pengguna->ubah_password($where);
            echo "<script data-cfasync='false'>alert('Password berhasil diubah');history.go(-2)</script>";
        } else{
            echo "<script data-cfasync='false'>alert('Password gagal diubah');history.go(-1)</script>";
        }

    }

    function ubah_pengguna($kd){
        $where = array(
            'kd_pengguna'=>$kd,
            'level'=>'operator'
        );
        $data['show_pengguna'] = $this->m_pengguna->get_one($where);
        $data['content'] = 'admin/pengguna/ubah_pengguna';
        $this->load->view('admin/main_view',$data);
    }

    function proses_ubah_pengguna(){
        $where = array(
            'kd_pengguna'=>$this->input->post('kd_pengguna'),
            'level'=>'operator'
        );
        $this->m_pengguna->ubah($where);
        echo "<script data-cfasync='false'>history.go(-2)</script>";
    }

    function hapus_pengguna($kd){
        $this->m_pengguna->hapus(array('kd_pengguna'=>$kd,'level'=>'operator'));
        echo "<script data-cfasync='false'>history.go(-1)</script>";
    }

    function gallery(){
        $data['show_gallery'] = $this->m_gallery->get_all();
        $data['content'] = 'admin/gallery/gallery_view';
        $this->load->view('admin/main_view',$data);
    }

    function tambah_gallery(){
        $data['content'] = 'admin/gallery/tambah_gambar';
        $this->load->view('admin/main_view',$data);
    }

    function proses_tambah_gambar(){
        if (isset($_FILES['gambar']['name']) && !empty($_FILES['gambar']['name'])) {
            $config['upload_path'] = './uploads/gallery/';
            $config['allowed_types'] = 'jpg|jpeg|png|bmp';
            $config['max_size'] = '2048';
            $config['overwrite'] = TRUE;
            $config['file_name'] = url_title($this->input->post("judul"),"-",TRUE);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error',$error['error']);

                $this->tambah_gallery();

            } else {
                $datafiles = $this->upload->data();
                $data['upload_data']= $datafiles;
                if ($datafiles['file_name']){
                    $files=$datafiles['file_name'];
                }

                $this->m_gallery->tambah($files);
                echo "<script data-cfasync='false'>alert('Data berhasil ditambahkan');history.go(-2)</script>";
            }
        }
    }

    function ubah_gambar($kd,$slug){
        $where = array(
            'kd_gambar' =>$kd,
            'slug' =>$slug
        );
        $data['show_gallery'] = $this->m_gallery->get($where);
        $data['content'] = 'admin/gallery/ubah_gambar';
        $this->load->view('admin/main_view',$data);
    }

    function proses_ubah_gambar(){
        $where = array(
            'kd_gambar'=>$this->input->post('kd_gambar')
        );
        $this->m_gallery->ubah($where);
        echo "<script data-cfasync='false'>alert('Judul berhasil diubah');history.go(-2)</script>";
    }

    function hapus_gambar($kd,$slug){
        $where = array(
            'kd_gambar'=>$kd,
            'slug'=>$slug
        );
        $data = $this->m_gallery->get($where);
        foreach ($data->result() as $item) {
            $gambar = $item->gambar;
        }
        if(file_exists("./uploads/gallery/".$gambar)){
            unlink("./uploads/gallery/".$gambar);
            $this->m_gallery->hapus($where);
            echo "<script data-cfasync='false'>history.go(-1)</script>";
        }

    }

    function slider(){
        $data['show_slider'] = $this->m_slider->get_all();
        $data['content'] = 'admin/slider/slider_view';
        $this->load->view('admin/main_view',$data);
    }

    function tambah_slider(){
        $data['content'] = 'admin/slider/tambah_slider';
        $this->load->view('admin/main_view',$data);
    }

    function ubah_slider($kd){
        $where = array(
            'kd_slider'=>$kd
        );
        $data['show_slider'] = $this->m_slider->get($where);
        $data['content'] = 'admin/slider/ubah_slider';
        $this->load->view('admin/main_view',$data);
    }

    function proses_tambah_slider(){
        if (isset($_FILES['gambar']['name']) && !empty($_FILES['gambar']['name'])) {
            $config['upload_path'] = './uploads/slider/';
            $config['allowed_types'] = 'jpg|jpeg|png|bmp';
            $config['max_size'] = '2048';
            $config['overwrite'] = TRUE;
            $config['file_name'] = url_title($this->input->post("judul"),"-",TRUE);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error',$error['error']);

                $this->tambah_slider();

            } else {
                $datafiles = $this->upload->data();
                $data['upload_data']= $datafiles;
                if ($datafiles['file_name']){
                    $files=$datafiles['file_name'];
                }

                $this->m_slider->tambah($files);
                echo "<script data-cfasync='false'>alert('Data berhasil ditambahkan');history.go(-2)</script>";
            }
        }
    }

    function proses_ubah_slider(){
        $kd = $this->input->post('kd_slider');
        $where = array(
            'kd_slider'=>$kd
        );
        //jika gambar diubah
        if (isset($_FILES['gambar']['name']) && !empty($_FILES['gambar']['name'])) {
            $r = $this->m_slider->get($where);
            foreach ($r->result() as $item) {
                $gambar = $item->gambar;
            }
            //hapus gambar sebelumnya
            if(file_exists("./uploads/slider/".$gambar)) {
                unlink("./uploads/slider/" . $gambar);
            }

            $config['upload_path'] = './uploads/slider/';
            $config['allowed_types'] = 'jpg|jpeg|png|bmp';
            $config['max_size'] = '2048';
            $config['overwrite'] = TRUE;
            $config['file_name'] = url_title($this->input->post("judul"),"-",TRUE);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error',$error['error']);

                $this->ubah_slider($this->input->post('kd_slider'));
            }
            else{
                $datafiles = $this->upload->data();
                $data['upload_data']= $datafiles;
                if ($datafiles['file_name']){
                    $files=$datafiles['file_name'];
                }
                $this->m_slider->ubah(array('kd_slider'=>$kd),$files);
                echo "<script data-cfasync='false'>alert('Data berhasil diubah');history.go(-2)</script>";
            }
        }
        else{
            if($this->m_slider->ubah(array('kd_slider'=>$kd),null))
                echo "<script data-cfasync='false'>alert('Data berhasil diubah');history.go(-2)</script>";
        }
    }

    function hapus_slider($kd){
        $where = array(
            'kd_slider'=>$kd
        );
        $data = $this->m_slider->get($where);
        foreach ($data->result() as $item) {
            $gambar = $item->gambar;
        }
        if(file_exists("./uploads/slider/".$gambar)){
            unlink("./uploads/slider/".$gambar);
            $this->m_slider->hapus($where);
            echo "<script data-cfasync='false'>history.go(-1)</script>";
        }
    }

    function menu(){
        $data['show_menu'] = $this->m_menu->get_all();
        $data['content'] = 'admin/menu/menu_view';
        $this->load->view('admin/main_view',$data);
    }

    function sub_menu(){
        $data['show_sub_menu'] = $this->m_menu->get_sub();
        $data['content'] = 'admin/menu/sub_menu_view';
        $this->load->view('admin/main_view',$data);
    }

    function tambah_menu(){
        $data['content'] = 'admin/menu/tambah_menu';
        $this->load->view('admin/main_view',$data);
    }

    function tambah_sub(){
        $data['show_menu'] = $this->m_menu->get_all();
        $data['content'] = 'admin/menu/tambah_sub_menu';
        $this->load->view('admin/main_view',$data);
    }

    function proses_tambah_menu(){
        $this->m_menu->tambah_menu();
        echo "<script data-cfasync='false'>window.location.assign('".site_url('operator/menu')."')</script>";
    }

    function proses_tambah_sub(){
        $this->m_menu->tambah_sub();
        echo "<script data-cfasync='false'>window.location.assign('".site_url('operator/sub_menu')."')</script>";
    }

    function ubah_menu($kd){
        $where = array(
            'kd_menu'=>$kd
        );
        $data['show_menu'] = $this->m_menu->get_one_menu($where);
        $data['content'] = 'admin/menu/ubah_menu';
        $this->load->view('admin/main_view',$data);
    }

    function proses_ubah_menu(){
        $where = array(
            'kd_menu'=>$this->input->post('kd_menu')
        );
        $this->m_menu->ubah_menu($where);
        echo "<script data-cfasync='false'>window.location.assign('".site_url('operator/menu')."')</script>";
    }

    function ubah_sub($kd){
        $data['show_menu'] = $this->m_menu->get_all();
        $where = array(
            'kd_sub_menu'=>$kd
        );
        $data['show_sub_menu'] = $this->m_menu->get_one_sub($where);
        $data['content'] = 'admin/menu/ubah_sub_menu';
        $this->load->view('admin/main_view',$data);
    }

    function proses_ubah_sub(){
        $where = array(
            'kd_sub_menu'=>$this->input->post('kd_sub_menu')
        );
        $this->m_menu->ubah_sub($where);
        echo "<script data-cfasync='false'>window.location.assign('".site_url('operator/sub_menu')."')</script>";
    }

    function hapus_menu($kd){
        $where = array(
            'kd_menu'=>$kd
        );
        $this->m_menu->hapus_menu($where);
        echo "<script data-cfasync='false'>window.location.assign('".site_url('operator/menu')."')</script>";
    }

    function hapus_sub($kd){
        $where = array(
            'kd_sub_menu'=>$kd
        );
        $this->m_menu->hapus_sub($where);
        echo "<script data-cfasync='false'>window.location.assign('".site_url('operator/sub_menu')."')</script>";
    }


    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}