<?php
/** application/libraries/MY_Form_validation **/ 
class MY_Form_validation extends CI_Form_validation 
{
    public $CI;
    public $_field_data         = array();
    public $_config_rules       = array();
    public $_error_array        = array();
    public $_error_messages     = array();
    public $_error_prefix       = '<p>';
    public $_error_suffix       = '</p>';
    public $error_string        = '';
    public $_safe_form_data     = FALSE;
    public $validation_data     = array();
}