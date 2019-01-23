<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminManager extends CI_Controller {

	public function __construct()
	 {
	    parent::__construct();
	     $this->load->model('Generalmodel');
	     $this->load->library('Ajax_pagination'); 
	     $this->load->library('encrypt');
	     $this->load->helper('general_helper');
	          
	 }
	public function index()
	{
		$this->form_validation->set_rules('password','password','trim|required');
		$this->form_validation->set_rules('username','username','trim|required');
		if($this->form_validation->run()== TRUE)
		{
			
			$password=$this->input->post('password');
			$username=$this->input->post('username');
			$result=$this->generalmodel->login($username,md5($password));
			if($result['status'])
			{
			  redirect('AdminManager/dashboard');	
			}
			else{
				  $this->session->set_flashdata('error_msg',$result['error_msg']);
				  redirect('AdminManager');
			}
		}
		
		$this->load->view('admin/index');
	}
	public function logout()
	{
		$this->session->unset_userdata($_SESSION['superadmin_info']);
        $this->session->sess_destroy();
        redirect('AdminManager');

	}


	private function checkAuth(){ 
	
		 if(!isAdminLoggedIn())
			redirect('AdminManager');
	  
    }


	public function dashboard()
	{
		$this->checkAuth();
		$data['dashboard']='active';
		$data['pageTitle']='Dashboard';
	    $data['user']=$this->generalmodel->record_count('register',array('email_verify'=>1));
	    $data['trade']=$this->generalmodel->record_count('post_trade');
	    $data['trans']=$this->generalmodel->record_count('bitcointrnasaction');
		$this->load->view('admin/dashboard',$data);
	}

	public function users(){
		$this->checkAuth();
		$data['user']=$this->generalmodel->getRowByWhere('register',array('status'=>0));
		$data['users']='active';
		$data['pageTitle']='Users';
		$this->load->view('admin/users',$data);
	}
	public function userdetails($uid=0){
		$this->checkAuth();
		$data['user']=$this->generalmodel->getSingleRowById('register','id',$uid);
		$data['users']='active';
		$data['pageTitle']='Users';
		$this->load->view('admin/userdetails',$data);
	
	}
	
	public function changeUserStatus(){
		if(isset($_POST['newststus'])){
			$uid=$_POST['newststus'];
			$userData=$this->generalmodel->getSingleRowById('register','id',$uid);
			if(!empty($userData)){
				$cur_status=$userData->approve;
				$nst=0;
				if($cur_status==0){
					$nst=1;
				}else{
					$nst=0;
				}
				$userData=array(
					'approve'=>$nst
				);
			  $rowId=$this->generalmodel->modify('register','id',$uid,$userData);
			  if($rowId>0){
				  echo "SUCCESS";
			  }else{
				  echo "FAIL";
			  }
				
			}else{
				 echo "FAIL";
			}
			
		}else{
			 echo "FAIL";
		}
	}
	
	public function userdetail($id)
	{
		$this->checkAuth();
		$data['users']='active';
		$data['pageTitle']='Users';
		 $did=decode_id($id,'id');
	     $data['stre']=$this->generalmodel->get_record('post_trade',array('user_id'=>$did,'status'=>1));
	     $data['request']=$this->generalmodel->get_record('trade_request',array('uid'=>$did));
	     $data['payment']=$this->generalmodel->get_record('trade_payment',array('uid'=>$did));
	     $data['user']=$this->generalmodel->get_record('register',array('id'=>$did));
	 
	     $data['id']=$did;
	     $userd=$data['user'];
	     if(!empty($userd)){
	     $data['details']=$this->generalmodel->get_record('bitcointrnasaction',array('address'=>$userd[0]['btc_address']));
	     $this->load->view('admin/userdetail',$data);
	     }
        
	}


	public function testimonial(){
		$this->checkAuth();
		$data['testimonial_menu']='active';
		$data['pageTitle']='Testimonial';
		$this->load->view('admin/testimonial',$data);
	}


	public function testimonial_page(){

		$page=$this->input->post('page');
        if(!$page)
        {
            $offset = 0;
        }else
        {
            $offset = $page;
        }
  
        $rowscount=$this->generalmodel->record_count('testimonial',array('status'=>1));
        $url="AdminManager/testimonial_page";        
        $data['testimonial'] =$this->generalmodel->get_all_record('testimonial',array('status'=>1),$order='',$type="",$limit=8,$offset);
        ajaxpagination($url,$rowscount,2);
        echo json_encode(array("success"=>true,"data"=>$this->load->view('admin/testimonial_page',$data,true)));
	
	}

	public function addtestimonial(){
		$this->checkAuth();
		$data['testimonial_menu']='active';
		$data['pageTitle']='Testimonial';
		$this->load->view('admin/addtestimonial',$data);
	}
	public function edittestimonial($id)
	{
		$this->checkAuth();
		$data['testimonial_menu']='active';
		$data['pageTitle']='Testimonial';
		 $did=decode_id($id,'id');
		$data['test']=$this->generalmodel->get_record('testimonial',array('id'=>$did,'status'=>1),'','','id DESC');
		$this->load->view('admin/edittestimonialform',$data);
		
	}
	public function contact()
	{
		$this->checkAuth();
		$data['contact']='active';
		$data['pageTitle']='contact';
		
		$this->load->view('admin/contactus',$data);
		
	}


	public function contact_details()
	{
		$page=$this->input->post('page');
        if(!$page)
        {
            $offset = 0;
        }else
        {
            $offset = $page;
        }
  
        $rowscount=$this->generalmodel->record_count('contact',array('status'=>1));
        $url="AdminManager/contact_details";        
        $data['contact'] =$this->generalmodel->get_all_record('contact',array('status'=>1),$order='',$type="",$limit=8,$offset);
        ajaxpagination($url,$rowscount,2);
        echo json_encode(array("success"=>true,"data"=>$this->load->view('admin/contact_details',$data,true)));
	}


	public function contactus()
	{
		$this->checkAuth();
		$data['contactus']='active';
		$data['pageTitle']='contactus';
		$data['contact']=$this->generalmodel->get_record('contactus',array('status'=>1),'','','id DESC');
		$this->load->view('admin/contact',$data);
	}


	public function addcontact($id)
	{
		$this->checkAuth();
		$data['contactus']='active';
		$data['pageTitle']='contactus';
		$did=decode_id($id,'id');
		$data['contact']=$this->generalmodel->get_record('contactus',array('status'=>1,'id'=>$did),'id DESC');
		$this->load->view('admin/addcontactus',$data);
	}


	public function faqestion()
	{
		$this->checkAuth();
		$data['faqestion']='active';
		$data['pageTitle']='faqestion';
		$this->load->view('admin/faq',$data);
	}
    

    public function faqestion_details()
    {

    	$page=$this->input->post('page');
        if(!$page)
        {
            $offset = 0;
        }else
        {
            $offset = $page;
        }
  
        $rowscount=$this->generalmodel->record_count('faq',array('status'=>1));
        $url="AdminManager/faqestion_details";        
        $data['faq'] =$this->generalmodel->get_all_record('faq',array('status'=>1),$order='',$type="",$limit=8,$offset);
        ajaxpagination($url,$rowscount,2);
        echo json_encode(array("success"=>true,"data"=>$this->load->view('admin/faqestion_details',$data,true)));
    }

    public function addfaq()
    {
    	$this->checkAuth();
		$data['faqestion']='active';
		$data['pageTitle']='faqestion';
		$this->load->view('admin/addfaq');
    }

    public function posttrade()
    {
    	$this->checkAuth();
		$data['posttrade']='active';
		$data['pageTitle']='posttrade';
		$data['post']=$this->generalmodel->get_record('post_trade',array('status'=>1));
		$this->load->view('admin/posttrade',$data);
    }

    public function editfaq($id)
    {
    	$this->checkAuth();
		$data['faqestion']='active';
		$data['pageTitle']='faqestion';
		$did=decode_id($id,'id');
		$data['faq']=$this->generalmodel->get_record('faq',array('status'=>1,'id'=>$did));
		$this->load->view('admin/editfaqquestion',$data);
    }
    public function transactionfee()
    {
    	$this->checkAuth();
		$data['transactionfee']='active';
		$data['pageTitle']='Transactionfee';
		$data['fees']=$this->generalmodel->fetch_user('transactionfee','1','0');
		$this->load->view('admin/transactionfee',$data);
    }
	public function editfees(){
		$this->checkAuth();
		$data['transactionfee']='active';
		$data['pageTitle']='Transactionfee';
	    $id=$this->input->post('id');


	    $data['feess']=$this->generalmodel->get_record('transactionfee',array('id'=>$id));
	    $page=$this->load->view('admin/fees',$data,true);
	    echo json_encode(array('page'=>$page));
	}
   public function view($id)
   {
    	$this->checkAuth();
		 $data['posttrade']='active';
		 $data['pageTitle']='posttrade';
         $did=decode_id($id,'id');
        
	     $data['stre']=$this->generalmodel->get_record('post_trade',array('id'=>$did,'status'=>1));
	     $data['request']=$this->generalmodel->get_record('trade_request',array('trade_id'=>$did));
	     $data['payment']=$this->generalmodel->get_record('trade_payment',array('trade_id'=>$did));
	     $this->load->view('admin/posttradeview',$data);
        
    }
    public function changeuserpassword()
    {
    	$this->checkAuth();
		$data['users']='active';
		$data['pageTitle']='Users';
	    $id=$this->input->post('id');
	    $data['user']=$this->generalmodel->get_record('register',array('id'=>$id));
	    $page=$this->load->view('admin/changepassword',$data,true);
	    echo json_encode(array('page'=>$page));

    }
    public function transaction()
    {
    	$this->checkAuth();
		$data['transaction']='active';
		$data['pageTitle']='Transaction';
		$data['btctransaction']=$this->generalmodel->get_resultbyrendom('bitcointrnasaction',5);
		$this->load->view('admin/transactionbtc',$data);
    }

    public function btcheading()
    {
    	$this->checkAuth();
		$data['btcheading']='active';
		$data['pageTitle']='Btcheading';
		$data['heading']=$this->generalmodel->get_resultbyrendom('locaincoin_heading',5);
		$this->load->view('admin/heading',$data);
    }
    public function editbtcheading()
    {
    	$this->checkAuth();
		$data['btcheading']='active';
		$data['pageTitle']='Btcheading';
	    $id=$this->input->post('id');
	    $data['head']=$this->generalmodel->get_record('locaincoin_heading',array('id'=>$id));
	    $page=$this->load->view('admin/topheading',$data,true);
	    echo json_encode(array('page'=>$page));
    }
    public function ourPartners()
    {
    	$this->checkAuth();
		$data['partners']='active';
		$data['pageTitle']='Partners';
		$this->load->view('admin/our_partners',$data);
    }
    	public function partners_page(){

		$page=$this->input->post('page');
        if(!$page)
        {
            $offset = 0;
        }else
        {
            $offset = $page;
        }
  
        $rowscount=$this->generalmodel->record_count('our_partners',array('status'=>1));
        $url="AdminManager/partners_page";        
        $data['partner'] =$this->generalmodel->get_all_record('our_partners',array('status'=>1),$order='',$type="",$limit=8,$offset);
        ajaxpagination($url,$rowscount,2);

        echo json_encode(array("success"=>true,"data"=>$this->load->view('admin/partners_page',$data,true)));
	
	}
	public function addOurPartner(){
		$this->checkAuth();
		$data['partners']='active';
		$data['pageTitle']='Partners';
	    $this->load->view('admin/addOurPartner',$data);
	   
	}
	public function work(){
		$this->checkAuth();
		$data['work']='active';
		$data['pageTitle']='work';
	    $page=$this->load->view('admin/addwork',$data);
	}

	public function work_page()
	{

		$page=$this->input->post('page');
        if(!$page)
        {
            $offset = 0;
        }else
        {
            $offset = $page;
        }
  
        $rowscount=$this->generalmodel->record_count('howitwork',array('status'=>1));
        $url="AdminManager/work_page";        
        $data['work'] =$this->generalmodel->get_all_record('howitwork',array('status'=>1),$order='',$type="",$limit=8,$offset);
        ajaxpagination($url,$rowscount,2);

        echo json_encode(array("success"=>true,"data"=>$this->load->view('admin/work_page',$data,true)));
	}

	public function edithowwork()
	{
		$this->checkAuth();
		$data['work']='active';
		$data['pageTitle']='Work';
	    $id=$this->input->post('id');
	    $data['works']=$this->generalmodel->get_record('howitwork',array('id'=>$id));
	    $page=$this->load->view('admin/edithowitwork',$data,true);
	    echo json_encode(array('page'=>$page));
	}

	public function addHowItWork()
	{
		$this->checkAuth();
		$data['work']='active';
		$data['pageTitle']='work';
	    $page=$this->load->view('admin/addhowork',$data);
	}

	public function editpartners($id)
	{
		$this->checkAuth();
		$data['partners']='active';
		$data['pageTitle']='Partners';
		$did=decode_id($id,'id');
		$data['partner']=$this->generalmodel->get_record('our_partners',array('id'=>$did));
	    $this->load->view('admin/editOurPartner',$data);
	}
	public function aboutCoin()
	{
		$this->checkAuth();
		$data['aboutCoin']='active';
		$data['pageTitle']='AboutCoin';
	    $page=$this->load->view('admin/viewAbout',$data);
	}
	public function about_page()
	{
		$page=$this->input->post('page');
        if(!$page)
        {
            $offset = 0;
        }else
        {
            $offset = $page;
        }
  
        $rowscount=$this->generalmodel->record_count('aboutcoin',array('status'=>1));
        $url="AdminManager/about_page";        
        $data['about'] =$this->generalmodel->get_all_record('aboutcoin',array('status'=>1),$order='',$type="",$limit=8,$offset);
        ajaxpagination($url,$rowscount,2);

        echo json_encode(array("success"=>true,"data"=>$this->load->view('admin/about_page',$data,true)));
	}

	public function editAboutCoins()
	{
		$this->checkAuth();
		$data['aboutCoin']='active';
		$data['pageTitle']='AboutCoin';
	    $id=$this->input->post('id');
	    $data['works']=$this->generalmodel->get_record('aboutcoin',array('id'=>$id));
	    $page=$this->load->view('admin/editaboutcoin',$data,true);
	    echo json_encode(array('page'=>$page));
	}

	public function addAboutCoin()
	{
		$this->checkAuth();
		$data['aboutCoin']='active';
		$data['pageTitle']='AboutCoin';
	    $page=$this->load->view('admin/addAbout',$data);
	}

	public function viewGuid()
	{
		$this->checkAuth();
		$data['viewGuid']='active';
		$data['pageTitle']='Guid';
	    $page=$this->load->view('admin/GuidView',$data);
	}
	public function guid_page()
	{
		$page=$this->input->post('page');
        if(!$page)
        {
            $offset = 0;
        }else
        {
            $offset = $page;
        }
  
        $rowscount=$this->generalmodel->record_count('guid',array('status'=>1));
        $url="AdminManager/guid_page";        
        $data['guid'] =$this->generalmodel->get_all_record('guid',array('status'=>1),$order='',$type="",$limit=8,$offset);
        ajaxpagination($url,$rowscount,2);

        echo json_encode(array("success"=>true,"data"=>$this->load->view('admin/guid_page',$data,true)));
	}

	public function addGuid()
	{
		$this->checkAuth();
		$data['viewGuid']='active';
		$data['pageTitle']='Guid';
	    $page=$this->load->view('admin/AddGuidView',$data);
	}

	public function editguid()
	{
		$this->checkAuth();
		$data['viewGuid']='active';
		$data['pageTitle']='Guid';
	    $id=$this->input->post('id');
	    $data['works']=$this->generalmodel->get_record('guid',array('id'=>$id));
	    $page=$this->load->view('admin/editguidfrm',$data,true);
	    echo json_encode(array('page'=>$page));
	}

	public function aboutUs()
	{
		$this->checkAuth();
		$data['aboutUs']='active';
		$data['pageTitle']='AboutUs';
		$data['about']=$this->generalmodel->get_resultbyrendom('aboutus',1);
	    $page=$this->load->view('admin/aboutUsview',$data);
	}

	public function editAboutview($id)
	{
		$this->checkAuth();
		$data['aboutUs']='active';
		$data['pageTitle']='AboutUs';
		$did=decode_id($id,'id');
		$data['about']=$this->generalmodel->get_record('aboutus',array('id'=>$did));
	    $page=$this->load->view('admin/editAboutUs',$data);
	}
	public function imageUploadPost()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('link','Link','required');
		if($this->form_validation->run()==TRUE){
			     //Check whether user upload picture
            if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['image']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            } 
            $data=array(
            		'partner_name'=>$this->input->post('name'),
            		'link'=>$this->input->post('link'),
            		'image'=>$picture,
            		'createdate'=>date('Y/m/d H:i:s'),
            		'status'=>1
            	);
            $str=$this->generalmodel->add('our_partners',$data);

            if($str){
            	 echo "Success";
            	 $this->session->set_flashdata('sucessUpdatetest','<div class="alert alert-success ">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Successfully Add Partners</strong>.
                </div>');
            	   //redirect('AdminManager/ourPartners');
            	    
            	}else{
            		   /*$this->session->set_flashdata('sucessUpdatetest','<div class="alert alert-dnager ">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Something Went Wrong</strong>.
                </div>');*/
                  echo "failed";
            	}
		}else{
			echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
		}
	


	
	}
	/*-----------------------------------------------------------------*/
	public function delrecommmul($id,$rd,$tbl)
	{
	// $pid=decode_id($id,'id');

	if($this->generalmodel->deleterecord($tbl,array('id'=>$id)))
	{
		
	$this->session->set_flashdata('success_msg','Record Delete Successfully');
	redirect("AdminManager/$rd","refresh");
	}
	else
	{
	$this->session->set_flashdata('error_msg','Something wrong try again...');
	}
	redirect("AdminManager/$rd","refresh");
	}
	/*-----------------------------------------------------------------*/

	public function addtestimonialfrom()
	{
		$this->form_validation->set_rules('client_name','Client Name','required');
	    $this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run()==TRUE)
		{

               //Check whether user upload picture
            if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['image']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            } 
           
                    $data=array(
								'client_name'=>$this->input->post('client_name'),
								'description'=>$this->input->post('description'),
								'image'=>$picture,
								'createdate'=>date('Y-m-d'),
								'status'=>1

					          );

                
                  $str=$this->generalmodel->add('testimonial',$data);
                 
                  if($str)
                  {
                  	echo "success";
                  	// echo "<div class='alert alert-success'>
                   //                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                   //                <strong>Testimonial Form Add Successfully!!</strong>.
                   //                </div>";
                $this->session->set_flashdata('sucessUpdatetest','<div class="alert alert-success ">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Successfully Add Testimonial</strong>.
                </div>');

                  }else{
                  			 echo "Something Went Wrong";
                  	   }	
		}else{
			echo "Something Went Wrong validation";
		}
	}
	/*------------------------------------------------------------------------------*/
	public function edittestimonialfrom()
	{
		$this->form_validation->set_rules('client_name','Client Name','required');
	    $this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run()==TRUE)
		{
			$id=$this->input->post('id');
               //Check whether user upload picture
            if(!empty($_FILES['image']['name']))
            {
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['image']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
                $data=array(
								'client_name'=>$this->input->post('client_name'),
								'description'=>$this->input->post('description'),
								'image'=>$picture,
								'createdate'=>date('Y-m-d'),
								'status'=>1

					          );
            }else{
                $data=array(
								'client_name'=>$this->input->post('client_name'),
								'description'=>$this->input->post('description'),
								'createdate'=>date('Y-m-d'),
								'status'=>1

					          );
            } 
           
                    
                
                  $stra=$this->generalmodel->updateservices('testimonial',$data,array('id'=>$id));
                  if($stra){
                  
                 
                $this->session->set_flashdata('sucessUpdatetest','<div class="alert alert-success ">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Testimonial Form Update Successfully!!</strong>.
                </div>');
                   }else{
                   	echo "failed";
                   }    

              
                 	
		}else{
			echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
		}
            
	}
	/*--------------------------------------------------------------------------------*/
	public function contactusform()
	{
		$this->form_validation->set_rules('email','Email','required');
	    $this->form_validation->set_rules('mobile','Mobile','required');
	    $this->form_validation->set_rules('address','Address','required');
	    if($this->form_validation->run()==TRUE)
	    {
	    	$id=$this->input->post('id');
	    	$data=array
				    	(
				    	'email'=>$this->input->post('email'),
				    	'mobile'=>$this->input->post('mobile'),
				    	'address'=>$this->input->post('address'),
				    	'createdate'=>date('Y-m-d'),
				    	'status'=>1
				    	);
			$str=$this->generalmodel->modifyMulti('contactus',array('id'=>$id),$data);
		       echo '<div class="alert alert-success ">
	                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	                <strong>Successfully Edit contact form</strong>.
	                </div>';
			
	    }else{
	    		echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
	    }
	}
	/*-------------------------------------------------------------------------------*/
	public function addfaqquestion()
	{
		$this->form_validation->set_rules('question','Question','required');
	    $this->form_validation->set_rules('answer','Answer','required');
	    if($this->form_validation->run()==TRUE)
	    {
	    	$data=array
				    	(
				    	'question'=>$this->input->post('question'),
				    	'answer'=>$this->input->post('answer'),
				    	'date'=>date('Y-m-d'),
				    	'status'=>1
				    	);
			$str=$this->generalmodel->add('faq',$data);
			if($str){


							$this->session->set_flashdata('sucessUpdatetest','<div class="alert alert-success ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Successfully Add Faq</strong>.
			                </div>');
			          
                    }else
                    {
                    	echo "<div class='alert alert-success'>
                                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                  <strong>Something Went Wrong!!</strong>.
                                  </div>";
                    }
			
	    }else{
	    		echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
	    }
	}

	public function delete($id,$table)
	{

       $delete=$this->generalmodel->deleterecord($table,array('id'=>$id));
          if($delete)
        {
          echo "Success";
        }
       else
        {
          echo "Error";
        }
	}
	/*---------------------------------------------------------------------------------*/
	public function editfaqquestion()
	{
		$this->form_validation->set_rules('question','Question','required');
		$this->form_validation->set_rules('answer','Answer','required');
		if($this->form_validation->run()==TRUE)
		{
			$id=$this->input->post('id');
			$data=array(
						'question'=>$this->input->post('question'),
						'answer'=>$this->input->post('answer'));
		
		$str=$this->generalmodel->modifyMulti('faq',array('id'=>$id),$data);
		
			echo '<div class="alert alert-success ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Successfully Edit Faq</strong>.
			                </div>';
		
	}else{
		echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
	}

	}
	/*----------------------------------------------------------------------------*/
	public function editfeesfrm()
	{
		$this->form_validation->set_rules('fees','Fees','required');
		if($this->form_validation->run()==TRUE)
		{
			$id=$this->input->post('id');
			$data=array('fees'=>$this->input->post('fees'));
			$str=$this->generalmodel->modifyMulti('transactionfee',array('id'=>$id),$data);
				echo '<div class="alert alert-success ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Successfully Edit Fees</strong>.
			                </div>';
			
		}else{
			echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
		}
	}
	/*------------------------------------------------------------------------------------------*/
	public function changepasswordfrm()
	{
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run()==TRUE)
		{
			$id=$this->input->post('id');
			$data=array(
				'password'=>md5($this->input->post('password'))
			);
			$str=$this->generalmodel->modifyMulti('register',array('id'=>$id),$data);
			if($str){
				echo '<div class="alert alert-success ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Password Changed Successfully</strong>.
			                </div>';
			            }else{
			            	echo '<div class="alert alert-danger ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Something Went Wrong</strong>.
			                </div>';
			            }
		}else{
			echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
		}
	}
	/*-------------------------------------------------------------------------------*/
	public function active()
	{
		$IdStatus=$this->input->post('status');
		$id=$this->input->post('id');
		$str=$this->generalmodel->get_record('register',array('status'=>$IdStatus));
		if($str)
		{
				if(!empty($str)){
				if($str[0]['status']==0)
						
		        {
		            $status_state = 1;
		        }
		        else
		        {
		            $status_state = 0;
		        }
		    	}
	   
			$sggk=$this->generalmodel->modifyMulti('register',array('id'=>$id),array('status'=>$status_state));
			
			if($sggk){
				echo 'updated successfully';
			}else{
				echo 'failed to update';
			}
		
		 }else{
		 	echo 'error';
		 }

	}

	public function edittitle()
	{
		$this->form_validation->set_rules('title','Title','required');
		if($this->form_validation->run()==TRUE)
		{
			$id=$this->input->post('id');
			$data=array(
				'title'=>$this->input->post('title'),
				'createdate'=>date('Y/m/d H:i:s')
			);
			$arr=$this->generalmodel->modifyMulti('locaincoin_heading',array('id'=>$id),$data);
			if($arr){
				echo '<div class="alert alert-success ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Title Update Successfully</strong>.
			                </div>';
			        }else{
			            		echo '<div class="alert alert-danger ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Something Went Wrong</strong>.
			                </div>';
			            }
		}else{
			echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
		}
	}
	public function editOurPartner()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('link','Link','required');
		if($this->form_validation->run()==TRUE){
			     //Check whether user upload picture
			$id=$this->input->post('id');
            if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['image']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
                    $data=array(
            		'partner_name'=>$this->input->post('name'),
            		'link'=>$this->input->post('link'),
            		'image'=>$picture,
            		'createdate'=>date('Y/m/d H:i:s'),
            		'status'=>1
            	);
                
            }else{
                 $data=array(
            		'partner_name'=>$this->input->post('name'),
            		'link'=>$this->input->post('link'),
            		'createdate'=>date('Y/m/d H:i:s'),
            		'status'=>1
            	);
            } 
           
            $str=$this->generalmodel->modifyMulti('our_partners',array('id'=>$id),$data);
            	
            echo "success";
            	
		}else{
			echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
		}
		
	}
	/*----------------------------------------------------------------------------*/
	public function addWork(){
		$this->form_validation->set_rules('heading','Heading','required');
		$this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run()==TRUE){
			$data=array
					(
						'heading'=>$this->input->post('heading'),
						'description'=>$this->input->post('description'),
						'createdate'=>date('Y/m/d H:i:s'),
						'status'=>1
                    );
                    $ster=$this->generalmodel->add('howitwork',$data);
                    if($ster){
                    	echo "success";
                    	$this->session->set_flashdata('sucessUpdatetest','<div class="alert alert-success ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Successfully Add </strong>.
			                </div>');

                    }else{
                    	echo "failed";
                    }
		}else{
			echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
		}

	}
	public function editHowItWorkFrm(){
		$this->form_validation->set_rules('heading','Heading','required');
		$this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run()==TRUE){
			$id=$this->input->post('id');
			$data=array
					(
						'heading'=>$this->input->post('heading'),
						'description'=>$this->input->post('description'),
						'createdate'=>date('Y/m/d H:i:s'),
						'status'=>1
                    );
                    $ster=$this->generalmodel->modifyMulti('howitwork',array('id'=>$id),$data);
                    if($ster){
                    	echo '<div class="alert alert-success ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Successfully Edit </strong>.
			                </div>';

                    }else{
                    	echo '<div class="alert alert-dnager ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Something Went Wrong</strong>.
			                </div>';
                    }
		}else{
			echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
		}
	}

	/*-------------------------------------------------------------------------------------------------*/
	public function addAboutIcoxCoin()
	{
		
		$this->form_validation->set_rules('heading','Heading','required');
		$this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run()==TRUE){
			
			$data=array
					(
						'heading'=>$this->input->post('heading'),
						'description'=>$this->input->post('description'),
						'createdate'=>date('Y/m/d H:i:s'),
						'status'=>1
                    );
                    $ster=$this->generalmodel->add('aboutcoin',$data);
                    if($ster){
                    	echo "success";
                    	$this->session->set_flashdata('sucessUpdatetest','<div class="alert alert-success ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Successfully Add </strong>.
			                </div>');

                    }else{
                    	echo "failed";
                    }
		}else{
			echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
		}
	}
	/*-----------------------------------------------------------------------------------------------*/
	public function editAboutCoin()
	{
		$this->form_validation->set_rules('heading','Heading','required');
		$this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run()==TRUE){
			$id=$this->input->post('id');
			$data=array
					(
						'heading'=>$this->input->post('heading'),
						'description'=>$this->input->post('description'),
						'createdate'=>date('Y/m/d H:i:s'),
						'status'=>1
                    );
                    $ster=$this->generalmodel->modifyMulti('aboutcoin',array('id'=>$id),$data);
                    if($ster){
                    echo '<div class="alert alert-success ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Successfully Edit </strong>.
			                </div>';


                    }else{
                    	echo '<div class="alert alert-dnager ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Something Went Wrong</strong>.
			                </div>';
                    }
		}else{
			echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
		}
	}
	/*--------------------------------------------------------------------------------------------------*/
public function addGuidfrm()
{
	$this->form_validation->set_rules('heading','Heading','required');
		$this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run()==TRUE){
			$data=array
					(
						'heading'=>$this->input->post('heading'),
						'description'=>$this->input->post('description'),
						'createdate'=>date('Y/m/d H:i:s'),
						'status'=>1
                    );
                    $ster=$this->generalmodel->add('guid',$data);
                    if($ster){
                    echo "success";
                    	$this->session->set_flashdata('sucessUpdatetest','<div class="alert alert-success ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Successfully Add </strong>.
			                </div>');


                    }else{
                    	echo "failed";
                    }
		}else{
			echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
		}
}

public function editguidfrmdata()
{
	$this->form_validation->set_rules('heading','Heading','required');
		$this->form_validation->set_rules('description','Description','required');
		if($this->form_validation->run()==TRUE){
			$id=$this->input->post('id');
			$data=array
					(
						'heading'=>$this->input->post('heading'),
						'description'=>$this->input->post('description'),
						'createdate'=>date('Y/m/d H:i:s'),
						'status'=>1
                    );
                    $ster=$this->generalmodel->modifyMulti('guid',array('id'=>$id),$data);
                    if($ster){
                   echo '<div class="alert alert-success ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Successfully Edit </strong>.
			                </div>';


                    }else{
                    	echo '<div class="alert alert-dnager ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Something Went Wrong</strong>.
			                </div>';
                    }
		}else{
			echo validation_errors("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>","</div>"); 
		}
}
/*--------------------------------------------------------------------------------------------------------------------*/
public function editAboutUsFrm()
{

			$id=$this->input->post('id');
			if(!empty($id)){
			$data=array
					(
						'about'=>$this->input->post('about'),
						'how_we_are_different'=>$this->input->post('different'),
						'mission'=>$this->input->post('mission'),
						'contact'=>$this->input->post('contact'),
						'createdate'=>date('Y/m/d H:i:s'),
						
                    );
                    $ster=$this->generalmodel->modifyMulti('aboutus',array('id'=>$id),$data);
                   
                    echo "success";
                     $this->session->set_flashdata('sucessUpdatetest','<div class="alert alert-success ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Successfully Edit </strong>.
			                </div>');

                   
                }else{
                	echo '<div class="alert alert-dnager ">
			                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                <strong>Something Went Wrong</strong>.
			                </div>';
                }
		
}

	
}

