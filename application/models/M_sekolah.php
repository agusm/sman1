<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/13/16
 * Time: 10:28 PM
 */
class M_sekolah extends CI_Model
{

    function get(){
        return $this->db->limit(1)->get('tbl_sekolah');
    }

    function ubah(){
        $data = array(
            'nama_sekolah'=>$this->input->post('nama_sekolah'),
            'alamat'=>$this->input->post('alamat'),
            'kecamatan'=>$this->input->post('kecamatan'),
            'kabupaten'=>$this->input->post('kabupaten'),
            'provinsi'=>$this->input->post('provinsi'),
            'negara'=>$this->input->post('negara'),
            'kode_pos'=>$this->input->post('kode_pos'),
            'email'=>$this->input->post('email'),
            'telp'=>$this->input->post('telp'),
            'fax'=>$this->input->post('fax'),
            'twitter'=>$this->input->post('twitter'),
            'facebook'=>$this->input->post('facebook'),
        );
        return $this->db->update('tbl_sekolah',$data);
    }
}
