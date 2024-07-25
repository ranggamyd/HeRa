<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengguna_model extends CI_Model
{
    public function get_id_pasien_baru()
    {
        $latest = $this->db->order_by('id_pasien', 'DESC')->get('pasien')->row();

        if ($latest) {
            return $latest->id_pasien + 1;
        } else {
            return 1;
        }
    }

    public function get_pasien()
    {
        return $this->db->get('pasien')->result_array();
    }

    public function tambah($data)
    {
        if ($this->db->insert('pasien', $data)) {
            $this->session->set_flashdata('sukses', 'Registrasi pengguna Berhasil !');
            redirect('pasien');
        } else {
            $this->session->set_flashdata('gagal', 'Registrasi pengguna Gagal !');
            redirect('pasien/registrasi');
        }
    }
    public function tambah2($data)
    {
        $this->db->insert('pasien', $data);
    }
    public function tambah1($data)
    {
        if ($this->db->insert('pasien', $data)) {
            $this->session->set_flashdata('sukses', 'Berhasil Tambah pengguna !');
            redirect('pasien');
        } else {
            $this->session->set_flashdata('gagal', 'Gagal Tambah pengguna !');
            redirect('pasien');
        }
    }
    public function edit($data, $id_pasien)
    {
        if ($this->db->update('pasien', $data, ['id_pasien' => $id_pasien])) {
            $this->session->set_flashdata('sukses', 'Berhasil mengubah data pengguna !');
            redirect('pasien');
        } else {
            $this->session->set_flashdata('gagal', 'Gagal mengubah data pengguna !');
            redirect('pasien');
        }
    }

    public function hapus($id_pasien)
    {
        $this->db->delete('hasil', ['id_pasien' => $id_pasien]);
        if ($this->db->delete('pasien', ['id_pasien' => $id_pasien])) {
            $this->session->set_flashdata('sukses', 'Berhasil Menghapus pengguna !');
            redirect('pasien');
        } else {
            $this->session->set_flashdata('gagal', 'Gagal Menghapus pengguna !');
            redirect('pasien');
        }
    }

    public function cariNama($nama)
    {
        $query = $this->db->get_where('pasien', array('nama' => $nama));

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }
}
