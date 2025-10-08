<?php
class ProductImage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/ProductGalleryModel'); // Load the model to interact with the 'products' table
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->library('form_validation');
    }

    public function index($id)
    {
        $data['product_images'] = $this->ProductGalleryModel->get_all_gallery_items($id); // Fetch all products from the 'products' table
        $data['id'] = $id; 
        $this->load->view('admin/product_image_list', $data); // Load the view to display the list of products
    }

    public function create($id)
    {
        $data['id'] = $id; 
        $this->load->view('admin/product_image_create', $data); // Load the view to create a new blog
    }

    public function store()
    {
        $this->form_validation->set_rules('product_id', 'ProductID', 'required');
        
        // Add more form validation rules for other fields if necessary

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/product_image_create'); // Show the create blog form with validation errors if any
        } else {
            $count = count($_FILES['files']['name']);
    
            for($i=0;$i<$count;$i++){
        
                if(!empty($_FILES['files']['name'][$i])){
        
                    $temp = $_FILES['files']['tmp_name'][$i];
                    $name = $_FILES['files']['name'][$i];
                    $fileName = time() . $name;
                    $path = "./assets/images/product/$fileName";
                    $image_name = '/assets/images/product/' . $fileName;
                    $a = move_uploaded_file($temp, $path);

                    $this->ProductGalleryModel->create_gallery_item([
                                                            'product_id' => $this->input->post('product_id'),
                                                            'image' => $image_name
                                                        ]);
                }
            }

            if ($result) {
                $this->session->set_flashdata('success', 'images added successfully.');
                redirect('admin/product');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/product');
            }
        }
        
        
    }

    public function edit($id)
    {
        $data['product'] = $this->ProductGalleryModel->get_product_by_id($id); // Fetch the specific blog using its ID
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

            $result = $this->ProductGalleryModel->update_product($id, $data); // Update the blog data in the 'products' table
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
        $this->ProductGalleryModel->delete_product($id); // Delete the specific blog using its ID
        redirect('admin/product'); // Redirect back to the list of products after deleting
    }
}
?>
