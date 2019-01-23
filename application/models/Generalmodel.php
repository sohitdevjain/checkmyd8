<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Generalmodel extends CI_Model {


    public function __construct() {
        // Call the Model constructor
        parent::__construct();

    }

        
private $table_name	= 'admin_user';	
function login($username='', $password=''){
 
        $this->db->where('username', $username);   
		$this->db->where('password', $password);
	    $query=$this->db->from($this->table_name);			
		$query=$this->db->get();
 
	 if ($query->num_rows()===1) 
		{				
			$row=array(
						'id'=>$query->row()->id,
						'username'=>$query->row()->username,
						'logged_in'=>TRUE
						);						
						
						$this->session->set_userdata('superadmin_info',$row);
					    $msg['status']=TRUE;
						return $msg;
					
		}
		else{ 
						
						$msg['error_msg']='Invalid Username and password.';
                        $msg['status']=FALSE;
                        return $msg;
			}
} 

function loginFront($username='', $password=''){
        $this->db->where('username', $username);   
		$this->db->where('password', md5($password));
		$this->db->where('status', 0);
	    $query=$this->db->from('register');			
		$query=$this->db->get();
 
	 if ($query->num_rows()===1) 
		{				
			$row=array(
					'id'=>$query->row()->id,
					'username'=>$query->row()->username,
					'logged_in'=>TRUE,
					'step'=>$query->row()->step,
					'email_verify'=>$query->row()->email_verify,
					'approve'=>$query->row()->approve
					);	
				$this->generalmodel->modify('register','id', $query->row()->id,array('last_login'=>date('Y-m-d H:i:s')));
				$this->session->set_userdata('user_information',$row);						
				$msg['status']=TRUE;
				return $msg; 
					
		}
		else{ 						
				$msg['error_msg']='Invalid Username or Password.';
				$msg['status']=FALSE;
				return $msg;
			}
}

        public function record_count($table,$where='') 
        {
            if($where!=''){
               $count= $this->db->where($where)->count_all_results($table);
            }else{
                $count = $this->db->count_all($table,$where);
            }
            return $count;
        }
         function findAll($table)
         {
	         return $this->db->get($table)->result_array();
         }


 public function fetch_user($table,$limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get($table);
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result_array() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
    }
function userLogin($contact='',$tablename=''){

	$this->db->where('contact', $contact);
$this->db->where('status',0);

	$query=$this->db->from($tablename);			
	$query=$this->db->get();
	if ($query->num_rows()===1) 
	{	
		if($query->row()->approve==1){

			$otp=rand(10000,99999);
				
$this->modify('member','id',$query->row()->id,array('otp_verify'=>0,'otp'=>$otp));
$messa='Your OTP password is '.$otp."\n http://nayagujratiloharsamaj.com";
				$this->sendSMSModel($contact,$messa);
               $msg['msg']='success';

           

		$msg['status']=TRUE;
		return $msg;
	 }else{
	 $msg['status']=TRUE;
         $msg['msg']='notApprove';
		 return $msg;
	 }

	}
	else{ 

		$msg['error_msg']='Invalid Username and password.';
		$msg['status']=FALSE;
		return $msg;
	}
} 

public function sendSMSModel($mob,$msg)
	{
		//Your authentication key
$authKey = "";

//Multiple mobiles numbers separated by comma
$mobileNumber = $mob;

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "LOHARR";

//Your message to send, Add URL encoding here.
$message = urlencode($msg);

//Define route 
$route = "4";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route,
	'unicode'=>1
	
);

//API URL
$url="http://sms.workholics.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);
	}
   
 
public function add($tableName, $data) {

    $this->db->insert($tableName, $data);
    return $this->db->insert_id();

}





public function modify($tableName, $colName, $id, $data) {

    $this->db->where($colName, $id);

    $this->db->update($tableName, $data);
	return $this->db->affected_rows();

}
function updateservices($table,$data,$where)
    {
        $this->db->where($where);
        return $this->db->update($table,$data);
    }


public function modifyMulti($tableName, $data1, $data) {

    $this->db->where($data1);

    $this->db->update($tableName, $data);
	
	return $this->db->affected_rows();

}



public function delete($tableName, $colName, $id) {

    $this->db->where($colName, $id);

    $this->db->delete($tableName);

    return TRUE;

}

/*******************delete*******************/	

	function deleterecord($table,$where)
	{
		if( $this->db->delete($table, $where) )
		{
			return "deleted";
		}
		else
		{
			return false;
		}
	}

public function deleteMulti($tableName, $wh) {

    $this->db->where($wh);

    $this->db->delete($tableName);

    return TRUE;

}





    // To get single row of table by a id 

public function getSingleRowById($tableName, $colName, $id, $returnType = '') {

    $this->db->where($colName, $id);

    $result = $this->db->get($tableName);

    if ($result->num_rows() > 0) {

        if ($returnType == 'array')

            return $result->row_array();

        else

            return $result->row();
    }

    else

        return FALSE;

}



    // To get all row of matching criteria

public function getRowAllById($tableName, $colName, $id, $orderby = '', $orderformat = 'asc') {

    if ($colName != '' && $id != '')

        $this->db->where($colName, $id);

    if ($orderby != '')

        $this->db->order_by($orderby, $orderformat);

    $result = $this->db->get($tableName);

    if ($result->num_rows() > 0)

        return $result->result();

    else

        return FALSE;

}



    // To get data by multiple where 	

public function getRowByWhere($tableName, $filters = '', $select = '', $noRowReturn = '', $returnType = '', $orderby = '', $orderformat = 'asc') {

    if ($select != '')

        $this->db->select($select);

    if (count($filters) > 0) {

        foreach ($filters as $field => $value)

            $this->db->where($field, $value);

    }
    if ($orderby != '')

        $this->db->order_by($orderby, $orderformat);

    $result = $this->db->get($tableName);

    if ($result->num_rows() > 0) {

        if ($noRowReturn == 'single') {

            if ($returnType == 'array')

                return $result->row_array();

            else

                return $result->row();
        }

        else {
            if ($returnType == 'array')
                return $result->result_array();
            else
                return $result->result();
        }

    }
    else
        return FALSE;

}
 
    // Pagination function 

public function getPaginationData($tableName, $filters = '', $perPage, $start, $orderby, $orderformat,$selectData='') {
 
        //Set default order
	if($selectData!='') 
	{
		$this->db->select($selectData);
	}
    if ($orderformat == '')

        $orderformat = 'asc';

        //add where clause

    if ($filters != '' && count($filters) > 0)

        $this->db->where($filters);

    $this->db->limit($perPage, $start);

    $this->db->order_by($orderby, $orderformat);

    $result = $this->db->get($tableName);

    if ($result->num_rows() > 0)

        return $result->result();

    else

        return FALSE;

}

/*---get--pagination---*/

public function get_pagination_result($table_name='',$id_array='',$limit='',$offset='',$orderid,$order=''){     
       
	     if(!empty($id_array)):
		 
            foreach ($id_array as $key => $value){
                $this->db->where($key, $value);
             
            }
	      endif;
	    
        if($order!=''){
			 $this->db->order_by($orderid,$order); 
		}
         else{
			  $this->db->order_by('id','desc'); 
		 } 
		 
        if($limit > 0 && $offset>=0){ 
		
		    //$this->db->where($filters);
            $this->db->limit($limit, $offset);
			
            $query=$this->db->get($table_name);
			
            if($query->num_rows()>0)
                return $query->result();
            else
                return FALSE;
			
        }else{
            $query=$this->db->get($table_name);
            return $query->num_rows();
        }
    }


    //Function to return total number of rows

public function getTotalRows($tableName, $filters = NULL) {

    if ($filters != NULL) {

        $this->db->where($filters);

        $count = $this->db->count_all_results($tableName);

    }

    else

        $count = $this->db->count_all($tableName);

    return $count;

}
 
public function get_result($table_name='', $id_array='',$id_array2=''){
        
        if(!empty($id_array)):      
            foreach ($id_array as $key => $value){
                $this->db->where($key, $value);
             
            }
       endif;
        if(!empty($id_array2)):     
            foreach ($id_array2 as $key => $value){
                $this->db->or_where($key, $value);
            }
        endif;
        $query=$this->db->get($table_name);
        if($query->num_rows()>0)
            return $query->result();
        else
            return FALSE;
}
 
public function get_row($table_name='', $id_array='', $id_array2=''){
	if(!empty($id_array)):      
		foreach ($id_array as $key => $value){
			$this->db->where($key, $value);
		}
	endif;
	if(!empty($id_array2)):     
		foreach ($id_array2 as $key => $value){
			$this->db->or_where($key, $value);
		}
	endif;
	$query=$this->db->get($table_name);
	if($query->num_rows()>0) 
		return $query->row();
	else
		return FALSE;
}

public function get_resultbylimit($table_name='',$limit="",$id_array='',$id_array2=''){
         $this->db->limit($limit);
        if(!empty($id_array)):      
            foreach ($id_array as $key => $value){
                $this->db->where($key, $value);
             
            }
       endif;
        if(!empty($id_array2)):     
            foreach ($id_array2 as $key => $value){
                $this->db->or_where($key, $value);
            }
        endif;
        $query=$this->db->get($table_name);
        if($query->num_rows()>0)
            return $query->result();
        else
            return FALSE;
}

//---------========== Get Data Or operator =================------

public function getOrResult($table_name='',$id_array=''){

    if(!empty($id_array)):     

        $this->db->or_where($id_array);
    endif;
    $query=$this->db->get($table_name);
    if($query->num_rows()>0)
        return $query->result();
    else
        return FALSE;
}

//---------========== Get Data Using Clause =================------

public function getInClauseData($select='',$table_name='',$colName='',$arr='',$where=''){

 if ($select != '')
    $this->db->select($select);

if(count($where)>0)
    $this->db->where($where);

$this->db->where_in($colName, $arr);

$query=$this->db->get($table_name);
if($query->num_rows()>0)
    return $query->result();
else
    return FALSE;
}

//---------========== Get Data Using Join=================------

public function getJoinData($seldata,$table1='',$table2='',$join_condition='',$wh='',$orderby='id',$orderformat='asc'){

    $this->db->select($seldata);

    $this->db->from($table1);

    $this->db->join($table2,$join_condition);
	if(!empty($wh))
    $this->db->where($wh);

    $this->db->order_by($orderby, $orderformat);

    $query = $this->db->get();

    return $query->result();

}


//---------========== Search Result Using Keyword=================------

     public function get_like($table_name,$column='',$keyword='')

      {

            $this->db->select('*');

            $this->db->from($table_name);

            $this->db->like($column, $keyword,'after');

            return $this->db->get()->result();

      }
	  
	  

      public function get_resultbyrendom($table="",$limit=""){

      $query = $this->db->query("SELECT  * FROM $table ORDER BY RAND() LIMIT $limit");
      return $query->result();
      
     } 
	   
    /*---------------------custom query---------------*/
    
     public function get_cities($limit='',$offset=''){
      
	  
		 $query = $this->db->query(" select cities.id as c_id,cities.city_name,states.name from cities,states where cities.state_id=states.id AND states.country_id =101 order by cities.id desc limit $offset,$limit ");
		  
		 return $query->result();
	   
     }
	 
     public function get_cities_count(){
		 
	    $query = $this->db->query(" select cities.id as c_id,cities.city_name,states.name from cities,states where cities.state_id=states.id And states.country_id =101 ");
       
	    return $query->num_rows();
     }

	 
   public function get_request_details($reqid='')
    {
      $query=$this->db->query(" SELECT information_request.id,information_request.company_name,information_request.name,information_request.email,information_request.phone,information_request.comment,information_request.how_did_you,information_request.createdate,information_request.area_id,information_request.state_id,primary_market.id,primary_market.area_name,state.short_name,state.state_name FROM information_request,primary_market,state WHERE information_request.id='".$reqid."' AND information_request.area_id=primary_market.id AND information_request.state_id=state.short_name");
       return $query->row();
    }
   
 
   /*========search=member==========*/   
   public function searchResult12($cast='',$gender='',$approve='',$premium='',$martil='',$offset='') 
    {          
       if(!empty($cast) || !empty($gender) || !empty($approve) || !empty($premium) || !empty($martil)){ 
			 
		if(!empty($cast)){ 
		$cst = "AND Caste='".$cast."'";
		}else {
		       $cst ='';	
		       }
		if(!empty($gender)){  
		$gnd = "AND Gender='".$gender."'";
		}else {
		       $gnd ='';	
		      }
		if(!empty($approve)){ 
		$aprv = "AND Approve='".$approve."'";
		}else {
		       $aprv ='';	
		      }
        if(!empty($premium)){ 
		$prm = "AND IsPurchase='".$premium."' AND expiry_date > '".date('Y-m-d')."'  ";  
		}else { 
		       $prm =''; 	 
		      }
        if(!empty($martil)){  
		$mtl = "AND Marrital='".$martil."'"; 
		}else {
		       $mtl ='';	
		      } 			  
		     
	   $sql="select * from profile_master where `is_delete`='0' $cst $gnd $aprv $prm $mtl order by `profile_master`.`ProfileId` DESC limit $offset,20";   	   
	    
		$record=$this->db->query($sql);    
	    return $record->result();
	  }
	}  
	   
	 /*========search=member=count=========*/   
	public function search_count($cast='',$gender='',$approve='',$premium='',$martil='') 
    {  
	     
	    if(!empty($cast) || !empty($gender) || !empty($approve) || !empty($premium) || !empty($martil)){
			 
		if(!empty($cast)){ 
		$cst = "AND Caste='".$cast."'"; 
		}else {
		       $cst ='';	
		       }
		if(!empty($gender)){ 
		$gnd = "AND Gender='".$gender."'";
		}else {
		       $gnd ='';	
		      }
		if(!empty($approve)){ 
		$aprv = "AND Approve='".$approve."'";
		}else {
		       $aprv ='';	
		      }
        if(!empty($premium)){ 
		
		$prm = "AND IsPurchase='".$premium."' AND expiry_date > '".date('Y-m-d')."'  "; 
		
		}else {   
		       $prm =''; 	
		      } 
        if(!empty($martil)){  
		$mtl = "AND Marrital='".$martil."'"; 
		}else {
		       $mtl ='';	 
		      } 			   
		     
	       $sql="select * from profile_master where `is_delete`='0' $cst $gnd $aprv $prm $mtl order by `profile_master`.`ProfileId` DESC ";   
              
		      $record=$this->db->query($sql);   
		      return $record->num_rows();   
	  }
	}  
	
	
   /*----advanced-search------*/    
   public function advancedsearchResult($education='',$cast='',$city='',$gender='',$martil='',$ispurches='',$age='',$offset)    
	{    
	     
	    if(!empty($education) || !empty($cast) || !empty($city) || !empty($gender) || !empty($martil) || !empty($ispurches) || !empty($age)){   
			 
        	 
		if(!empty($education)){ 
		$edu = "AND Elevel='".$education."'";  
		}else {
		       $edu =''; 	
		      }	
			  
        if(!empty($cast)){  
		$cst = "AND Caste='".$cast."'"; 
		}else {
		       $cst ='';	
		       }        
		
		if(!empty($city)){ 
		$cty = "AND City='".$city."'"; 
		}else {
		       $cty ='';	 
		       }
			   
		if(!empty($gender)){ 
		$gnd = "AND Gender='".$gender."'";
		}else {
		       $gnd ='';	
		      }
			  
	    if(!empty($martil)){  
		$mtl = "AND Marrital='".$martil."'"; 
		}else {
		       $mtl ='';	 
		      } 		  
		
        if(!empty($ispurches)){ 
		
		$prm = "AND IsPurchase='".$ispurches."' ";  
		
		}else {   
		       $prm =''; 	 
		      } 
        			
        if(!empty($age)){  
		
		  if($age!='30+')
		  {
			   $age = explode("-",$age);
			   $from = $age[0];
			   $to = $age[1];
			   $totalage = "AND `age` BETWEEN ".$from." AND ".$to." "; 
		  }else{
		       $totalage = "AND `age` > 30 ";
		    } 
		
	   }else {   
		       $totalage ='';       	 
		     } 
			  
		
		
	   $sql="select * from profile_master where `is_delete`='0' $totalage $edu $cst $cty $gnd $mtl $prm order by `profile_master`.`ProfileId` DESC limit $offset,30";          	   
	    
		$record=$this->db->query($sql); 
		 
	    return $record->result();
	  }
	}   
	   
	 /*===advanced=search==count=record=======*/     
	public function advancedsearch_count($education='',$cast='',$city='',$gender='',$martil='',$ispurches='',$age='')  {   
	     
	    if(!empty($education) || !empty($cast) || !empty($city) || !empty($gender) || !empty($martil) || !empty($ispurches) || !empty($age)){   
			  
        	 
		if(!empty($education)){ 
		$edu = "AND Elevel='".$education."'";  
		}else {
		       $edu =''; 	
		      }	
			  
        if(!empty($cast)){ 
		$cst = "AND Caste='".$cast."'"; 
		}else {
		       $cst ='';	
		       }        
		
		if(!empty($city)){ 
		$cty = "AND City='".$city."'"; 
		}else {
		       $cty ='';	 
		       }
			   
		if(!empty($gender)){ 
		$gnd = "AND Gender='".$gender."'";
		}else {
		       $gnd ='';	
		      }
			  
	    if(!empty($martil)){  
		$mtl = "AND Marrital='".$martil."'"; 
		}else {
		       $mtl ='';	 
		      } 		  
		
        if(!empty($ispurches)){ 
		
		$prm = "AND IsPurchase='".$ispurches."' ";  
		
		}else {   
		       $prm =''; 	
		      } 
       			
        if(!empty($age)){   
		
		  if($age!='30+')
		  {
			   $age = explode("-",$age);
			   $from = $age[0];
			   $to = $age[1];
			   $totalage = "AND `age` BETWEEN ".$from." AND ".$to." "; 
		  }else{
		       $totalage = "AND `age` > 30 ";
		    } 
		
	   }else {   
		       $totalage ='';       	 
		     } 
			  
	       $sql="select * from profile_master where `is_delete`='0' $totalage $edu $cst $cty $gnd $mtl $prm order by `profile_master`.`ProfileId` DESC ";        
              
		      $record=$this->db->query($sql);   
		      return $record->num_rows();   
	  }
    }   

/*****************getdata*******************************************/
	
	function get_record($table,$data,$order='',$limit='')
	{
		$this->db->order_by($order);

         $this->db->limit($limit);
        
        $query = $this->db->get_where($table,$data);
         if ($query->num_rows() > 0) 
		{
            return $query->result_array();
        } else 
		{
            return array();
        }
       
     }
    //---------get all record with condition and limit--
     function get_all_record($table,$where="",$order='',$type="",$limit='',$start="")
    {
        if($limit!='' && $start!='' )
        {
            $this->db->limit($limit,$start);
        }
        else if($limit!='' && $start=='')
        {
            $this->db->limit($limit);
        }
        if($where!='')
        {
          $this->db->where($where);
        }
        if($order!='' && $type!='')
        {
          $this->db->order_by($order,$type);
        }
        $query = $this->db->get($table);
        if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        } 
        else 
        {
            return array();
        }
    }

       public function allrecord($title){
        if(!empty($title)){
            $this->db->like('fname',$title);
        }
        $this->db->select('*');
        $this->db->from('register');
        $rs = $this->db->get();
        return $rs->num_rows();
    }


    function booktable($table,$search){

        $query = $this
                ->db
                ->select('*')
                ->from($table)
                ->like('fname',$search)
                ->or_like('id',$search)
                ->get();
     
        if($query->num_rows()>0)
        {
            return $query->result(); 
        }
        else
        {
            return null;
        }
        
}
public function betweendata($table,$data,$first_date,$second_date)
{
$this->db->where('min_transaction_limit >=', $first_date);
$this->db->where('max_transaction_limit <=', $second_date);
$query =$this->db->get_where($table,$data);
  if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        } 
        else 
        {
            return array();
        }
}

}

/* Location: ./application/models/generalmodel.php */