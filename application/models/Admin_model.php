<?php 

class Admin_model extends CI_model
{
	public function login($email,$password)
	{
		return  $this->db->get_where('admin', array('email' => $email,'password'=>$password));
	}
	public function checkpassword($username,$password)
 	{
 		return $this->db->get_where('admin', array('email' => $username,'password'=>$password));
 	}
 	public function changepassword($username,$newpassword)
 	{
 		$this->db->where('email', $username);
		return $this->db->update('admin', array('password' => $newpassword));
 	}
	 public function contactFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('contact',array('id'=>$id))->result();
	 	else:
	 		$this->db->order_by('id','DESC');
	 		return $this->db->get('contact')->result();
	 	endif;
	 }
	 public function addContact($data)
	 {
	 	return $this->db->insert('contact',$data);
	 }
	 public function deleteContact($id)
	 {
	 	return $this->db->delete('contact',array('id'=>$id));
	 }
	 public function updateContact($id,$data)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('contact',$data);
	 }
	 //11 Nov, 2021
	 public function apiFinder($id)
	 {
	 	return $this->db->get_where('chat_api',array('id'=>$id))->result();
	 }
	 public function updateAPI($data,$id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('chat_api',$data);
	 }
	 public function contactCounter()
	 {
	 	return $this->db->get('contact')->num_rows();
	 }
	 //06 April, 2022
	 public function partnerFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('partner',array('id'->$id))->result();
	 	else:
	 		$this->db->order_by('id','desc');
	 		return $this->db->get('partner')->result();
	 	endif;
	 }
	 public function mfaKYCRequest()
	 {
	 	$this->db->order_by('id','desc');
	 	return $this->db->get_where('mfa',array('kyc_status'=>'requested'))->result();
	 }
	 public function faKYCRequest()
	 {
	 	$this->db->order_by('id','desc');
	 	return $this->db->get_where('fa',array('kyc_status'=>'requested'))->result();
	 }
	 public function changeKYCStatus($data,$id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('mfa',$data);
	 }
	 public function changeKYCStatusFA($data,$id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('fa',$data);
	 }
	 public function addReferralPartner($data)
	 {
	 	return $this->db->insert('partner',$data);
	 }
	 //07 April, 2022
	 public function deletePartner($id)
	 {
	 	return $this->db->delete('partner',array('id'=>$id));
	 }
	 public function classFinder($id='')
	 {
	 	if($id):
 			return $this->db->get_where('classes',array('id'=>$id))->result();
 		else:
 			$this->db->order_by('id','desc');
 			return $this->db->get('classes')->result();
 		endif;
	 }
	 public function deleteClass($id)
	 {
	 	return $this->db->delete('classes',array('id'=>$id));
	 }
	 public function addClass($data)
	 {
	 	return $this->db->insert('classes',$data);
	 }
	 public function assignCourse($data)
	 {
	 	return $this->db->insert('partner_course_referral_program',$data);
	 }
	 public function isAlreadyAssign($course_id,$partner_id)
	 {
	 	return $this->db->get_where('partner_course_referral_program',
	 		array('course_id'=>$course_id,'partner_id'=>$partner_id)
	 	)->num_rows();
	 }
	 public function courseNameFinderByID($course_id)
	 {
	 	return $this->db->get_where('classes',array('id'=>$course_id))->row()->class_name;
	 }
	 public function partnerNameFinderByID($partner_id)
	 {
	 	return $this->db->get_where('partner',array('id'=>$partner_id))->row()->name;
	 }
	 public function partnerEmailFinderByID($partner_id)
	 {
	 	return $this->db->get_where('partner',array('id'=>$partner_id))->row()->email;
	 }
	 public function assignCourseFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('partner_course_referral_program',array('id'=>$id))->result();
	 	else:
	 		$this->db->order_by('id','desc');
	 		$res=$this->db->get('partner_course_referral_program')->result();
	 		$output=array();
	 		foreach ($res as $key) {
	 			$output[]=array(
	 				'id'=>$key->id,
	 				'course_name'=>$this->courseNameFinderByID($key->course_id),
	 				'partner_name'=>$this->partnerNameFinderByID($key->partner_id),
	 				'partner_email'=>$this->partnerEmailFinderByID($key->partner_id),
	 				'code'=>$key->code,
	 				'assign_price'=>$key->assign_price,
	 				'created_at'=>$key->created_at
	 			);
	 		};
	 		return $output;
	 	endif;
	 }
	 public function deleteAssignCourse($id)
	 {
	 	return $this->db->delete('partner_course_referral_program',array('id'=>$id));
	 }
	 //08 Apr, 2022
	 public function enquiryFinder()
	 {
	 	$this->db->order_by('id','desc');
	 	return $this->db->get('enquiry')->result();
	 }
	 public function deleteEnquiry($id)
	 {
	 	return $this->db->delete('enquiry',array('id'=>$id));
	 }
	 public function studentFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('student',array('id'=>$id))->result();
	 	else:
	 		$this->db->order_by('id','desc');
	 		return $this->db->get('student')->result();
	 	endif;
	 }
	 public function deleteStudent($id)
	 {
	 	return $this->db->delete('student',array('id'=>$id));
	 }
	 public function addStudent($data)
	 {
	 	return $this->db->insert('student',$data);
	 }
	 // public function faRaiseTicket()
	 // {
	 // 	$this->db->order_by('id','desc');
	 // 	return $this->db->get_where('raise_ticket',array('type'=>'fa'))->result();
	 // }
	 public function RaiseTicket()
	 {
	 	$this->db->order_by('id','desc');
	 	return $this->db->get_where('raise_ticket')->result();
	 }
	 public function getRaiseTicketByID($id)
	 {
	 	return $this->db->get_where('raise_ticket',array('id'=>$id))->result();
	 }
	 public function handleRaiseTicketReply($data,$id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('raise_ticket',$data);
	 }
	 public function addBlog($data)
	 {
	 	return $this->db->insert('blog',$data);
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
	 public function deleteBlog($id)
	 {
	 	return $this->db->delete('blog',array('id'=>$id));
	 }
	 //9 Apr, 2022
	 public function updateBlog($data,$id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('blog',$data);
	 }
	 public function studentUpdater($data,$id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('student',$data);
	 }
	 public function addTestimonial($data)
	 {
	 	return $this->db->insert('testimonial',$data);
	 }
	 public function testimonialFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('testimonial',array('id'=>$id))->result();
	 	else:
	 		$this->db->order_by('id','desc');
	 		return $this->db->get('testimonial')->result();
	 	endif;
	 }
	 public function deleteTestimonial($id)
	 {
	 	return $this->db->delete('testimonial',array('id'=>$id));
	 }
	 public function updateTestimonial($data,$id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('testimonial',$data);
	 }
	 //13 Apr, 2022
	 public function companyFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('company_list',array('id'=>$id))->result();
	 	else:	
	 		$this->db->order_by('id','desc');
	 		return $this->db->get('company_list')->result();
	 	endif;
	 }
	 public function addCompany($data)
	 {
	 	return $this->db->insert('company_list',$data);
	 }
	 public function deleteCompany($id)
	 {
	 	return $this->db->delete('company_list',array('id'=>$id));
	 }
	 public function companyNameFinder($company_id)
	 {
	 	return $this->db->get_where('company_list',array('id'=>$company_id))->row()->company_name;
	 }
	 public function prefixNameFinder($company_id)
	 {
	 	return $this->db->get_where('company_list',array('id'=>$company_id))->row()->prefix_name;
	 }
	 public function productFinder($id='')
	 {
		if($id):
	 		return $this->db->get_where('product_mgmt',array('id'=>$id))->result();
	 	else:	
	 		$this->db->order_by('id','desc');
	 		$res=$this->db->get('product_mgmt')->result();
	 		$output=array();
	 		foreach ($res as $key):
	 		$output[]=array(
	 			'id'=>$key->id,
	 			'company_name'=>$this->companyNameFinder($key->company_id),
	 			'product_name'=>$key->product_name,
	 			'product_code'=>$this->prefixNameFinder($key->company_id).$key->id,
	 			'base_price'=>$key->base_price,
	 			'customer_price'=>$key->customer_price,
	 			'mfa_commission'=>$key->mfa_commission,
	 			'fa_commission'=>$key->fa_commission
	 		);
	 		endforeach;
	 		return $output;
	 	endif;
	 }
	 public function addProduct($data)
	 {
	 	return $this->db->insert('product_mgmt',$data);
	 }
	 public function deleteProduct($id)
	 {
	 	return $this->db->delete('product_mgmt',array('id'=>$id));
	 }
	 public function mfaFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('mfa',array('id'=>$id))->result();
	 	else:
	 		$this->db->order_by('id','desc');
	 		return $this->db->get('mfa')->result();
	 	endif;
	 }
	 public function addMFA($data)
	 {
	 	return $this->db->insert('mfa',$data);
	 }
	 public function deleteMFA($id)
	 {
	 	return $this->db->delete('mfa',array('id'=>$id));
	 }
	 public function deleteRaisedTicket($id)
	 {
	 	return $this->db->delete('raise_ticket',array('id'=>$id));
	 }
	 public function faFinder()
	 {
	 	$this->db->order_by('id','desc');
	 	return $this->db->get('fa')->result();
	 }
	 public function addFA($data)
	 {
	 	return $this->db->insert('fa',$data);
	 }
	 public function mfaAnnouncementFinder()
	 {
	 	return $this->db->get_where('announcement',array('type'=>'mfa'))->result();
	 }
	 public function faAnnouncementFinder()
	 {
	 	return $this->db->get_where('announcement',array('type'=>'fa'))->result();
	 }
	 public function addMfaAnnouncement($data)
	 {
	 	return $this->db->insert('announcement',$data);
	 }
	 public function addFaAnnouncement($data)
	 {
	 	return $this->db->insert('announcement',$data);
	 }
	 public function deleteMfaAnnouncement($id)
	 {
	 	return $this->db->delete('announcement',array('id'=>$id));
	 }
	 public function deleteFaAnnouncement($id)
	 {
	 	return $this->db->delete('announcement',array('id'=>$id));
	 }
	 public function leadFinder()
	 {
	 	$this->db->order_by('id','desc');
	 	return $this->db->get('lead_mgmt')->result();
	 }
	 public function addLead($data)
	 {
	 	return $this->db->insert('lead_mgmt',$data);
	 }
	 public function changeLeadStatus($status,$id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('lead_mgmt',array('status'=>$status));
	 }
	 //25 May, 2022
	 public function addImage($data)
	 {
	 	return $this->db->insert('gallery',$data);
	 }
	 public function addMedia($data)
	 {
	 	return $this->db->insert('media',$data);
	 }
	 public function galleryImageFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('gallery',array('id'=>$id))->result();
	 	else:
		$this->db->order_by('id','desc');
	 	return $this->db->get('gallery')->result();
	 	endif;
	 }
	 public function mediaImageFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('media',array('id'=>$id))->result();
	 	else:
		$this->db->order_by('id','desc');
	 	return $this->db->get('media')->result();
	 	endif;
	 }
	 public function deleteGalleryImage($id)
	 {
	 	return $this->db->delete('gallery',array('id'=>$id));
	 }
	 public function deleteMediaImage($id)
	 {
	 	return $this->db->delete('media',array('id'=>$id));
	 }
	 public function addProperty($data)
	 {
	 	return $this->db->insert('properties',$data);
	 }
	 public function propertyFinder($id='')
	 {
	 	if($id):
	 	return $this->db->get_where('properties',array('id'=>$id))->result();
		 else:
		 	$this->db->order_by('id','desc');
		 	return $this->db->get('properties')->result();
		 endif;
	 }
	 //27 May, 2022
	 public function deleteProperty($id)
	 {
	 	return $this->db->delete('properties',array('id'=>$id));
	 }
	 public function updateProperty($data,$id)
	 {
	 	$this->db->where('id',$id);
	 	return $this->db->update('properties',$data);
	 }
	 //29 june, 2022
	 public function plotCategoryFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('plot_category',array('id'=>$id))->result();
	 	else:	
	 		$this->db->order_by('id','desc');
	 		return $this->db->get('plot_category')->result();
	 	endif;
	 }
	 public function deletePlotCategory($id)
	 {
	 	return $this->db->delete('plot_category',array('id'=>$id));
	 }
	 public function addPlotCategory($data)
	 {
	 	return $this->db->insert('plot_category',$data);
	 }
	 public function basicPriceFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('basic_price',array('id'=>$id))->result();
	 	else:
	 		$this->db->order_by('id','desc');
	 		return $this->db->get('basic_price')->result();
	 	endif;
	 }
	 public function deleteBasicPrice($id)
	 {
	 	return $this->db->delete('basic_price',array('id'=>$id));
	 }
	 public function addBasicPrice($data)
	 {
	 	return $this->db->insert('basic_price',$data);
	 }
	 public function plcFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('plc',array('id'=>$id))->result();
	 	else:
	 		$this->db->order_by('id','desc');
	 		return $this->db->get('plc')->result();
	 	endif;
	 }
	 public function deletePlc($id)
	 {
	 	return $this->db->delete('plc',array('id'=>$id));
	 }
	 public function addPlc($data)
	 {
	 	return $this->db->insert('plc',$data);
	 }
	 public function areaFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('area',array('id'=>$id))->result();
	 	else:
	 		$this->db->order_by('id','desc');
	 		return $this->db->get('area')->result();
	 	endif;
	 }
	 public function addArea($data)
	 {
	 	return $this->db->insert('area',$data);
	 }
	 public function deleteArea($id)
	 {
	 	return $this->db->delete('area',array('id'=>$id));
	 }
	 public function tdsFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('tds',array('id'=>$id))->result();
	 	else:
	 		$this->db->order_by('id','desc');
	 		return $this->db->get('tds')->result();
	 	endif;
	 }
	 public function addTds($data)
	 {
	 	return $this->db->insert('tds',$data);
	 }
	 public function deleteTds($id)
	 {
	 	return $this->db->delete('tds',array('id'=>$id));
	 }
	 public function interestFinder($id='')
	 {
	 	if($id):
	 		return $this->db->get_where('interest',array('id'=>$id))->result();
	 	else:
	 		$this->db->order_by('id','desc');
	 		return $this->db->get('interest')->result();
	 	endif;
	 }
	 public function addInterest($data)
	 {
	 	return $this->db->insert('interest',$data);
	 }
	 public function deleteInterest($id)
	 {
	 	return $this->db->delete('interest',array('id'=>$id));
	 }
}

?>