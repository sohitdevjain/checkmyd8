<?php
/**
 * create a encoded id for sequrity pupose 
 * 
 * @param string $id
 * @param string $salt
 * @return endoded value
 */
 
if(!function_exists('do_core_upload_image'))
{
   function do_core_upload_image($filename2='' , $upload_path='',$path_of_thumb='')
   {
       $allowed =  array('jpeg','JPEG','jpg','JPG','png','PNG');
 
        $filename = $_FILES[$filename2]['name'];
 
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
 
        if(!in_array($ext,$allowed))
        {
            return FALSE;
        }
        else
        {
            if ($_FILES[$filename2]["error"] > 0)
            {
                return FALSE; 
            }
            else
            {
               $name = uniqid();
               if(move_uploaded_file($_FILES[$filename2]['tmp_name'],$upload_path.$name.'.'.$ext))
               return $name.'.'.$ext;
               else
               return FALSE;
            }
 
        }
    }
}
//=================File Upload========================// 
 if(!function_exists('do_core_upload_tracksheet'))
{
   function do_core_upload_tracksheet($filename2='' , $upload_path='',$path_of_thumb='')
   {
       $allowed =  array('pdf','PDF','xlsx','xls','XLSX','XLS');
        $filename = $_FILES[$filename2]['name'];
 
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
 
        if(!in_array($ext,$allowed))
        {
            return FALSE;
        }
        else
        {
            if ($_FILES[$filename2]["error"] > 0)
            {
                return FALSE; 
            }
            else
            {
               $name = uniqid();
               if(move_uploaded_file($_FILES[$filename2]['tmp_name'],$upload_path.$name.'.'.$ext))
               return $name.'.'.$ext;
               else
               return FALSE;
            }
 
        }
    }
}
 
//========================//=========================== 
 
if (!function_exists('encode_id')) {

    function encode_id($id, $salt) {
        $ci = get_instance();
        $id = $ci->encrypt->encode($id . $salt);
        $id = str_replace("=", "~", $id);
        $id = str_replace("+", "_", $id);
        $id = str_replace("/", "-", $id);
        return $id;
    }

}

/**
 * decode the id which made by encode_id()
 * 
 * @param string $id
 * @param string $salt
 * @return decoded value
 */
if (!function_exists('decode_id')) {

    function decode_id($id, $salt) {
        $ci = get_instance();
        $id = str_replace("_", "+", $id);
        $id = str_replace("~", "=", $id);
        $id = str_replace("-", "/", $id);
        $id = $ci->encrypt->decode($id);
        if ($id && strpos($id, $salt) !== false) {
            return str_replace($salt, "", $id);
        }
    }

}
if (!function_exists('do_core_upload_file'))
{
    function do_core_upload_file($filename2='' , $upload_path='', $path_of_thumb='')
    {
        $allowed =  array('pdf','PDF','doc','docx','DOC','DOCX','xlsx','xls','XLSX','XLS','xlt'); 
        $filename = $_FILES[$filename2]['name']; 
        $ext = pathinfo($filename, PATHINFO_EXTENSION); 
        if(!in_array($ext,$allowed))
        {
            return FALSE;
        }
        else
        {
            if ($_FILES[$filename2]["error"] > 0)
            {
                return FALSE; 
            }
            else
            {
               $name = uniqid();
               if(move_uploaded_file($_FILES[$filename2]['tmp_name'],$upload_path.$name.'.'.$ext))
               return $name.'.'.$ext;
               else
               return FALSE;
            } 
        }
    }
}
  if ( ! function_exists('alert')) {  
    function alert($msg='', $type='success_msg') {
      $CI =& get_instance();?>
      <?php if (empty($msg)): ?>
          <?php if ($CI->session->flashdata('success_msg')): ?>
            <?php echo success_alert($CI->session->flashdata('success_msg')); ?>
          <?php endif ?>
          <?php if ($CI->session->flashdata('error_msg')): ?>
            <?php echo error_alert($CI->session->flashdata('error_msg')); ?>
          <?php endif ?>
          <?php if ($CI->session->flashdata('info_msg')): ?>
            <?php echo info_alert($CI->session->flashdata('info_msg')); ?>
          <?php endif ?>
      <?php else: ?>
          <?php if ($type == 'success_msg'): ?>
            <?php echo success_alert($msg); ?>
          <?php endif ?>
          <?php if ($type == 'error_msg'): ?>
            <?php echo error_alert($msg); ?>
          <?php endif ?>
          <?php if ($type == 'info_msg'): ?>
            <?php echo info_alert($msg); ?>
          <?php endif ?>
      <?php endif; ?>
    <?php }
  }
 /**
* Success alert
*/
if ( ! function_exists('success_alert')) {  
  function success_alert($msg = '') {?>
<div class="alert alert-success">
  <button data-dismiss="alert" class="close" type="button">×</button>
  <strong>Success!</strong> <?php echo $msg ?>
</div>
  <?php 
  }
}
 
 
/**
* Error alert
*/
if ( ! function_exists('error_alert')) {  
  function error_alert($msg = '') {?>
<div class="alert alert-danger">
  <button data-dismiss="alert" class="close" type="button">×</button>
  <strong>Error!</strong> <?php echo $msg ?>
</div>
  <?php 
  }
}
 
/**
* info alert
*/
if ( ! function_exists('info_alert')) { 
  function info_alert($msg = '') {?>
<div class="alert alert-info">
  <button data-dismiss="alert" class="close" type="button">×</button>
  <strong>Info: </strong> <?php echo $msg ?>
</div>
  <?php 
  }
}

 if(! function_exists('date_format_by_db')) { 
      function date_format_by_db($date)
      {
          if($date!="")
          {
            $data=date("Y-m-d",strtotime($date));
          }
          else
          {
            $data="";
          }
          return $data;
      }
  }

   if(! function_exists('date_format_for_datepicker')) { 
      function date_format_for_datepicker($date)
      {
          $date_form=explode("_" , $date);
          return $date_form[2].'-'.$date_form[1].'-'.$date_form[0];
      }
  }
if(! function_exists('permission')) { 
      function permission($attr)
      {
        $CI =& get_instance();
          $perm="";
          $uid=$CI->session->userdata['DolarAdminLog']['id'];
          $user_per=$CI->model->get_record("user",array("id"=>$uid));
          if(count($user_per)>0)
          {
            $perm=explode("," , $user_per[0]['permessions']);
          }
          if(in_array($attr, $perm))
          {
            return true;
          }
          else
          {
            return false;
          }
      }
  }

if(! function_exists('riskprofilekyc')) { 
    function riskprofilekyc($uid)
    {
        $data=array();
        $CI =& get_instance();
        $data['risk_profile']=$CI->crud->getrecord("id",'risk_profile',array("cid"=>$uid));
        $data['kyc']=$CI->crud->getrecord("id",'kyc_form',array("cid"=>$uid));
        return $data;         
    }
  }
?>