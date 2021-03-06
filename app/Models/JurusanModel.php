<?php namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{

	protected $table = 'jurusan';
	protected $allowedFields = ['nama_jurusan'];
	public function tampil_jurusan(){
		return $hsl=$this->findAll();
	}

	public function tampil_jurusan_by_id($id){
		return $hsl=$this->db->get_where("jurusan",["id_jurusan" => $id])->row_array();
	}

	public function hapus_jurusan($id)
    {
        $this->db->delete('jurusan', ['id_jurusan' => $id]);
    }

	public function update_jurusan(){
		$data = [
	    "nama_jurusan" => $this->input->post('nama_jurusan', true)
    ];
    $this->db->where('id_jurusan', $this->input->post('id'));
    $this->db->update('jurusan', $data);
	}

}