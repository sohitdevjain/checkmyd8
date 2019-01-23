<?php
// ob_start();
// error_reporting(0);
date_default_timezone_set('Asia/Calcutta'); 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	 {
	    parent::__construct();
	    $this->load->model('Generalmodel');
	    $this->load->library('Ajax_pagination'); 
	    $this->load->library('form_validation');
	    $this->load->helper('general_helper');
		
	 }
	 
	 private function checkAuth(){ 
	
		 if(!isUserLoggedIn())
			redirect('Home');
	  
    }
	
	
	
	 public function logout()
	{
		$this->session->unset_userdata($_SESSION['user_information']);
        $this->session->sess_destroy();
        redirect(site_url());
	}


	public function index()
	{
		$data=array();
		$this->load->view('index',$data);
	}
	
	public function saveProfile(){
		$this->form_validation->set_rules('your_name','your_name','trim|required');
		$this->form_validation->set_rules('date_of_birth','date_of_birth','trim|required');
		$this->form_validation->set_rules('your_email','your_email','trim|required');
		$this->form_validation->set_rules('create_password','create_password','trim|required');
		if($this->form_validation->run()== TRUE)
		{
			
			$create_password=md5($this->input->post('create_password'));
			$your_email=$this->input->post('your_email');
			$date_of_birth=date("Y-m-d",strtotime($this->input->post('date_of_birth')));
			$your_name=$this->input->post('your_name');
			
			$result=$this->generalmodel->getSingleRowById('register','email', $your_email);
			if(!empty($result))
			{
				$this->session->set_flashdata('error_msg','Email id Already Exist !');
				$this->session->set_flashdata('signup_menu','Email id Already Exist !');
				redirect(site_url());
			}
			else{
				  $userData=array(
					'username'=>$your_name,
					'email'=>$your_email,
					'password'=>$create_password,
					'dob'=>$date_of_birth,
					'step'=>1
				  );
				  $rowId=$this->generalmodel->add('register', $userData);
				  if($rowId>0){
					  $row=array(
						'id'=>$rowId,
						'username'=>$your_name,
						'step'=>1,
						'logged_in'=>TRUE,
						);	
					$this->session->set_userdata('user_information',$row);						
					redirect('create-profile');
				  }else{
						$this->session->set_flashdata('error_msg','Please Try Again');
						redirect(site_url()); 
				  }
			}
		}
	}
	
	public function createProfile(){
		if ($this->session->userdata('user_information')) {
			$user_info=$this->session->userdata('user_information');
			if($user_info['step']==1){
				$data=array();
				$data['username']=$user_info['username'];
				$this->load->view('create-profile',$data);
			}else{
				redirect(site_url()); 	
			}
		}else{
			redirect(site_url()); 
		}
	}
	
	
	/*-------------------------------login----------------------------------------------------*/

	public function signIn()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run()==TRUE)
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$result=$this->generalmodel->loginFront($username,$password);
			if($result['status'])
			{
				if ($this->session->userdata('user_information')) {
					$user_info=$this->session->userdata('user_information');
					if($user_info['step']==4){
						redirect('profile');
					}else if($user_info['step']==1){
						redirect('add-profile');
					}else if($user_info['step']==2){
						redirect('primary-user-profile');
					}else if($user_info['step']==3){
						redirect('primary-user-profile-creation');
					}else{
						redirect(site_url());
					}
				}else{
					redirect(site_url());
				}
			}
			else{
				  $this->session->set_flashdata('signin_menu',"Invalid Username And Password !");
				  $this->session->set_flashdata('error_msg',"Invalid Username And Password !");
				  redirect(site_url());
			}	
		}else{
		
		}
			   
	}
	
	public function addProfile(){
		if ($this->session->userdata('user_information')) {
			$user_info=$this->session->userdata('user_information');
			if($user_info['step']==1){
				$data=array();
				$data['username']=$user_info['username'];
				$this->load->view('add-profile',$data);
			}else{
				redirect(site_url()); 	
			}
		}else{
			redirect(site_url()); 
		}
	}
	
	public function addUserProfile(){
		$this->checkAuth();
		$this->form_validation->set_rules('f_name','f_name','trim|required');
		$this->form_validation->set_rules('l_name','l_name','trim|required');
		$this->form_validation->set_rules('ph_number','ph_number','trim|required');
		$this->form_validation->set_rules('age','age','trim|required');
		$this->form_validation->set_rules('gender','gender','trim|required');
		$this->form_validation->set_rules('location','location','trim|required');
		if($this->form_validation->run()== TRUE)
		{
			$user_info=$this->session->userdata('user_information');
			$f_name=$this->input->post('f_name');
			$l_name=$this->input->post('l_name');
			$ph_number=$this->input->post('ph_number');
			$age=$this->input->post('age');
			$gender=$this->input->post('gender');
			$location=$this->input->post('location');
			
			  $userData=array(
				'fname'=>$f_name,
				'lname'=>$l_name,
				'mobile'=>$ph_number,
				'age'=>$age,
				'gender'=>$gender,
				'location'=>$location,
				'step'=>2,
			  );
			  $rowId=$this->generalmodel->modify('register','id',$user_info['id'],$userData);
			  if($rowId>0){
				  $row=array(
					'id'=>$user_info['id'],
					'username'=>$user_info['username'],
					'logged_in'=>TRUE,
					'step'=>2,
					'email_verify'=>$user_info['email_verify']
					);	
				$this->session->set_userdata('user_information',$row);		
				redirect('primary-user-profile');
			  }else{
				echo "Fail"; 
			  }
			
		}
	}
	
	public function primaryUserProfile(){
		$this->checkAuth();
		$user_info=$this->session->userdata('user_information');
		if($user_info['step']==2){
				$data=array();
				$data['username']=$user_info['username'];
				$this->load->view('primary-user-profile',$data);
		}else{
			redirect(site_url()); 	
		}
		
	}
	
	public function savePrimaryProfile(){
		$this->checkAuth();
		$this->form_validation->set_rules('facebook_id','facebook_id','trim|required');
		if($this->form_validation->run()== TRUE)
		{
			$user_info=$this->session->userdata('user_information');
			$facebook_id=$this->input->post('facebook_id');
			$twitter_id=$this->input->post('twitter_id');
			$instagram_id=$this->input->post('instagram_id');
			$tinder_id=$this->input->post('tinder_id');
			
			$config['upload_path'] = './user-uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['encrypt_name']=true;
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('file'))
			{
				
				$this->session->set_flashdata('error_msg',$this->upload->display_errors());
				redirect(site_url('primary-user-profile'));
			}
			else
			{
				$uploaddata = $this->upload->data();
				$image=$uploaddata['file_name'];
				$userData=array(
					'facebook_id'=>$facebook_id,
					'twitter_id'=>$twitter_id,
					'instagram_id'=>$instagram_id,
					'tinder_id'=>$tinder_id,
					'image'=>$image,
					'step'=>3,
				  );
				  $rowId=$this->generalmodel->modify('register','id',$user_info['id'],$userData);
				  if($rowId>0){
					   $row=array(
					'id'=>$user_info['id'],
					'username'=>$user_info['username'],
					'logged_in'=>TRUE,
					'step'=>3,
					'email_verify'=>$user_info['email_verify'],
					'approve'=>0,
					);	
				$this->session->set_userdata('user_information',$row);	
					redirect('primary-user-profile-creation');
				  }else{
					echo "Fail"; 
				  }
			}
			
			 
			
		}else{
				$this->session->set_flashdata('error_msg','Please Fill All Mandatory Fields !');
				redirect(site_url('primary-user-profile'));
		}
	}
	
	public function primaryUserProfileCreation(){
		$this->checkAuth();
		$user_info=$this->session->userdata('user_information');
		if($user_info['step']==3){
				$data=array();
				$data['username']=$user_info['username'];
				$this->load->view('primary-user-profile-creation',$data);
		}else{
			redirect(site_url()); 	
		}
		
	}
	
	public function saveUserProfileCreation(){
		$this->checkAuth();
		$this->form_validation->set_rules('is_married','is_married','trim');
		if($this->form_validation->run()== TRUE)
		{
			$user_info=$this->session->userdata('user_information');
			$config['upload_path'] = './user-uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['encrypt_name']=true;
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('file'))
			{
				
				$this->session->set_flashdata('error_msg',$this->upload->display_errors());
				redirect(site_url('primary-user-profile-creation'));
			}
			else
			{
				$uploaddata = $this->upload->data();
				$identity=$uploaddata['file_name'];
				
				$is_married=0;
				if($this->input->post('is_married')){
					$is_married=1;
				}
				
				$is_personal_acc=0;
				if($this->input->post('is_personal_acc')){
					$is_personal_acc=1;
				}
				
				$is_active_employment=0;
				if($this->input->post('is_active_employment')){
					$is_active_employment=1;
				}
				
				$personal_vehicle=0;
				if($this->input->post('personal_vehicle')){
					$personal_vehicle=1;
				}
				
				$has_children=0;
				if($this->input->post('has_children')){
					$has_children=1;
				}
				
				$religious_beliefs=0;
				if($this->input->post('religious_beliefs')){
					$religious_beliefs=1;
				}
				
				$ever_cheated=0;
				if($this->input->post('ever_cheated')){
					$ever_cheated=1;
				}
				
				$health_issue=0;
				if($this->input->post('health_issue')){
					$health_issue=1;
				}
				
				
				
				$userData=array(
					'is_married'=>$is_married,
					'is_personal_acc'=>$is_personal_acc,
					'is_active_employment'=>$is_active_employment,
					'personal_vehicle'=>$personal_vehicle,
					'has_children'=>$has_children,
					'religious_beliefs'=>$religious_beliefs,
					'ever_cheated'=>$ever_cheated,
					'health_issue'=>$health_issue,
					'identity_image'=>$identity,
					'step'=>4,
				  );
				  $rowId=$this->generalmodel->modify('register','id',$user_info['id'],$userData);
				  if($rowId>0){
					   $row=array(
					'id'=>$user_info['id'],
					'username'=>$user_info['username'],
					'logged_in'=>TRUE,
					'step'=>4,
					'email_verify'=>$user_info['email_verify'],
					'approve'=>0,
					);	
				$this->session->set_userdata('user_information',$row);	
					redirect('profile');
				  }else{
					echo "Fail"; 
				  }
			}
			
			 
			
		}else{
				$this->session->set_flashdata('error_msg','Please Fill All Mandatory Fields !');
				redirect(site_url('primary-user-profile'));
		}
	}
	 
	public function profile(){
		$this->checkAuth();
		$user_info=$this->session->userdata('user_information');
		$data=array();
		$data['userDetail']=$this->generalmodel->getSingleRowById('register','id',$user_info['id']);
		$data['username']=$user_info['username'];
		$this->load->view('primary-user-profile-pending',$data);
		
	} 
	
	
	public function searchMemberData(){
		$response=array();
		if(isset($_POST['s_keyword'])){
			$s_keyword=$_POST['s_keyword'];
			
			$sql="select * from register where `status`='0' AND ( `username` like '".$s_keyword."%' OR `fname` like '".$s_keyword."%' OR `lname` like '".$s_keyword."%' OR `location` like '".$s_keyword."%' OR `email` like '".$s_keyword."%')";          	   
			$record=$this->db->query($sql); 
			$result=$record->result();
			if(!empty($result)){
				$ress="";
				foreach($result as $res){
					$ress.='<li><a href="#">'.$res->username.'</a></li>';
/*
$ress.='<div class="row align-items-center border-btm"><div class="col-6 offset-md-3 text-center"><a href="http://impulsewebsystems.com/checkmyd8/NSI-verified-profile.php"><div class="top-search-content pdt17"><img src="img/Avatar.png" class="client-im"><div class="top-search-info"><h2>Jordan Powell <img src="img/icons/verified_profile.svg"></h2><div class="rting"><p> Rating </p><img src="img/icons/rating_icon_active.svg"><img src="img/icons/rating_icon_active.svg"><img src="img/icons/rating_icon_active.svg"><img src="img/icons/rating_icon_active.svg"><img src="img/icons/rating_icon_active.svg"><img src="img/icons/rating_icon_active.svg"><img src="img/icons/rating_icon_active.svg"></div><div class="age-location"><span><img src="img/icons/age_light_btn.svg"> 22</span><span><img src="img/icons/location_light_btn.svg"> London, UK</span></div></div><img src="img/icons/pocket.svg" class="arrow-ro"></div></a></div></div>';
*/					
				}
				
				
				
				
				$response['status']=true;
				$response['result']=$ress;
			}else{
				$response['status']=false;
				$response['result']="No Record Found";
			}
		}else{
			$response['status']=false;
			$response['result']="No Record Found";
		}
		print_r(json_encode($response));
		
	}

	public function aboutus()
	{
		$data['aboutus']='active';
		$data['pageTitle']='aboutus';
		$data['contact']=$this->generalmodel->get_record('contactus',array('status'=>1));
		$data['about']=$this->generalmodel->get_resultbyrendom('aboutus',1);
		$this->load->view('about_us',$data);
	}

	
	public function faq()
	{
		$data['faq']='active';
		$data['pageTitle']='faq';
		$data['faq']=$this->generalmodel->get_record('faq',array('status'=>1));
		$data['contact']=$this->generalmodel->get_record('contactus',array('status'=>1));
		 if(!isUserLoggedIn()){
			$this->load->view('header',$data);
		 }else{
			 $this->load->view('after_login_header',$data);
		 }
		$this->load->view('faq',$data);
	}

    
	
	

/*-------------Change password------------------*/
public function changepassword()
{
	$this->form_validation->set_rules('id','Id','required');
	$this->form_validation->set_rules('old_password','Old Password','trim|required');
	$this->form_validation->set_rules('new_password1','New Password','trim|required');
	$this->form_validation->set_rules('new_password2','Confirm Password','trim|required|matches[new_password1]');
	if($this->form_validation->run()==TRUE)
	{
		$id=$this->input->post('id');
		$oldpassword=$this->input->post('old_password');
		$new_password1=$this->input->post('new_password1');
        $new_password2=$this->input->post('new_password2');
    	$str=$this->generalmodel->get_record('register',array('id'=>$id,'password'=>$oldpassword));

    	if($str)
    	{
    		if($new_password1 != $new_password2)
    		{
    			echo "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>New Password And Confirm Password Does Not Matched!!</strong>.</div>";
    		}else
    		{
    			$ert=$this->generalmodel->modifyMulti('register',array('id'=>$id),array('password'=>$new_password1));
    		
    				echo "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Password Change   Successfully!!</strong>.</div>";
    			
    		}
    	}else
    	{
    		echo "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Password Not Available!!</strong>.</div>";
    	}

	}else
	{
		echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
	}

}	

/*-----------------------------------End-------------------------------------------------*/	
}

