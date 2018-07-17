<?php
/**
 *
 */
class Modelcrud extends CI_Model
{

  public function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      if ($cari != NULL) {
          $this->db->or_like($cari);
      }
      $this->db->from('detail');
      $query = $this->db->get();
      return $query->result();
  }
  public function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('detail');

    return $query->num_rows();
  }



  public function get_by_id($kondisi)
  {
      $this->db->from('detail');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('detail',$data);
      return TRUE;
  }
  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('detail');
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('detail',$data,$kondisi);
      return TRUE;
  }

}
