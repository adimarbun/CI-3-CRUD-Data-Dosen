<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen_model extends CI_Model
{
    private $table = 'dosen';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'Nama',  //samakan dengan atribute name pada tags input
                'label' => 'Nama',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'JenisKelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Agama',
                'label' => 'Agama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'NoHp',
                'label' => 'No Hp',
                'rules' => 'trim|required|numeric|min_length[9]|max_length[15]'
            ],
            [
                'field' => 'Email',
                'label' => 'Email',
                'rules' => 'trim|required'
            ]
        ];
    }

    //menampilkan data dosen berdasarkan id dosen
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["IdDosen" => $id])->row();
    }

    //menampilkan semua data dosen
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("IdDosen", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    //menyimpan data dosen
    public function save()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "Nidn" => $this ->input ->post('Nidn'),
            "JenisKelamin" => $this->input->post('JenisKelamin'),
            "Agama" => $this->input->post('Agama'),
            "NoHp" => $this->input->post('NoHp'),
            "Email" => $this->input->post('Email'),
            "JabatanFungsional" =>$this ->input->post('JabatanFungsional'),
            "PendidikanTerakhir" =>$this->input->post('PendidikanTerakhir')
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data dosen
    public function update()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "Nidn" => $this ->input ->post('Nidn'),
            "JenisKelamin" => $this->input->post('JenisKelamin'),
            "Agama" => $this->input->post('Agama'),
            "NoHp" => $this->input->post('NoHp'),
            "Email" => $this->input->post('Email'),
            "JabatanFungsional" =>$this ->input->post('JabatanFungsional'),
            "PendidikanTerakhir" =>$this->input->post('PendidikanTerakhir')
        );
        return $this->db->update($this->table, $data, array('IdDosen' => $this->input->post('IdDosen')));
    }

    //hapus data dosen
    public function delete($id)
    {
        return $this->db->delete($this->table, array("IdDosen" => $id));
    }
}