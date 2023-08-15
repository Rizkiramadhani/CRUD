<?php
class Model_mahasiswa extends CI_Model
{
  function TampilMahasiswa()
  {
    $this->db->order_by('nik', 'DESC');
    return $this->db->from('mahasiswa')
      ->get()
      ->result();
  }

  function GetNik($nik = '')
  {
    return $this->db->get_where('mahasiswa', array('nik' => $nik))->row();
  }
  function HapusMahasiswa($nik)
  {
    $this->db->delete('mahasiswa', array('nik' => $nik));
  }

  function laporan()
  {
    $this->db->order_by('nik', 'ASC');
    return $this->db->from('mahasiswa')
      ->get()
      ->result();
  }
}
