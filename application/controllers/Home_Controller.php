<?php
	Class Home_Controller extends CI_Controller{
               
           
            public $error_log=array();
                
            public function index(){
                
                $this->load->view('Home/Home_view');
                $this->load->view('Dashboard/Resister_real.php');
                $this->load->view('Footer/footer.php');
            }
	
                function data_check($name, $user_name,$email, $password,$confirm_password){
                    
                           
                                if($password !== $confirm_password){
                                     array_push($this->error_log,'Please Match Both Password');
                                }
                                if(empty($user_name)){
                                    array_push($this->error_log,"Please fill in the user name feild");
                                }
                                if(empty($name))
                                {
                                    array_push($this->error_log,"Please Fill in the name feild");
                                }
                                if(empty($email)){
                                    array_push($this->error_log,"Please Enter Your Email Address");
                                }
                                if(empty($password))
                                {
                                    array_push($this->error_log,"Please Input The password");
                                }
                                    
                                if(count($this->error_log==0)){
                                     $this->Resister_Model->resister($name,$user_name,$email,$password);
                                        if($this->Resister_Model==true){
                                            $this->Login();
                                        }
                                    
                                }
                                
                               
   
                }
                 public function Login(){
                                    $this->load->view('Dashboard/Login');
                                }
	}

?>