<?php 

 class Users extends CI_Controller{

        public function register(){
           $data['title']='sign-up';

           $this->form_validation->set_rules('name','Name','required');
           $this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
           $this->form_validation->set_rules('email','Email','required|valid_email|callback_check_email_exists');
           $this->form_validation->set_rules('password','Password','required');
           $this->form_validation->set_rules('passconf','Password Confirmation','required|matches[password]');

           if( $this->form_validation->run()==FALSE){
           	 $this->load->View('templates/auth_head',$data);
           	 $this->load->View('users/register');
             $this->load->View('templates/auth_footer');


           }else{

               //encript pass
           	$enc_password=md5($this->input->post('password'));
           	$this->User_model->register($enc_password);
           	//set messages
           	$this->session->Set_flashdata('user_registered','You are now registered and You can login');
           	redirect('/posts');
           }
        }

          //login user
           public function login(){
                  $data['title']='login';
                  $this->form_validation->set_rules('username','Username','required');
                  $this->form_validation->set_rules('password','Password','required');
      
                if( $this->form_validation->run()==FALSE){
                  $data['title']='Login';
           	      $this->load->View('templates/auth_head',$data);
           	      $this->load->View('users/login');
                  $this->load->View('templates/auth_footer');


                }else{
                
                    //get username
           	        $username=$this->input->post('username');
           	         //encript pass
           	        $password=md5($this->input->post('password'));
           	       // echo $password; echo'</br>'. $username; die();
                    //login user
                   $user_id= $this->User_model->login($username,$password);
                         if ($user_id) {
                         	 //set session
                         	   $userdata=array(

                                  'user_id'=>$userid,
                                  'username'=>$username,
                                  'logged_in'=>true
                         	   );
                         	   $this->session->set_userdata($userdata);



                	            //set messages
                            	$this->session->Set_flashdata('user_logged','You are now logged in');
                            	redirect('/posts');

                            

                         }else{
                         		//set messages
                            	$this->session->Set_flashdata('login_failed','Please Check Details and Try Again');
                            	redirect('users/login');

                          }
           
           }
        }

                     
                     public function logout (){
                      //unset userdata
                     	$this->session->unset_userdata('logged_in');
                     		$this->session->unset_userdata('userid');
                     			$this->session->unset_userdata('username');

                       //set message
                     	$this->session->Set_flashdata('loggedout','You are now logged out');
                         	redirect('users/login');	
                     }

                     public function Newpwd(){
                      $data['title']='reset Password';
                                 $this->load->View('templates/auth_head');
                                 $this->load->View('users/Newpwd',$data);
                                 $this->load->View('templates/auth_footer');

                          }



         // check if  username exists 
        public   function check_username_exists($username){
             	$this->form_validation->set_message('check_username_exists','username taken,Please choose new');
             	if ($this->User_model->check_username_exists($username)) {
           		      return true;
                	}else{
                		return false;

             	}
           }

          // check if  email exists 
        public  function check_email_exists($email){
             	$this->form_validation->set_message('check_email_exists','email taken,Please choose new');
             	if ($this->User_model->check_email_exists($email)) {
           		      return true;
                	}else{
                		return false;

             	}
           }















 }












?>