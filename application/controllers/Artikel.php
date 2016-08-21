<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('m_artikel','m_menu','m_pengguna','m_gallery','m_sekolah'));
    }

    function index(){

    }

    function detail($slug){
        $where = array(
            'tbl_artikel.slug'=>$slug
        );
        $data['show_artikel'] = $this->m_artikel->get_one($where);
        if($data['show_artikel']->num_rows()==0){
            show_404();
        }else{
            $data['content'] = 'user/news';
            $this->load->view('user/home',$data);
        }
    }
}