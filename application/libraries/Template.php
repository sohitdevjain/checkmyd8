<?phpif (!defined('BASEPATH'))  exit('No direct script access allowed');  class Template {    var $CI;    public function __construct() {        // Set the super object to a local variable for use later      $this->CI = & get_instance();    }    public function base($data) {      $template['header'] = $this->CI->load->view('template/header', $data, TRUE);	  $template['mainContent'] = $this->CI->load->view($data['view'], $data, TRUE);      $template['footer'] = $this->CI->load->view('template/footer', '', TRUE);      $this->CI->load->view('load_template', $template);    }				  }  /* End of file template.php *//* Location: ./application/libraries/template.php */