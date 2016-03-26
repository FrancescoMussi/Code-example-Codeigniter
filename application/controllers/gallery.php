<?php


class Gallery extends CI_Controller {

               
              public function index()
              {

              	   $this->load->model('Gallery_model');

              	   if($this->input->post('upload'))
              	   {
              	   	   $this->Gallery_model->do_upload();
              	   }

              	   // passing  the images to the view so that the view can load them - always using $data
                   $data['images'] = $this->Gallery_model->get_images();
              	   
                   
                   $this->load->view('gallery', $data);


              }





	}