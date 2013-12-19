<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author Ril02
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
    //put your code here
    public function __construct()
    {
     parent::__construct();
     $this->load->model('user_model');
    }
    
    public function index()
    {
     if(($this->session->userdata('user_name')!=""))
     {
      $this->welcome();
     }
     else{
      $data['title']= 'Home';
      $this->load->view('header_view',$data);
      $this->load->view("registration_view.php", $data);
      $this->load->view('footer_view',$data);
     }
    }
    public function welcome()
    {
     $data['title']= 'Welcome';
     $this->load->view('header_view',$data);
     $this->load->view('welcome_view.php', $data);
     $this->load->view('footer_view',$data);
    }
    public function login()
    {
     $email=$this->input->post('email');
     $password=md5($this->input->post('pass'));

     $result=$this->user_model->login($email,$password);
     if($result) $this->welcome();
     else        $this->index();
    }
    public function thank()
    {
     $data['title']= 'Thank';
     $this->load->view('header_view',$data);
     $this->load->view('thank_view.php', $data);
     $this->load->view('footer_view',$data);
    }
    public function registration()
    {
     $this->load->library('form_validation');
     // field name, error message, validation rules
     $this->form_validation->set_rules('youremail', 'Your Email', 'trim|required|valid_email');
     $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');

     if($this->form_validation->run() == FALSE)
     {
      $this->index();
     }
     else
     {
      $this->user_model->add_user();
      $this->thank();
     }
    }
    public function logout()
    {
     $newdata = array(
     'user_id'   =>'',
     'user_name'  =>'',
     'user_email'     => '',
     'logged_in' => FALSE,
     );
     $this->session->unset_userdata($newdata );
     $this->session->sess_destroy();
     $this->index();
    }
    
    public function view()
    {
        
     $this->load->model('User_model','',TRUE);
     $uri_segment = 3;
     $offset = $this->uri->segment($uri_segment);
         
        // load data
     $data['person'] = $this->User_model->view_user($this->uri->segment($uri_segment))->row();  
        
     
     
     $data['title']= 'Welcome to CVNOW';
     $this->load->view('header_view',$data);
     $this->load->view('edit_cv.php', $data);
    
     $this->load->view('footer_view',$data);
        
    }
    
    function update($id){
        // set validation properties
        $this->_set_fields();
         
        // prefill form values
        $person = $this->User_model->view_user($id)->row();
        $this->validation->id = $id;
        $this->validation->name = $person->name;
       
        // set common properties
        $data['title'] = 'Update person';
        $data['message'] = '';
        $data['action'] = site_url('user/update');
        $data['link_back'] = anchor('person/index/','Back to list of persons',array('class'=>'back'));
     
        // load view
        $this->load->view('personEdit', $data);
    }
    
    public function edit($id){
      
          $this->load->model('User_model','',TRUE);
          $uri_segment = 3;
          $offset = $this->uri->segment($uri_segment); 
          
          $data = $this->input_posts(array(
              'id' => $this->input->post('id'),
              'name' => $this->input->post('name'),
              'lastname' => $this->input->post('lastname')
              ));
          $this->User_model->save($data, $this->uri->segment($uri_segment));
    // no errors - data stored - inform the user with display success-div
    
    } 
    
    public function updtitle() 
    {   
        $id=$this->uri->segment(3);
        
        $data = array(
            'table_name' => 'user', // pass the real table name
            'id' => $id,
            'lastname' => $this->input->post('lastname')
        );

        $this->load->model('user_model'); // load the model first
        if($this->user_model->upddata($data)) // call the method from the model
        {
            
            // update successful
        }
        else
        {
            // update not successful
        }

    }
   
}

?>
