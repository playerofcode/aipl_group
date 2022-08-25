<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
require (APPPATH.'/libraries/REST_Controller.php');


class Auth extends REST_Controller {

	public  function  __construct(){
		parent::__construct();
		$this->load->model('Auth_model','model');
		$config=[
		 	'upload_path'=>'./upload/',
		 	'allowed_types'=>'jpg|png|jpeg'
		 ];
		 $this->load->library('upload',$config);
	}
	public function index_get()
	{
		$this->response([
			'status'=>'successs',
			'message'=>'API Working properly'
			],REST_Controller::HTTP_OK);
	}
  	//19  Apr, 2022	
  	public function gallery_get()
  	{
  		$code=$this->input->get('code');
  		if($data=$this->model->galleryFinder()):
  			
  				$this->response([
				'status'=>'success',
				'message'=>'Record retrieve successfully',
				'data'=>$data,
				],REST_Controller::HTTP_OK);
  		else:
  			$this->response([
			'status'=>'success',
			'message'=>'Something went wrong.'
			],REST_Controller::HTTP_OK);
  		endif;
  	}
  	public function media_get()
  	{
  		$code=$this->input->get('code');
  		if($data=$this->model->mediaFinder()):
  			
  				$this->response([
				'status'=>'success',
				'message'=>'Record retrieve successfully',
				'data'=>$data,
				],REST_Controller::HTTP_OK);
  		else:
  			$this->response([
			'status'=>'success',
			'message'=>'Something went wrong.'
			],REST_Controller::HTTP_OK);
  		endif;
  	}
  	public function blog_get($id='')
  	{
  		if($data=$this->model->blogFinder($id)):
  			
  				$this->response([
				'status'=>'success',
				'message'=>'Record retrieve successfully',
				'data'=>$data,
				],REST_Controller::HTTP_OK);
  		else:
  			$this->response([
			'status'=>'success',
			'message'=>'Something went wrong.'
			],REST_Controller::HTTP_OK);
  		endif;
  	}
  	public function properties_get($id='')
  	{
  		if($data=$this->model->propertiesFinder($id)):
  			
  				$this->response([
				'status'=>'success',
				'message'=>'Record retrieve successfully',
				'data'=>$data,
				],REST_Controller::HTTP_OK);
  		else:
  			$this->response([
			'status'=>'success',
			'message'=>'Something went wrong.'
			],REST_Controller::HTTP_OK);
  		endif;
  	}
  	
	
}
