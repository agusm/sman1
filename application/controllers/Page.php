<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('m_artikel','m_menu','m_pengguna','m_gallery','m_slider','m_sekolah'));
    }

    function index(){
        $data['show_slider'] = $this->m_slider->get_all();
        $data['show_artikel'] = $this->m_artikel->get_limit(array('tbl_artikel.kd_kategori'=>1),3);
        $data['show_info'] = $this->m_artikel->get_limit(array('tbl_artikel.kd_kategori'=>2),4);
        $data['show_kegiatan'] = $this->m_artikel->get_limit(array('tbl_artikel.kd_kategori'=>3),3);
        $data['show_gallery'] = $this->m_gallery->get_limit();
        $data['content'] = 'user/content';
        $this->load->view('user/home',$data);
    }

    function gallery(){
        $data['show_gallery'] = $this->m_gallery->get_all();
        $data['content'] = 'user/gallery';
        $this->load->view('user/home',$data);
    }

    function news(){
        $data['content'] = 'user/news';
        $this->load->view('user/home',$data);
    }

    function contact_us(){
        $data['content'] = 'user/contact_us';
        $this->load->view('user/home',$data);
    }
}
