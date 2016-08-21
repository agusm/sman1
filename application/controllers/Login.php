<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/14/16
 * Time: 3:14 PM
 */
class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();$this->load->model(array('m_pengguna'));
    }
    function index(){
        $this->load->view("admin/login");

        $status = $this->session->userdata("logged_in");
        if(isset($status)){
            redirect('operator');
        }
    }

    function proses_login(){
        $this->load->model("m_pengguna");
        $data = array(
            'email' => $this->input->post('email')
        );
        $pass = $this->input->post("password");
        $hasil = $this->m_pengguna->get_one($data);
        $sesi=array();
        if($hasil->num_rows()>0) {
            foreach ($hasil->result_array() as $r) {
                if (password_verify($pass, $r['password'])) {
                    switch ($r['level']){
                        case 'admin':
                            $sesi = array(
                                'kd_pengguna'=>$r['kd_pengguna'],
                                'nama' => $r['nama_pengguna'],
                                'level' => $r['level'],
                                'logged_in' => true
                            );
                            $data['sesi'] = $this->session->set_userdata($sesi);
                            redirect("operator");
                            break;
                        case 'operator':
                            $sesi = array(
                                'kd_pengguna' => $r['kd_pengguna'],
                                'nama' => $r['nama_pengguna'],
                                'level' => $r['level'],
                                'logged_in' => true
                            );
                            $data['sesi'] = $this->session->set_userdata($sesi);
                            redirect("operator");
                            break;
                    }
                } else {
                    echo '<script data-cfasync="false" type="text/javascript">alert("Email atau Password Salah !");history.go(-1);</script>';
                }
            }
        }
        else {
            //var_dump($data);
            echo '<script data-cfasync="false" type="text/javascript">alert("Email atau Password Salah !");history.go(-1);</script>';
        }

    }
}