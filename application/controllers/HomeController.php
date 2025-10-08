<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/contact_model'); // Load the Contact_model
        $this->load->model('Admin/ProductGalleryModel'); 
        $this->load->model('Home_model');
        $this->load->helper('download');
        $this->load->library('form_validation');
        $this->load->model('Admin/ProductModel');
        $this->load->library('email');

    }
    public function index()
    {

        $data['products'] = $this->ProductModel->get_all_products(); // Fetch all products from the 'products' table
        $data['testimonials'] = $this->Home_model->getActiveTestimonials(); // Fetch all products from the 'products' table
        
        $data['product_images'] = $this->ProductGalleryModel->get_all_images();
        $productImages = array();

        foreach ($data['product_images'] as $product_image) {
            $product_id = $product_image['product_id'];
            $image = $product_image['image'];

            if (!isset($productImages[$product_id])) {
                $productImages[$product_id] = array();
            }

            $productImages[$product_id][] = $image;
        }
        $data['images'] = $productImages;

        $this->load->view('home/index', $data);
    }

    public function about()
    {
        // Load the about view
        $data['page_title'] = "Home || FLOW SMART ||";
        $data['testimonials'] = $this->Home_model->getActiveTestimonials(); // Fetch all products from the 'products' table

        $this->load->view('home/about', $data);
    }

    public function contact()
    {
        // Load the contact view
        //echo "hi"; exit;
        $data['page_title'] = "Home || FLOW SMART ||";

        $this->load->view('home/contact', $data);
    }

    public function blog() {
        // Load the blog view
        $data['page_title']="Home || FLOW SMART ||";
        $data['blogs'] = $this->Home_model->getActiveBlogs(); // Fetch all products from the 'products' table

        $this->load->view('home/blog',$data);
    }

    public function faq()
    {
        // Load the FAQ view
        $data['page_title'] = "Home || FLOW SMART ||";

        $this->load->view('home/faq', $data);
    }

    // public function services()
    // {
    //     // Load the services view
    //     $data['page_title'] = "Home || FLOW SMART ||";
    //     $data['services'] = $this->Home_model->getActiveServices();
    //     $this->load->view('home/services', $data);
    // }

    public function products()
    {
        // Load the services view
        $data['products'] = $this->ProductModel->get_all_products(); // Fetch all products from the 'products' table
        
        $data['product_images'] = $this->ProductGalleryModel->get_all_images();
        $productImages = array();

        foreach ($data['product_images'] as $product_image) {
            $product_id = $product_image['product_id'];
            $image = $product_image['image'];

            if (!isset($productImages[$product_id])) {
                $productImages[$product_id] = array();
            }

            $productImages[$product_id][] = $image;
        }
        $data['images'] = $productImages;
        // echo "<pre>";
        // print_r( $productImages); 
        // die();
        $this->load->view('home/products', $data);
    }

    public function product($id)
    {
        // Load the services view
        $data['product']        = $this->ProductModel->get_product_by_id($id); // Fetch all products from the 'products' table
        $data['product_images'] = $this->ProductGalleryModel->get_all_gallery_items($id);

        $data['products'] = $this->ProductModel->get_all_products(); // Fetch all products from the 'products' table
        
        $data['r_product_images'] = $this->ProductGalleryModel->get_all_images();
        $productImages = array();

        foreach ($data['r_product_images'] as $product_image) {
            $product_id = $product_image['product_id'];
            $image = $product_image['image'];

            if (!isset($productImages[$product_id])) {
                $productImages[$product_id] = array();
            }

            $productImages[$product_id][] = $image;
        }
        $data['images'] = $productImages;


        $this->load->view('home/product', $data);
    }
    // public function service_detail($service_id)
    // {

    //     $data['page_title'] = "Home || FLOW SMART ||";
    //     $data['services_detail'] = $this->Home_model->get_service_by_id($service_id);
    //     $data['services_types'] = $this->Home_model->services_types($service_id);
    //     $data['services_we_choose'] = $this->Home_model->services_we_choose($service_id);
    //     $data['service_faqs'] = $this->Home_model->getActiveServiceFaq($service_id);
    //     //echo "<pre>"; print_r($data['services_types']); exit;
    //     $data['services'] = $this->Home_model->getActiveServices();

    //     $this->load->view('home/service_detail', $data);
    // }

    public function blogs()
    {

        $data['page_title'] = "Blogs || FLOW SMART ||";
        $data['blogs'] = $this->Home_model->get_all_blogs();
        //  print_r($data['blogs']); exit;
        $this->load->view('home/blog', $data);
    }
    public function blog_detail($blog_id)
    {

        $data['page_title'] = "Blogs Details || FLOW SMART ||";
        $data['training'] = $this->Home_model->get_blog_by_id($blog_id);
        //print_r($data['training']); exit;
        $this->load->view('home/blog_detail', $data);
    }
    public function contact_enquiry()
	{
		//print_r($this->input->post('checkedServiceValues')); exit;
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'mobile' => $this->input->post('mobile'),
			'subject' => $this->input->post('subject'),
			'message' => $this->input->post('message'),
			'services_ids' => $this->input->post('services_ids'),
			'status' => 1,
			'created_at' => date("Y-m-d H:i:s")
		);

		$result = $this->contact_model->create_contact($data);
		if ($result) {
            $this->email->from('chaitanyakadali3@gmail.com', 'chaitanya');
            $this->email->to('saichaitum30s@gmail.com');
            $this->email->subject('Subject of the Email');
            $this->email->message('Message body of the email.');
            $this->email->send();
			echo "Thanks for Inserting";
			exit;
		} else {
			echo "Error inserting data.";
			exit;
		}
		exit;
	}
}