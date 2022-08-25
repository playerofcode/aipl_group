<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model','model');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
	}
	public function index()
	{
		$data['recent_blog']=$this->model->recentBlog();
		$data['properties']=$this->model->recentPropertiesFinder();
		$data['testimonial']=$this->model->testimonialFinder();
		$this->load->view('home/header');
		$this->load->view('home/index',$data);
		$this->load->view('home/footer');
	}
	public function about()
	{
		$data['testimonial']=$this->model->testimonialFinder();
		$this->load->view('home/header');
		$this->load->view('home/about',$data);
		$this->load->view('home/footer');
	}
	public function properties()
	{
		$data['properties']=$this->model->propertiesFinder();
		$this->load->view('home/header');
		$this->load->view('home/properties',$data);
		$this->load->view('home/footer');
	}	
	public function property_info($id)
	{
		$data['properties']=$this->model->propertiesFinder($id);
		$this->load->view('home/header');
		$this->load->view('home/property_info',$data);
		$this->load->view('home/footer');
	}
	public function gallery()
	{
		$data['image']=$this->model->galleryImageFinder();
		$this->load->view('home/header');
		$this->load->view('home/gallery',$data);
		$this->load->view('home/footer');
	}
	public function media()
	{
		$data['image']=$this->model->mediaImageFinder();
		$this->load->view('home/header');
		$this->load->view('home/media',$data);
		$this->load->view('home/footer');
	}
	public function blog()
	{
		$data['blog']=$this->model->blogFinder();
		$this->load->view('home/header');
		$this->load->view('home/blog',$data);
		$this->load->view('home/footer');
	}
	public function blog_info($id)
	{
		$data['blog']=$this->model->blogFinder($id);
		$data['recent_blog']=$this->model->recentBlog();
		$this->load->view('home/header');
		$this->load->view('home/blog_info',$data);
		$this->load->view('home/footer');
	}
	public function contact()
	{
		$this->load->view('home/header');
		$this->load->view('home/contact');
		$this->load->view('home/footer');
	}
	public function enquiry()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('phone', 'Mobile Number', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');
		if($this->form_validation->run()):
		$name=$this->input->post('name');
		$phone=$this->input->post('phone');
		$email=$this->input->post('email');
		$message=$this->input->post('message');
		$data=array(
			'name'=>$name,
			'phone'=>$phone,
			'email'=>$email,
			'message'=>$message
		);
		if($this->model->enquiry($data)):
			$this->session->set_flashdata('msg','Your message sent successfully.');
			return redirect(base_url().'contact-us');
		else:
			$this->session->set_flashdata('msg','Something went wrong');
			return redirect(base_url().'contact-us');	
		endif;
	else:
		$this->contact();
	endif;
	}
	public function cmd_message()
	{
		$this->load->view('home/header');
		$this->load->view('home/cmd_message');
		$this->load->view('home/footer');
	}
	//27 june, 2022
	public function emi()
	{
	$this->load->view('home/header');
	$this->load->view('home/emi');
	$this->load->view('home/footer');
	}
	public function emi_calculate()
	{
		$this->form_validation->set_rules('p', 'Loan Amount', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('t', 'Tenure', 'trim|required');
		$this->form_validation->set_rules('r', 'Rate of Interest', 'trim|required');
		if($this->form_validation->run()):
			$p=$this->input->post('p');
			$t=$this->input->post('t');
			$r=$this->input->post('r');
			$r = $r / (12 * 100);
    		$t = $t * 12;
   			 $emi = ($p * $r * pow(1 + $r, $t)) /
                  (pow(1 + $r, $t) - 1);
            $this->session->set_flashdata('msg','Your EMI Per Month will be <b>&#8377; '.number_format($emi).'</b>');
			return redirect(base_url().'emi-calculator');	
		else:
			$this->emi();
		endif;
	}
}
