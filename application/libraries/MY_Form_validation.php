<?php

class MY_Form_validation extends CI_Form_validation
{
    public function __construct($config = array())
    {
        parent::__construct($config);
    }
    
    public function error_array()
    {
        $count1 = is_array($this->_error_array) ? count($this->_error_array) : 1;
        if ($count1 > 0) {
            return $this->_error_array;
        }
    }
    
}
?>