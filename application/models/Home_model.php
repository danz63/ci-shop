<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends MY_Model 
{
    protected $table    = 'product';
    protected $perPage  = 2;
    public function __construct()
    {
        parent::__construct();
    }
}

/* End of file Home_model.php */
