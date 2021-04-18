<?php

class Categories extends CI_Controller{
   
   public function index(){
   	 	$data['title']=' Categories';

   	 	$data['categories']=$this->Category_model->get_categories();

   	 	     $this->load->view('templates/post_header',$data);
	        //	$this->load->view('categories/index',$data);
           $this->load->view('templates/post_footer');
   }




  public function create()
  {

  	    $data['title']='Create Categories';
  	    $this->form_validation->set_rules('name','Name','required');

  	   if($this->form_validation->run()===FALSE){
            $this->load->view('templates/header');
	    	$this->load->view('Categories/create',$data);
            $this->load->view('templates/footer');
  	   }else{
          $this->Category_model->create_category();
          redirect('categories');
  	   }
   }
   public function posts($id){
          // echo $id; die();
                 //pagination config
                   $config['base_url'] = base_url().'/categories/posts/';
                   $config['total_rows'] = $this->db->count_all('posts');
                    $config['per_page'] = 2;
                  //styling pagination link
          $config['attributes'] = array('class'=>'page-item');
                 //init pagination
        $this->pagination->initialize($config);
       //end config
          
           $data['title']=$this->Category_model->get_category($id)->name;
          /* echo "<pre>"; 
                var_dump($data);
                die(); 
                echo "</pre>";*/
             $data['categories']=$this->Category_model->get_categories();
       
             $data['posts']=$this->Posts_model->gets_posts_by_category($id);
             
             $this->load->view('templates/post_header',$data);
	    	     $this->load->view('posts/one');
             $this->load->view('templates/post_footer');
        }


}
?>