<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cv_model
 *
 * @author Ril02
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cv_Model extends CI_Model {
    //put your code here
    public function __construct()
    {
     parent::__construct();
    }
    
    
    function get_by_id($id){
        $this->db->where('id', $id);
        return $this->db->get($this->user);
    }
}

?>
