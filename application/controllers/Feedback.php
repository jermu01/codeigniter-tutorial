<?php
	class Feedback extends CI_Controller{
		public function create(){
			
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('feedback/create');
				$this->load->view('templates/footer');
            } else {
				redirect('feedback');
			}
		}
	}