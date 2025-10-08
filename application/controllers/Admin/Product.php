<?php
class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/ProductModel'); // Load the model to interact with the 'products' table
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        echo "string";
        exit;
        $data['products'] = $this->ProductModel->get_all_products(); // Fetch all products from the 'products' table
        $this->load->view('admin/product_list', $data); // Load the view to display the list of products
    }

    public function create()
    {
        $this->load->view('admin/product_create'); // Load the view to create a new blog
    }

    public function store()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[200]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        // Add more form validation rules for other fields if necessary

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/product_create'); // Show the create blog form with validation errors if any
        } else {
            // Handle file upload for the image if needed
            // $image_name = $this->upload_image(); // You need to implement the upload_image() function
            // if (!empty($_FILES['files']['name'])) {

            //     $temp = $_FILES['files']['tmp_name'];
            //     $name = $_FILES['files']['name'];
            //     $fileName = time() . $name;
            //     $path = "./assets/images/blog/$fileName";
            //     $image_name = '/assets/images/blog/' . $fileName;
            //     $a = move_uploaded_file($temp, $path);

            // }else{
            //     $image_name  = $this->input->post('old_image');
            // }



            $data = array(
                'name' => $this->input->post('name'),
                'cat_id' => $this->input->post('category'),
                'description' => $this->input->post('description'),
                'applications' => $this->input->post('application'),
                'key_features' => $this->input->post('key_feature'),
                'certifications' => $this->input->post('certification'),
                'characteristics' => $this->input->post('characteristics'),
                'status' => $this->input->post('status'),
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '2' // Replace with the actual user ID who created the blog
            );

            $result = $this->ProductModel->create_product($data); // Insert the blog data into the 'products' table



            if ($result) {
                $this->session->set_flashdata('success', 'Product created successfully.');
                redirect('admin/product');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/product');
            }
        }
    }

    public function edit($id)
    {
        $data['product'] = $this->ProductModel->get_product_by_id($id); // Fetch the specific blog using its ID
        $this->load->view('admin/product_edit', $data); // Load the view to edit the selected blog
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[200]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');
        // Add more form validation rules for other fields if necessary

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/blog_edit'); // Show the edit blog form with validation errors if any
        } else {
            // Handle file upload for the image if needed
            // $image_name = $this->upload_image(); // You need to implement the upload_image() function

            $data = array(
                'name' => $this->input->post('name'),
                'cat_id' => $this->input->post('category'),
                'description' => $this->input->post('description'),
                'applications' => $this->input->post('application'),
                'key_features' => $this->input->post('key_feature'),
                'certifications' => $this->input->post('certification'),
                'characteristics' => $this->input->post('characteristics'),
                'status' => $this->input->post('status'),
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '2' // Replace with the actual user ID who created the blog
            );

            $result = $this->ProductModel->update_product($id, $data); // Update the blog data in the 'products' table
            if ($result) {
                $this->session->set_flashdata('success', 'Blog updated successfully.');
                redirect('admin/product');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/product');
            }
        }
    }

    public function delete($id)
    {
        $this->ProductModel->delete_product($id); // Delete the specific blog using its ID
        redirect('admin/product'); // Redirect back to the list of products after deleting
    }
}
