<?php
class ProductGalleryModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_gallery_items($id)
    {
        $query = $this->db->get_where('product_gallery', array('product_id' => $id));
        return $query->result_array();
    }
    public function get_all_images()
    {
        $query = $this->db->get('product_gallery');
        return $query->result_array();
    }

    public function create_gallery_item($data)
    {
        return $this->db->insert('product_gallery', $data);
    }

    public function get_gallery_item_by_id($id)
    {
        $query = $this->db->get_where('product_gallery', array('id' => $id));
        return $query->row_array();
    }

    public function update_gallery_item($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('product_gallery', $data);
    }

    public function delete_gallery_item($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('product_gallery');
    }
}
?>
