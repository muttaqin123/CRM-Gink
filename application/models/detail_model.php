<?php
error_reporting(0);
class detail_model extends CI_model
{
    public function getuser($id)
    {
        //dapatkan data user yang login
        return $this->db->get_where("user", array("id_employ" => $id))->row_array();
    }

    //fungsi ambil data tabel task
    public function gettask()
    {
        return $this->db->get("task")->result_array();
    }

    public function getemploy($user)
    {
        //dapatkan data user yang login
        return $this->db->get_where("employe", array("id_employ" => $user))->row_array();
    }
    public function getdetail($id_task)
    {
        //dapatkan data task berdasarkan id task
        return $this->db->get_where('task', array('id_task' => $id_task))->row_array();
    }
    public function getsubtask($id_parent)
    {
        //dapatkan data subtask sesuai id parent yang dikirim
        $this->db->order_by('status', 'ASC');
        $this->db->order_by('dateline', 'ASC');
        $this->db->join("employe", "employe.id_employ = task.id_employ_tujuan");
        $this->db->where('id_parent', $id_parent);
        return $this->db->get('task')->result_array();
    }
    public function getsubtaskselesai($id_parent)
    {
        //mengambil subtask selesai
        return $this->db->get_where('task', array('id_parent' => $id_parent, 'status' => "Selesai"))->result_array();
    }

    public function getsemuaPJ($id_departemen)
    {
        //ambil data semua PJ pada departemen head tsb
        return $this->db->get_where('employe', array('id_departemen' => $id_departemen))->result();
    }
    public function getPJ_task($id_task)
    {
        return $this->db->get_where('task', array('id_task' => $id_task))->row_array();
    }
    public function getdept($id_dept)
    {
        return $this->db->get_where('departemen', array('id_departemen' => $id_dept))->row_array();
    }

    public function getnama_PJ($id_task)
    {
        //ambil nama PJ task
        $employ = $this->db->get_where('task', array('id_task' => $id_task))->row_array();
        $id_employ_tujuan = $employ['id_employ_tujuan'];
        $data_pj = $this->db->get_where('employe', array('id_employ' => $id_employ_tujuan))->row_array();
        return $data_pj["nama"];
    }
    public function getnama_kirim($id_task)
    {
        //join task dan employ
        $employ = $this->db->get_where('task', array('id_task' => $id_task))->row_array();
        //ambil id nama pengirim task
        $id_employ_tujuan = $employ['id_employ_kirim'];
        $data_pj = $this->db->get_where('employe', array('id_employ' => $id_employ_tujuan))->row_array();
        return $data_pj["nama"];
    }
    public function getdept_kirim($id_task)
    {
        //ambil nama dept_kirim
        $dept = $this->db->get_where('task', array('id_task' => $id_task))->row_array();
        return $dept["nama_dept_kirim"];
    }
    public function getdeptPJTask($id_task)
    {
        $employ = $this->db->get_where('task', array('id_task' => $id_task))->row_array();
        $id_employ_tujuan = $employ['id_employ_tujuan'];
        $data_pj = $this->db->get_where('employe', array('id_employ' => $id_employ_tujuan))->row_array();
        $id_dept = $data_pj['id_departemen'];
        $nama_Dept = $this->db->get_where('departemen', array('id_departemen' => $id_dept))->row_array();
        return $nama_Dept["nama_departemen"];
    }
    public function ubahstatustask($id)
    {
        //update
        $this->db->set('status', "Selesai");
        $this->db->where('id_task', $id);
        $this->db->update('task');
        //data user

        return $id;
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
    public function taskSelesai($task, $date)
    {
        //update
        $this->db->set('status', 'Selesai');
        $this->db->set('waktu_selesai', $date);
        $this->db->where('id_task', $task);
        $this->db->update('task');
        //data user

        return $task;
    }
    public function Laporan($id, $file, $task)
    {
        //update
        $this->db->set('berkas', $file);
        $this->db->where('id_task', $task);
        $this->db->update('task');
        //data user

        return $id;
    }

    public function getdeptcalonpj($id_dept)
    {
        //ambil data nama departemen calon PJ pada departemen
        $nama_Dept = $this->db->get_where('departemen', array('id_departemen' => $id_dept))->row_array();
        return $nama_Dept["nama_departemen"];
    }

    public function gettugaspj($dept)
    {
        //join table employ dan task, dan add jumlah task employ yang belum selesai
        $this->db->where("nama_dept_tujuan", $dept);
        $this->db->where("task.status", "Belum Selesai");
        $this->db->where_not_in("id_employ_tujuan", "");
        $this->db->select("count(task.status),id_employ_tujuan,nama");
        $this->db->join("employe", "employe.id_employ = task.id_employ_tujuan");
        $this->db->group_by("id_employ_tujuan");
        return $this->db->get("task")->result_array();
    }

    public function getsemuaemploy($dept)
    {
        return $this->db->get_where("employe", array("id_departemen" => $dept))->result_array();
    }

    public function insert_sub_task($data_sub_task, $id_employ, $task)
    {
        //update status
        $parent_task = $this->db->get_where('task', array('id_task' => $task))->row_array();
        if ($parent_task["status"] == "Selesai") {
            $this->db->set('status', "Belum Selesai");
            $this->db->where('id_task', $task);
            $this->db->update('task');
        }
        //akhir update status

        //update
        $this->db->set('id_employ_tujuan', $id_employ);
        $this->db->where('id_task', $task);
        $this->db->update('task');
        //data user
        return $this->db->insert("task", $data_sub_task);
    }
    public function getkomentar($task)
    {
        // $this->db->or_where("id_parent", $task);
        $this->db->order_by('tanggal_komen', 'ASC');
        $this->db->join("task", "komentar.id_task = task.id_task");
        $this->db->where("task.id_task", $task);
        $this->db->or_where("task.id_parent", $task);
        return $this->db->get("komentar")->result_array();
    }
    public function getkomentarsub($task)
    {
        // $this->db->or_where("id_parent", $task);
        $parent = $this->db->get_where("task", array("id_task" => $task))->row_array();
        $parent1 = $parent["id_parent"];
        $subtask = $this->db->get_where("task", array("id_parent" => $parent1))->result_array();
        $idsubtask = [];
        foreach ($subtask as $value) {
            array_push($idsubtask, $value["id_task"]);
        }

        $this->db->order_by('tanggal_komen', 'ASC');
        $this->db->where("komentar.id_task", $parent1);
        $this->db->or_where_in("komentar.id_task", $idsubtask);
        $this->db->join("task", "komentar.id_task = task.id_task");
        return $this->db->get("komentar")->result_array();
    }
    public function buatkomen($data)
    {
        //membuat komentar task
        return $this->db->insert("komentar", $data);
    }
    public function deletekomen($data)
    {
        //membuat fungsi delete komentar task
        return $this->db->delete('komentar', array('id_komentar' => $data));
    }
}
