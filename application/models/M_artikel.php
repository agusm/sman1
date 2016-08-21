<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/13/16
 * Time: 10:27 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class M_artikel extends CI_Model{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
    }

    function get($where){
        return $this->db->from('tbl_artikel')
            ->join('tbl_kategori','tbl_artikel.kd_kategori=tbl_kategori.kd_kategori')
            ->join('tbl_pengguna','tbl_artikel.author=tbl_pengguna.kd_pengguna')
            ->where($where)
            ->order_by('tbl_artikel.kd_artikel','DESC')
            ->get();
    }
    function get_limit($where,$limit){
        return $this->db->from('tbl_artikel')
            ->join('tbl_kategori','tbl_artikel.kd_kategori=tbl_kategori.kd_kategori')
            ->join('tbl_pengguna','tbl_artikel.author=tbl_pengguna.kd_pengguna')
            ->where($where)
            ->order_by('tbl_artikel.kd_artikel','DESC')
            ->limit($limit)
            ->get();
    }
    function get_one($where){
        return $this->db->from('tbl_artikel')
            ->join('tbl_kategori','tbl_artikel.kd_kategori=tbl_kategori.kd_kategori')
            ->join('tbl_pengguna','tbl_artikel.author=tbl_pengguna.kd_pengguna')
            ->where($where)
            ->limit(1)
            ->get();
    }

    function tambah($gambar){
        $judul = $this->input->post("judul");
        $kd_kategori = $this->input->post("kd_kategori");
        $isi_artikel = $this->input->post("isi");
        $slug = url_title($judul, 'dash', true);

        $data = array(
            "judul" => $judul,
            "kd_kategori" => $kd_kategori,
            "isi" => $isi_artikel,
            "slug" => $slug,
            "gambar" =>$gambar,
            "author" => $this->session->userdata('kd_pengguna'),
            "create_at" => date("Y-m-d H:i:s")
        );
        //insert to table
        $this->db->insert("tbl_artikel",$data);
    }

    function ubah($kd,$gambar){
        $data = array(
            "judul" => $this->input->post("judul"),
            "kd_kategori" => $this->input->post("kd_kategori"),
            "isi" => $this->input->post("isi"),
            "slug" => url_title($this->input->post("judul"), 'dash', true),
            "gambar" =>$gambar
        );
        $where=array('kd_artikel'=>$kd);
        return $this->db->where($where)->update('tbl_artikel',$data);
    }

    function ubah_tanpa_gambar($kd){
        $data = array(
            "judul" => $this->input->post("judul"),
            "kd_kategori" => $this->input->post("kd_kategori"),
            "isi" => $this->input->post("isi"),
            "slug" => url_title($this->input->post("judul"), 'dash', true)
        );
        $where=array('kd_artikel'=>$kd);
        return $this->db->where($where)->update('tbl_artikel',$data);
    }

    function hapus($where){
        return $this->db->where($where)->delete('tbl_artikel');
    }
}