<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cv
 *
 * @author Ril02
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class cv extends CI_Controller{
    //put your code here
    public function __construct()
    {
     parent::__construct();
     //$this->load->model('user_model');
    }
    public function index()
    {
        
     $this->load->model('cv_model','',TRUE);
     $uri_segment = 3;
     $offset = $this->uri->segment($uri_segment);
         
        // load data
     $persons = $this->Cv_Model->get_by_id($this->limit, $offset)->result();
     
     $data['title']= 'Welcome to CVNOW';
     $this->load->view('header_view',$data);
     $this->load->view('edit_cv.php', $data);
     print_r($persons);
     $this->load->view('footer_view',$data);
        
    }
}

?>
