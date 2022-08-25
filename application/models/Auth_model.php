<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function galleryFinder()
	{
		$this->db->order_by('id','desc');
		$res=$this->db->get('gallery')->result();
		foreach($res as $key):
			$output[]=array(
				'image'=>base_url().$key->image
			);
		endforeach;
		return $output;
	}
	public function mediaFinder()
	{
		$this->db->order_by('id','desc');
		$res=$this->db->get('media')->result();
		foreach($res as $key):
			$output[]=array(
				'image'=>base_url().$key->image
			);
		endforeach;
		return $output;
	}
	public function blogFinder($id='')
	{
		if($id):
		$res=$this->db->get_where('blog',array('id'=>$id))->result();
		foreach($res as $key):
			$output[]=array(
				'id'=>$key->id,
				'title'=>$key->title,
				'description'=>$key->description,
				'created_at'=>$key->created_at,
				'image'=>base_url().$key->image
			);
		endforeach;
		return $output;
		else:
		$this->db->order_by('id','desc');
		$res=$this->db->get('blog')->result();
		foreach($res as $key):
			$output[]=array(
				'id'=>$key->id,
				'title'=>$key->title,
				'description'=>$key->description,
				'created_at'=>$key->created_at,
				'image'=>base_url().$key->image
			);
		endforeach;
		return $output;
		endif;
		
	}
	public function propertiesFinder($id='')
	{
		if($id):
		$res=$this->db->get_where('properties',array('id'=>$id))->result();
		foreach($res as $key):
			$output[]=array(
				'id'=>$key->id,
				'name'=>$key->name,
				'address'=>$key->address,
				'size'=>$key->size,
				'price'=>$key->price,
				'description'=>$key->description,
				'school'=>$key->school,
				'shopping_mall'=>$key->shopping_mall,
				'hospital'=>$key->hospital,
				'restaurant'=>$key->restaurant,
				'atm'=>$key->atm,
				'cinema'=>$key->cinema,
				'park'=>$key->park,
				'created_at'=>$key->created_at,
				'image'=>base_url().$key->image
			);
		endforeach;
		return $output;
		else:
		$this->db->order_by('id','desc');
		$res=$this->db->get('properties')->result();
		foreach($res as $key):
			$output[]=array(
				'id'=>$key->id,
				'name'=>$key->name,
				'address'=>$key->address,
				'size'=>$key->size,
				'price'=>$key->price,
				'description'=>$key->description,
				'school'=>$key->school,
				'shopping_mall'=>$key->shopping_mall,
				'hospital'=>$key->hospital,
				'restaurant'=>$key->restaurant,
				'atm'=>$key->atm,
				'cinema'=>$key->cinema,
				'park'=>$key->park,
				'created_at'=>$key->created_at,
				'image'=>base_url().$key->image
			);
		endforeach;
		return $output;
		endif;
	}
}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */