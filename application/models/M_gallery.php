<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/15/16
 * Time: 1:11 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class M_gallery extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
    }
    function get_all(){
        return $this->db->order_by('kd_gambar','DESC')->get('tbl_gambar');
    }

    function get_limit(){
        return $this->db->limit(2)->order_by('kd_gambar','DESC')->get('tbl_gambar');
    }

    function get($where){
        return $this->db->where($where)->get('tbl_gambar');
    }
    function tambah($gambar){
        $judul = $this->input->post('judul');
        $slug  = url_title($this->input->post('judul'),"-",TRUE);
        $tanggal = date('Y-m-d H:i:s');

        $data = array(
            'judul' => $judul,
            'slug' => $slug,
            'gambar' => $gambar,
            'create_at' => $tanggal,
        );
        return $this->db->insert('tbl_gambar',$data);
    }
    function ubah($where){
        $data = array(
            'judul' => $this->input->post('judul'),
            'slug' => url_title($this->input->post('judul'),"-",TRUE)
        );
        return $this->db->where($where)->update('tbl_gambar',$data);
    }
    function hapus($where){
        return $this->db->where($where)->delete('tbl_gambar');
    }
}