<?php
class ProductModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_products()
    {
        // Fetch all products from the 'products' table
        $query = $this->db->get('products');
        return $query->result_array();
    }

    public function create_product($data)
    {
        // Insert a new product into the 'products' table
        return $this->db->insert('products', $data);
    }

    public function get_product_by_id($id)
    {
        // Fetch a specific product from the 'products' table using its ID
        $query = $this->db->get_where('products', array('id' => $id));
        return $query->row_array();
    }

    public function update_product($id, $data)
    {
        // Update a specific product in the 'products' table using its ID
        $this->db->where('id', $id);
        return $this->db->update('products', $data);
    }

    public function delete_product($id)
    {
        // Delete a specific product from the 'products' table using its ID
        $this->db->where('id', $id);
        return $this->db->delete('products');
    }
}
?>
