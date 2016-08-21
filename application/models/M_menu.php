<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/13/16
 * Time: 10:29 PM
 */
class M_menu extends CI_Model
{

    function get_all(){
        return $this->db->get('tbl_menu');
    }
    function get_sub(){
        return $this->db->from('tbl_menu')
            ->join('tbl_sub_menu','tbl_sub_menu.kd_parent=tbl_menu.kd_menu')
            ->get();
    }

    function get_one_menu($where){
        return $this->db->where($where)->get('tbl_menu');
    }

    function get_one_sub($where){
        return $this->db->from('tbl_menu')
            ->join('tbl_sub_menu','tbl_sub_menu.kd_parent=tbl_menu.kd_menu')
            ->where($where)
            ->get();
    }

    function tambah_menu(){
        $data = array('nama_menu'=>$this->input->post('nama_menu'));
        $this->db->insert('tbl_menu',$data);
    }

    function tambah_sub(){
        $data = array(
            'nama_sub_menu'=>$this->input->post('nama_sub_menu'),
            'slug'=>$this->input->post('slug'),
            'kd_parent'=>$this->input->post('kd_parent'),
        );
        $this->db->insert('tbl_sub_menu',$data);
    }

    function ubah_menu($where){
        $data = array('nama_menu'=>$this->input->post('nama_menu'));
        $this->db->where($where)->update('tbl_menu',$data);
    }

    function ubah_sub($where){
        $data = array(
            'nama_sub_menu'=>$this->input->post('nama_sub_menu'),
            'slug'=>$this->input->post('slug'),
            'kd_parent'=>$this->input->post('kd_parent'),
        );
        $this->db->where($where)->update('tbl_sub_menu',$data);
    }

    function hapus_menu($where){
        return $this->db->where($where)->delete('tbl_menu');
    }

    function hapus_sub($where){
        return $this->db->where($where)->delete('tbl_sub_menu');
    }
}