<?php

    class  Pages extends CI_Controller{
     
     public function view($page='home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            	Show_404();
            }
            $data['title']=ucfirst($page);
                $data['categories']=$this->Category_model->get_categories();
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/footer');

     }










    
}
?>