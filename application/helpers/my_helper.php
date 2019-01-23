<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if ( ! function_exists('isUserLoggedIn')) {  
  function isUserLoggedIn() {
    $CI =& get_instance();
    if ($CI->session->userdata('user_information')) {
      $user_info=$CI->session->userdata('user_information');    
      if($user_info['logged_in']===TRUE):
        return TRUE;      
      else:
        return FALSE;       
      endif;
    } else
    return FALSE;
  }
}

if ( ! function_exists('isAdminLoggedIn')) {  
  function isAdminLoggedIn() {
    $CI =& get_instance();
    if ($CI->session->userdata('superadmin_info')) {
      $user_info=$CI->session->userdata('superadmin_info');    
      if($user_info['logged_in']===TRUE):
        return TRUE;      
      else:
        return FALSE;       
      endif;
    } else
    return FALSE;
  }
}



if ( ! function_exists('clear_cache')) {

  function clear_cache(){

    $CI =& get_instance();

    $CI->output->set_header('Expires: Wed, 11 Jan 1984 05:00:00 GMT' );

    $CI->output->set_header('Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . 'GMT');

    $CI->output->set_header("Cache-Control: no-cache, no-store, must-revalidate");

    $CI->output->set_header("Pragma: no-cache");      

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

    <button data-dismiss="alert" class="close" type="button">X</button>

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

    <button data-dismiss="alert" class="close" type="button">X</button>

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

    <button data-dismiss="alert" class="close" type="button">X</button>

    <strong>Info: </strong> <?php echo $msg ?>

  </div>

  <?php 

}

}





if ( ! function_exists('getUserId')) {  

  function getUserId() {

    $CI =& get_instance();

    $user_info=$CI->session->userdata('user_info');

    return $user_info['id'];

  }

}



if ( ! function_exists('get_data')) {  

  function get_data($table="",$id="") {

    $CI =& get_instance();

    $CI->db->where('id',$id);

    $query = $CI->db->get($table);   

    return $query->row();

  }

}


//-------------Pagination------------
    if(! function_exists('pagination'))
    { 
        function ajaxpagination($url, $rowscount, $per_page)
        {
            $ci = & get_instance();
            $ci->load->library('Ajax_pagination');
            $config = array();
            $config['base_url'] = site_url($url);
            $config["total_rows"] = $rowscount;
            $config["per_page"] = $per_page;
            $config['link_func']  = 'allpagination';
            $config['full_tag_open'] = '<nav><ul class="pagination">';
            $config['full_tag_close'] = '</ul></nav>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a>';
            $config['cur_tag_close'] = '</a></li>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $ci->ajax_pagination->initialize($config);
        }
    }


if ( ! function_exists('get_theme_pagination')) {

  function get_theme_pagination(){

    $data = array();

    $data['cur_tag_open'] = '<li class="disabled"><a>';

    $data['cur_tag_close'] = '<</li>';

    $data['full_tag_open'] = '<ul class="pagination">';

    $data['full_tag_close'] = '</ul>';

    $data['first_tag_open'] = '<li>';

    $data['first_tag_close'] = '</li>';

    $data['num_tag_open'] = '<li>';

    $data['num_tag_close'] = '</li>';

    $data['last_tag_open'] = '<li>';

    $data['last_tag_close'] = '</li>';

    $data['next_tag_open'] = '<li>';

    $data['next_tag_close'] = '</li>';

    $data['prev_tag_open'] = '<li>';

    $data['prev_tag_close'] = '</li>';

    $data['next_link'] = '&raquo;';

    $data['prev_link'] = '&laquo;';

    $data['cur_tag_open'] = '<li class="active"><a>';

    $data['cur_tag_close'] = '</a></li>';

    return $data;

  }

}



if ( ! function_exists('gettotalcount')) {  

  function gettotalcount($table='') {
    $CI =& get_instance();
    $query = $CI->db->get($table);   
    return $query->num_rows();

  }

}



