<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $data['content'] = 'user/content';
        $this->load->view('user/home',$data);
    }

    function gallery(){
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
