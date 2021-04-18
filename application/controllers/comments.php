<?php
class Comments extends CI_Controller{

  public function create($post_id){
  	     $slug=$this->input->post('slug');
         $data['post']=$this->Posts_model->get_posts($slug);
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','Valid_email'); 
        $this->form_validation->set_rules('body','Body','required');

        if ($this->form_validation->run()===FALSE) {

          $data['categories']=$this->Category_model->get_categories();
          $data['post']=$this->Posts_model->get_posts($slug);
          
          $data['comments']=$this->Comment_model->get_comments($post_id);
        	
        	 $this->load->view('templates/post_header',$data);
	    	   $this->load->view('posts/view');
            $this->load->view('templates/post_footer');
        }ELSE{
        	$this->Comment_model->create_comment($post_id);
        	redirect('posts/'.$slug);

        }



  }














}





?>