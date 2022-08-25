<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function enquiry($data)
	{
		return $this->db->insert('enquiry',$data);
	}
	public function blogFinder($id='')
	{
		if($id):
			return $this->db->get_where('blog',array('id'=>$id))->result();
		else:
			$this->db->order_by('id','desc');
			return $this->db->get('blog')->result();
		endif;
	}
	public function recentBlog()
	{
		$this->db->order_by('id','desc');
		$this->db->limit(3);
		return $this->db->get('blog')->result();
	}
	public function galleryImageFinder()
	{
		$this->db->order_by('id','desc');
		return $this->db->get('gallery')->result();
	}
	public function mediaImageFinder()
	{
		$this->db->order_by('id','desc');
		return $this->db->get('media')->result();
	}
	public function propertiesFinder($id='')
	{
		if($id):
			return $this->db->get_where('properties',array('id'=>$id))->result();
		else:
			$this->db->order_by('id','desc');
			return $this->db->get('properties')->result();
		endif;
	}
	public function recentPropertiesFinder()
	{
		$this->db->order_by('id','desc');
		$this->db->limit(3);
		return $this->db->get('properties')->result();
	}
	//27 june, 2022
	public function testimonialFinder()
	{
		return $this->db->get('testimonial')->result();
	}

}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */