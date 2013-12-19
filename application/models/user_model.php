<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_model
 *
 * @author Ril02
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 function login($email,$password)
 {
  $this->db->where("email",$email);
  $this->db->where("password",$password);

  $query=$this->db->get("user");
  if($query->num_rows()>0)
  {
   foreach($query->result() as $rows)
   {
    //add all data to session
    $newdata = array(
      'user_id'  => $rows->id,
      'user_name'  => $rows->username,
      'user_email'    => $rows->email,
      'logged_in'  => TRUE,
    );
   }
   $this->session->set_userdata($newdata);
   return true;
  }
  return false;
 }
 public function add_user()
 {
  $data=array(
    'username'=>$this->input->post('firstname'),
    'lastname'=>$this->input->post('firstname'),
    'name'=>$this->input->post('firstname'),
    'email'=>$this->input->post('youremail'),
    'password'=>md5($this->input->post('password'))
  );
  $this->db->insert('user',$data);
 }
 
 public function view_user($id)
 {
     $this->db->where("id", $id);
     return $this->db->get('user');
 }
 
 public function upddata($data) {
   
    $this->db->where('id', $id);
    $this->db->update('user', $data);
    return true;
}
 
 
 
 
}

?>
