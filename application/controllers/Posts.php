<?php 
class Posts extends CI_Controller{
	public function  index($offset=0){
    //pagination config
     $config['base_url'] = base_url().'/posts/index/';
     $config['total_rows'] = $this->db->count_all('posts');
      $config['per_page'] = 2;
      //styling pagination link
       $config['attributes'] = array('class'=>'page-item');
        //init pagination
     $this->pagination->initialize($config);
    //end config


      $data['categories']=$this->Category_model->get_categories();
		 $data['posts']=$this->Posts_model->get_posts(FALSE,$config['per_page'],$offset);

    $data['title']='Latest Posts';

    
		  
     /* echo "<pre>";
           var_dump($data);
     echo "</pre>";
    die();
     */
    
		$this->load->view('templates/post_header',$data);
		$this->load->view('posts/index');
    $this->load->view('templates/post_footer');
	}  
	
	public function  view($slug=NULL){
     $data['categories']=$this->Category_model->get_categories();
     $data['title']='posts';
		 $data['post']=$this->Posts_model->get_posts($slug);
     $post_id=$data['post']['id'];
     $data['comments']=$this->Comment_model->get_comments($post_id);
		
		if(empty($data['post'])){
           show_404();
		}
      
		  $data['title']=$data['post']['title'];
        $this->load->view('templates/post_header',$data);
	    	$this->load->view('posts/view');
        $this->load->view('templates/post_footer');
	}      

   
   public function create(){
   	$data['title']='Create post';

	$data['categories']=$this->Posts_model->get_categories();
   	$this->form_validation->set_rules('title','Title','required');
   	$this->form_validation->set_rules('body','Body','required');

     if($this->form_validation->run()===FALSE){
		   $this->load->view('templates/header');
		   $this->load->view('posts/create',$data);
           $this->load->view('templates/footer');
    }else{
      //set radom string



    	//upload image
    	$config['upload_path'] = './images/posts';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '2048';
      $config['max_width'] = '2000';
      $config['max_height'] = '2000';
       
    	$this->load->library('upload',$config);

    	if (!$this->upload->do_upload()) {
    		$errors=array('error'=>$this->upload->display_errors());
    		$post_image='no_image.jpg';

    	}else{
           
           $data = array('upload_data' =>$this->upload->data() );

           $post_image=$_FILES['userfile']['name'];
    	}


    	$this->Posts_model->create_post($post_image);
        //set messages
            $this->session->Set_flashdata('post_created','Your post has been created');
		 redirect('posts/');
     unset($_SESSION['post_created']);
   }

   }

   public function delete($id){
    	//echo $id;
   	$this->Posts_model->delete_post($id);
      //set messages
            $this->session->Set_flashdata('post_delete','You deleted post');
   	redirect('posts/');
   }
  
  public function edit($slug){
    

    $data['post']=$this->Posts_model->get_posts($slug);
    $data['categories']=$this->Posts_model->get_categories();
		
		if(empty($data['post'])){
           show_404();
		}

		$data['title']='Edit Post';
		$this->load->view('templates/header');
		$this->load->view('posts/edit',$data);
        $this->load->view('templates/footer'); 
    }
   
    public function update(){
    	//echo "submited";
    	$this->Posts_model->update_post();
        //set messages
            $this->session->Set_flashdata('post_update','Your post has been updated');
    	redirect('posts/');
    }
}