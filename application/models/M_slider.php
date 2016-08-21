<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/16/16
 * Time: 12:44 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class M_slider extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
    }
    function get_all(){
        return $this->db->get('tbl_slider');
    }
    function get($where){
        return $this->db->where($where)->get('tbl_slider');
    }
    function tambah($gambar){
        $judul = $this->input->post('judul');
        $isi  = $this->input->post('isi');
        $tanggal = date('Y-m-d H:i:s');

        $data = array(
            'judul' => $judul,
            'isi' => $isi,
            'gambar' => $gambar,
            'create_at' => $tanggal,
        );
        return $this->db->insert('tbl_slider',$data);
    }
    function ubah($where,$gambar){
        $data = array(
            'judul' => $this->input->post('judul'),
            'isi' =>  $this->input->post('isi'),
            'gambar' =>  $gambar
        );
        if(is_null($gambar)){
            unset($data['gambar']);
        }
        return $this->db->where($where)->update('tbl_slider',$data);
    }
    function hapus($where){
        return $this->db->where($where)->delete('tbl_slider');
    }
}