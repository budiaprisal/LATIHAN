<?php
defined('BASEPATH') or exit('Akses tidak diizinkan');


class Home_model extends CI_Model
{
    function get_pegawai()
    {
        $result = $this->db->get('tb_pegawai')->result_array(); //lebih dari satu 
        return $result;
    }

    function insert_pegawai($data)
    {
        $this->db->insert('tb_pegawai', $data);
    }


    function select_pegawaiid($id)
    {

        $this->db->where('kodepegawai', $id);
        $result = $this->db->get('tb_pegawai')->row_array();   //datanya satu
        return $result;
    }

    function update_datapegawai($kodepegawai, $data)
    {
        $this->db->where('kodepegawai', $kodepegawai);
        $this->db->update('tb_pegawai', $data);
    }

    function delete_datapegawai($kodepegawai)
    {
        $this->db->where('kodepegawai', $kodepegawai);
        $this->db->delete('tb_pegawai');
    }
}
