<?php
error_reporting(0);
class detail_model extends CI_model
{
    public function getemploy($user)
    {
        return $this->db->get_where("employe", array("id_employ" => $user))->row_array();
    }
    public function getdetail($id_task)
    {
        return $this->db->get_where('task', array('id_task' => $id_task))->row_array();
    }
    public function getsemuaPJ($id_departemen)
    {
        return $this->db->get_where('employe', array('id_departemen' => $id_departemen))->result();
    }
    public function getPJ_task($id_task)
    {
        return $this->db->get_where('task', array('id_task' => $id_task))->row_array();
    }
    public function ubahPJ($id_tujuan, $id)
    {
        //update
        $this->db->set('id_employ_tujuan', $id_tujuan);
        $this->db->where('id_task', $id);
        $this->db->update('task');
        //data user

        return $id;
    }
}