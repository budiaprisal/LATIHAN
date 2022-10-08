<?php
defined('BASEPATH') or exit('Akses tidak diizinkan');


class Jualan_model extends CI_Model
{
    function getdataproduk()
    {
        $this->db->select('product.*,category.catname,category.catimg as gambar');
        $this->db->from('product');
        $this->db->join('category', 'product.cid= category.id');
        $q = $this->db->get()->result();
        return $q;

        // $result = $this->db->get('product')->result_array(); //lebih dari satu 
        // return $result;
    }

    function getdatabanner()
    {
        $result = $this->db->get('banner')->result_array(); //lebih dari satu 
        return $result;
    }

    function getdatacategory()
    {
        $result = $this->db->get('category')->result_array(); //lebih dari satu 
        return $result;
    }
}
