<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/13/16
 * Time: 10:28 PM
 */
class M_pengguna extends CI_Model
{

    function get_all(){
        return $this->db->where('level','operator')->get('tbl_pengguna');
    }

    function get_one($where){
        return $this->db->where($where)->get('tbl_pengguna');
    }

    function tambah(){
        $data = array(
            'nama_pengguna'=>$this->input->post('nama_pengguna'),
            'email'=>$this->input->post('email'),
            'password'=>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            'no_hp'=>$this->input->post('no_hp'),
            'level'=>'operator'
        );
        return $this->db->insert('tbl_pengguna',$data);
    }

    function ubah($where){
        $password = $this->input->post('password');
        $pass = password_hash($password,PASSWORD_DEFAULT);
        $pass_conf = $this->get_one($where)->row()->password;
        $data = array(
            'nama_pengguna'=>$this->input->post('nama_pengguna'),
            'email'=>$this->input->post('email'),
            'password'=>$pass,
            'no_hp'=>$this->input->post('no_hp')
        );
        if(password_verify($pass,$pass_conf)||empty($password)){
            unset($data['password']);
        }
        return $this->db->where($where)->update('tbl_pengguna',$data);
    }

    function hapus($where){
        return $this->db->where($where)->delete('tbl_pengguna');
    }

    function ubah_password($where){
        $password = $this->input->post('new_password');
        $pass = password_hash($password,PASSWORD_DEFAULT);
        $data = array(
            'password'=>$pass
        );
        return $this->db->where($where)->update('tbl_pengguna',$data);
    }
}