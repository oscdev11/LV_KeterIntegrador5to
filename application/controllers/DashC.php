<?php

    class dashC extends CI_Controller
    {
        public function show(){
            
            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('dash/vistaDash.php');
            $this->load->view('headers/footer.php');
            
        }
    }
    
?>