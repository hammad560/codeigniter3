<?php

class Admin extends MY_Controller{

    public function __construct(){
        parent::__construct();
      
    }
    public function index(){

        
        //load the form library
        $this->load->library('form_validation');

        //form validation

        $this->form_validation->set_rules('username', 'User Name',
         'required|alpha');
        
        $this->form_validation->set_rules('pass', 'password',
        'required|max_length[8]');
        
        //Get input from view and take value then check with database

        if($this->form_validation->run()){
            $uname = $this->input->Post('username');
            $password = $this->input->Post('pass');

            //check with database and use session and store the id

            $this->load->model('loginmodel');
            $id = $this->loginmodel->isvalidate($uname,$password);

            if ($id) {
                //load the session in autoload and use here
                $this->session->set_userdata('id',$id);

                //load the view 
                return redirect('admin/welcome');
            }
            else {
                # code...
            }            
        }
        else{
            $this->load->view('Admin/login');
        }
    }

    public function welcome(){
        if($this->session->userdata('id'));
        return redirect('admin/index');
        $this->load->model('loginmodel');
        $articels = $this->loginmodel->articallist();
        $this->load->view('admin/dashboard',['articels'=>$articels]);

    }

    public function edituser(){

    }

    public function deleteuser(){

    }
    public function signup(){
        $this->load->view('admin/registeration');
    }

    public function sendmail()
    {
        $this->form_validation->set_rules('username', 'User Name','required|alpha');
        $this->form_validation->set_rules('password', 'Password','required|max_length[8]');
        $this->form_validation->set_rules('fname', 'First Name','required|alpha');
        $this->form_validation->set_rules('lname', 'Last Name','required|alpha');
        $this->form_validation->set_rules('email', 'Email','required|valid_email|is_unique[user.email]');

        if($this->form_validation->run()){
            $this->load->library('email');

            $this->email->from(set_value('email'), set_value('fname'));
            $this->email->to('');
            $this->email->subject('Email Test');
            $this->email->message('This is a test email.');
            $this->email->send();

            if ($this->email->send()) {
                echo 'Email sent successfully.';
            } else {
                echo $this->email->print_debugger();
            }
        }
    }

}

?>