<?php
class Kategori_model extends CI_Model {
    protected $_table = 'kategori';
    protected $primary = 'id';

    public function getAll()
    {
        $result = $this->db->where('is_active', 1)->get($this->_table)->result();
        log_message('debug', 'Query result: ' . json_encode($result));
        return $result;
    }

    public function save()
    {
        $data = array(
            'name' => htmlspecialchars($this->input->post('name'), true),
        );
        $insert = $this->db->insert($this->_table, $data);
        if (!$insert) {
            log_message('error', 'Database insert error: ' . $this->db->last_query());
        }
        return $insert;
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function editData()
    {
        $id = $this->input->post('id');
        $data = array(
            'name' => htmlspecialchars($this->input->post('name'), true),
            'is_active' => 1,
        );
        return $this->db->set($data)->where($this->primary, $id)->update($this->_table);
    }   

    public function delete($id)
    {
        $this->db->where('id', $id)->delete($this->_table);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata("success", "Data user Berhasil diDelete");
        }
    }
}
