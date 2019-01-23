<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class General {

    var $CI;

    public function __construct() {
        // Set the super object to a local variable for use later
        $this->CI = & get_instance();
    }

   

}

/* End of file General.php */
/* Location: ./application/libraries/general.php */