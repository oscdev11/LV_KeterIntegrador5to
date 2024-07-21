<?php

    class DashCJD extends CI_Controller
    {

        //CONSTRUCTOR PARA EL LOGUEO DE USUARIOS (SESIONES)
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect(base_url());
        }
    }
    
        public function show(){
            
            //visualización de header por perfil de usuario
            $this->load->view('headers/head.php');

            if (($this->session->userdata('perfil')==2)) {
                $this->load->view('JD/headers/menu.php');
                $this->load->view('JD/headers/dashJD.php');
                $this->load->view('headers/footer.php');
            } elseif (($this->session->userdata('perfil')==1)) {
                $this->load->view('JD/headers/404.php');
            }
        }
    }
    
?>