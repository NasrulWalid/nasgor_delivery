<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all()
    {
        return $this->db->get('menu')->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert('menu', $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('menu', array('id' => $id))->row_array();
    }

    public function update($id, $data)
    {
        return $this->db->update('menu', $data, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete('menu', array('id' => $id));
    }
}