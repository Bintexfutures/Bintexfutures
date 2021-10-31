<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdocument extends CI_Model {

	public function passport1()		{
			extract($_POST);
			$date=date('y-m-d h:i:s');
			  $re=$this->session->userdata('userlogin');

 

 $config['upload_path'] = realpath(APPPATH . '../assets/passport/');
 $ve_image_front='frontimage'.rand().time().'.jpg';
$config['file_name'] = $ve_image_front;
$config['allowed_types'] = 'gif|jpg|png|pdf';


$this->load->library('upload', $config);

// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
$this->upload->initialize($config);
 $this->upload->do_upload('frontimage');
echo $this->upload->display_errors('<p>', '</p>');
  $ve_image_back='backimage'.rand().time().'.jpg';
 $config['file_name'] = $ve_image_back;
 $this->upload->initialize($config);
$this->upload->do_upload('backimage');
//echo $this->upload->display_errors('<p>', '</p>');
			
			$add=array(
				'crdate'=>$date,
				'p1'=>$ve_image_front,
				'p2'=>$ve_image_back
		);
			$res=$this->db->update('kyc', $add, array('customer_id'=>$re->id));
			
			//echo $this->db->last_query();
			
			
			
			if($res==true)

			{
			
				echo '<script>alert("Your Passport Successfully Uploded")</script>';

				redirect('kyc/doc2','refresh');
				
				
			}
		
			
			
			else{
				
			$this->session->set_flashdata('error','vendor already there');
		}

}
public function driverfile1()
		{
			extract($_POST);
			$date=date('y-m-d h:i:s');
			  $re=$this->session->userdata('userlogin');

 $config['upload_path'] = realpath(APPPATH . '../assets/passport/');
 $ve_image_front='frontimage'.rand().time().'.jpg';
$config['file_name'] = $ve_image_front;
$config['allowed_types'] = 'gif|jpg|png|pdf';


$this->load->library('upload', $config);

// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
$this->upload->initialize($config);
 $this->upload->do_upload('frontimage');
echo $this->upload->display_errors('<p>', '</p>');
  $ve_image_back='backimage'.rand().time().'.jpg';
 $config['file_name'] = $ve_image_back;
 $this->upload->initialize($config);
$this->upload->do_upload('backimage');
//echo $this->upload->display_errors('<p>', '</p>');
			
			$add=array(
				'd1'=>$ve_image_front,
				'd2'=>$ve_image_back
		);
			$res=$this->db->update('kyc', $add, array('customer_id'=>$re->id));
			
			//echo $this->db->last_query();
			
			
			
			if($res==true)

			{
			
				echo '<script>alert("Your Driving Licence Successfully Uploded")</script>';

				redirect('kyc/passed','refresh');
				
				
			}
		
			
			
			else{
				
			$this->session->set_flashdata('error','vendor already there');
		}

}


public function idcard1(){
			extract($_POST);
			$date=date('y-m-d h:i:s');
			  $re=$this->session->userdata('userlogin');
 $config['upload_path'] = realpath(APPPATH . '../assets/passport/');
 $ve_image_front='frontimage'.rand().time().'.jpg';
$config['file_name'] = $ve_image_front;
$config['allowed_types'] = 'gif|jpg|png|pdf';

$this->load->library('upload', $config);

// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
$this->upload->initialize($config);
 $this->upload->do_upload('frontimage');
echo $this->upload->display_errors('<p>', '</p>');
  $ve_image_back='backimage'.rand().time().'.jpg';
 $config['file_name'] = $ve_image_back;
 $this->upload->initialize($config);
$this->upload->do_upload('backimage');
//echo $this->upload->display_errors('<p>', '</p>');

			$add=array(
				'i1'=>$ve_image_front,
				'i2'=>$ve_image_back
		);
			$res=$this->db->update('kyc', $add, array('customer_id'=>$re->id));
			if($res==true)
			{
				echo '<script>alert("Your ID Card Successfully Uploded")</script>';
				redirect('kyc/doc3','refresh');
				
				
			}
		
			
			
			else{
				
			$this->session->set_flashdata('error','vendor already there');
		}

}

public function user_photos(){

	$u=$this->session->userdata('userlogin')->vendorid;
$re=$this->db->get_where('vendorregister',  array('vendorid' =>$u))->row();
//print_r($_FILES);
$uphotos= $files = array();
foreach ($_FILES['ve_gallery'] as $k1 => $v1) {
	//print_r($v);
	foreach ($_FILES['ve_gallery'][$k1] as $k => $v) {
	$files[$k][$k1]=$v;

	}

}
//print_r($files);
foreach ($files as $v) {
	$_FILES['userfile']=$v;
$filename='gallery'.$re->vendorid.rand().'.jpg';

$config['upload_path'] = realpath(APPPATH . '../assets/gallery/');
$config['file_name'] = $filename;
$config['allowed_types'] = 'gif|jpg|png';
$config['overwrite'] = TRUE;
$this->load->library('upload', $config);

// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
//print_r($_FILES['userfile']);
$this->upload->initialize($config);
if($this->upload->do_upload()){
	$data = array(
		'image'=>$filename ,
'vendorid'=>$re->vendorid,
'status'=>'1'
		 );
	if ($this->db->insert('gallery',$data)) {
		$uphotos[]=$filename;
	}
//messege
	//echo "photo uploaded";
	$this->session->set_flashdata('photomsg', 'Suceessfully photoupload');
}else{
//message
	
	print_r($this->upload->display_errors());
	echo $this->upload->display_errors('<p>', '</p>');
	$this->session->set_flashdata('photomsgerror', 'Suceessfully loggedin');
}
}

//print_r($uphotos);

}

public function addvideo(){

	$u=$this->session->userdata('userlogin')->vendorid;
$re=$this->db->get_where('vendorregister',  array('vendorid' =>$u))->row();

extract($_POST);

$date=date('y-m-d h:i:s');

$add=array(
				
				'crdate'=>$date,
				'video_url'=>$video_url,
				'vendorid'=>$re->vendorid,
				'status'=>'1'
			);
$res=$this->db->insert('video', $add);

//echo $this->db->last_query();
			if($res==true)

			{

				
echo '<script>alert("sucessful Add videos ")</script>';
            
       

			
			}
			
		
			
			else{
				
			$this->session->set_flashdata('error','courses already there');
		}

}

public function facilities(){

	$u=$this->session->userdata('userlogin')->vendorid;
$re=$this->db->get_where('vendorregister',  array('vendorid' =>$u))->row();

extract($_POST);
//print_r($_POST);

$date=date('y-m-d h:i:s');

$add=array(
				
				've_sports'=>$ve_sports,
				've_classes'=>$ve_classes,
				've_transport'=>$ve_transport,
				've_medical'=>$ve_medical,
				've_libraary'=>$ve_libary,
				've_computer'=>$ve_computers,
				've_hostel'=>$ve_hostel,
				
				'status'=>'1'
			);
$res=$this->db->update('vendorregister',$add, array('vendorid'=>$re->vendorid));

echo $this->db->last_query();
			if($res==true)

			{

				
echo '<script>alert("sucessful Update facilities ")</script>';
            
       

			
			}
			
		
			
			else{
				
			$this->session->set_flashdata('error','courses already there');
		}

}

public function courses(){

	$u=$this->session->userdata('userlogin')->vendorid;
$re=$this->db->get_where('vendorregister',  array('vendorid' =>$u))->row();

extract($_POST);

$date=date('y-m-d h:i:s');

$add=array(
				
				'crdate'=>$date,
				'courses'=>$courses_name,
				'fee'=>$coursesfee,
				'durations'=>$courses_durations,
				'vendorid'=>$re->vendorid,
				'status'=>'1'
			);
$res=$this->db->insert('courses', $add);

//echo $this->db->last_query();
			if($res==true)

			{

				
echo '<script>alert("sucessful Add courses ")</script>';
            
       

			
			}
			
		
			
			else{
				
			$this->session->set_flashdata('error','courses already there');
		}

}

	public function logo()
		{
			extract($_POST);
			$date=date('y-m-d h:i:s');
			  $u=$this->session->userdata('userlogin')->vendorid;
$re=$this->db->get_where('vendorregister',  array('vendorid' =>$u))->row();
 


$img=$fname='logo'.rand().time().'.jpg';
		
			
				$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			
			$add=array(
				'crdate'=>$date,
				've_logo'=>$img,
				'vendorid'=>$re->vendorid,
			
				
				);
			$res=$this->db->insert('logo',$add);
			//echo $this->db->last_query();
			if($res==true)

			{
				$config['file_name']  = $fname;
				$image_path = realpath(APPPATH . '../assets/client/');

			   $config['upload_path'] = $image_path;
			   //$config['create_thumb'] = TRUE;
$config['maintain_ratio'] = FALSE;


$this->load->library('image_lib', $config);

$this->image_lib->resize();

				//$config['upload_path']=APPPATH.'../uploads/';
				$config['allowed_types']='gif|jpeg|jpg|png';
				$this->load->library('upload',$config);
				$this->upload->do_upload('ve_logo');
				$this->upload->data();
				//echo $config['upload_path'];

				echo '<script>alert("sucessful Add banner")</script>';

				redirect('vdetail/document','refresh');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','category already there');
		}


}

public function updatelogo()
{
	 $u=$this->session->userdata('userlogin')->vendorid;
	 $re=$this->db->get_where('vendorregister',array('vendorid' =>$u))->row();
	extract($_POST);
	$img=$fname='logo'.rand().time().'.jpg';
	$nm=$_FILES['ve_logo']['name'];

	$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			if($nm!=""){
				$gt=$this->db->get_where('logo',array('vendorid'=>$re->vendorid))->row();
				echo $this->db->last_query();
				@$del="assets/client/".$gt->ve_logo;
	            @unlink($del);
			$add=array(
				'crdate'=>$date,
				've_logo'=>$img,
				'vendorid'=>$re->vendorid,
			
				
				);
			$res=$this->db->update('logo',$add, array('vendorid'=>$re->vendorid));
			//echo $this->db->last_query();
			if($res==true)

			{
				$config['file_name']  = $fname;
				$image_path = realpath(APPPATH . '../assets/client/');

		 $config['upload_path'] = $image_path;
			   //$config['create_thumb'] = TRUE;
$config['maintain_ratio'] = FALSE;
$config['overwrite'] = TRUE;

$this->load->library('image_lib', $config);

$this->image_lib->resize();

				//$config['upload_path']=APPPATH.'../uploads/';
				$config['allowed_types']='gif|jpeg|jpg|png';
				$this->load->library('upload',$config);
				$this->upload->do_upload('ve_logo');
				$this->upload->data();
				//echo $config['upload_path'];

				echo '<script>alert("sucessful update")</script>';

				//redirect('vdetail/document','refresh');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','homebanner already there');
		}
}
else{
	$add=array('crdate'=>$date,
				
				'vendorid'=>$re->vendorid,
				
			
				
				);
			$res=$this->db->update('logo',$add, array('vendorid'=>$re->vendorid));
			//echo $this->db->last_query();
			if($res==true)

			{
				

					echo '<script>alert("sucessful update")</script>';

				redirect('vdetail/document','refresh');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','homebanners already there');
		}

}


}



public function banner()
		{
			extract($_POST);
			$date=date('y-m-d h:i:s');
			  $u=$this->session->userdata('userlogin')->vendorid;
$re=$this->db->get_where('vendorregister',  array('vendorid' =>$u))->row();
 

 $config['upload_path'] = realpath(APPPATH . '../assets/client/');
 $ve_image_banner1='onebanner'.rand().time().'.jpg';
$config['file_name'] = $ve_image_banner1;
$config['allowed_types'] = 'gif|jpg|png|pdf';


$this->load->library('upload', $config);

// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
$this->upload->initialize($config);
 $this->upload->do_upload('ve_image_banner1');
//echo $this->upload->display_errors('<p>', '</p>');
  
//echo $this->upload->display_errors('<p>', '</p>');




		
	


			
			
			$add=array(
				
				
				'crdate'=>$date,
				've_banner'=>$$ve_image_banner1,
				
		);
			$res=$this->db->insert('banner', $add);
			
			//echo $this->db->last_query();
			
			
			
			if($res==true)

			{
			
				echo '<script>alert("sucessful Add banner")</script>';

				redirect('vdetail/document','refresh');
				
				
			}
		
			
			
			else{
				
			$this->session->set_flashdata('error','vendor already there');
		}

}

public function pdf()
		{
			extract($_POST);
			$date=date('y-m-d h:i:s');
			  $u=$this->session->userdata('userlogin')->vendorid;
$re=$this->db->get_where('vendorregister',  array('vendorid' =>$u))->row();
 

 $config['upload_path'] = realpath(APPPATH . '../assets/client/');
 $ve_image_pdf='onebanner'.rand().time().'.jpg';
$config['file_name'] = $ve_image_pdf;
$config['allowed_types'] = 'gif|jpg|png|pdf';


$this->load->library('upload', $config);

// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
$this->upload->initialize($config);
 $this->upload->do_upload('ve_image_pdf');
//echo $this->upload->display_errors('<p>', '</p>');
  
//echo $this->upload->display_errors('<p>', '</p>');




		
	


			
			
			$add=array(
				
				
				'crdate'=>$date,
				've_image_pdf'=>$ve_image_pdf,
				
		);
			$res=$this->db->insert('logo', $add);
			
			//echo $this->db->last_query();
			
			
			
			if($res==true)

			{
			
				echo '<script>alert("sucessful Add banner")</script>';

				redirect('vdetail/document','refresh');
				
				
			}
		
			
			
			else{
				
			$this->session->set_flashdata('error','vendor already there');
		}

}

}