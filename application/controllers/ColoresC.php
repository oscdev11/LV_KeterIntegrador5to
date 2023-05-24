<?php

    class ColoresC extends CI_Controller
    {

        //CONSTRUCTOR PARA EL LOGUEO DE USUARIOS (SESIONES)
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect(base_url());
        }
    }

        public function show(){
            $this->load->model('ColoresM');
            $data['colores'] = $this->ColoresM->getColores();

            $this->load->view('headers/head.php');

            if (($this->session->userdata('perfil')==1)) {
                $this->load->view('headers/menu.php');
            } elseif (($this->session->userdata('perfil')==2)) {
                $this->load->view('JD/headers/menu.php');
            }

            //$this->load->view('headers/menu.php');
            $this->load->view('colores/listaColores.php', $data);            
            $this->load->view('headers/footer.php');

        }

        //ver Color
        public function detalleColor($id_Color){
            $this->load->model('ColoresM');
            $data['color'] = $this->ColoresM->getColor($id_Color);

            //visualización de header por perfil de usuario
            $this->load->view('headers/head.php');

            if (($this->session->userdata('perfil')==1)) {
                $this->load->view('headers/menu.php');
            } elseif (($this->session->userdata('perfil')==2)) {
                $this->load->view('JD/headers/menu.php');
            }

            $this->load->view('colores/detalleColor.php', $data);
            $this->load->view('headers/footer.php');

        }

        // inserción de Color
        public function insertColor(){
            $this->load->model('ColoresM');
            $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombreColor', 'nombreColor', 'required');

                if($this->form_validation->run() == FALSE){
                    
                    //visualización de header por perfil de usuario
                    $this->load->view('headers/head.php');

                    if (($this->session->userdata('perfil')==1)) {
                        $this->load->view('headers/menu.php');
                    } elseif (($this->session->userdata('perfil')==2)) {
                        $this->load->view('JD/headers/menu.php');
                    }

                    $this->load->view('colores/insertColor');                    
                    $this->load->view('headers/footer.php');

                } else{
                    $this->ColoresM->insertColor();
                    redirect(base_url('index.php/ColoresC/show'), 'refresh');
                }
        }

        //actualizar información de Color
        public function updateColor($id_Color){
            $this->load->model('ColoresM');
            $data['color'] = $this->ColoresM->getColor($id_Color);
            $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombreColor', 'nombreColor', 'required');

                if($this->form_validation->run() == FALSE){
                    
                    //visualización de header por perfil de usuario
                    $this->load->view('headers/head.php');

                    if (($this->session->userdata('perfil')==1)) {
                        $this->load->view('headers/menu.php');
                    } elseif (($this->session->userdata('perfil')==2)) {
                        $this->load->view('JD/headers/menu.php');
                    }

                    $this->load->view('colores/updateColor', $data);                    
                    $this->load->view('headers/footer.php');

                } else{
                    $this->ColoresM->updateColor($id_Color);
                    redirect(base_url('index.php/ColoresC/show'), 'refresh');
                }
        }

        //borrar quimico
        public function borrarColor($id_Color){
            $this->load->model('ColoresM');
            if($data['color'] = $this->ColoresM->deleteColor($id_Color)){
                redirect(base_url('index.php/ColoresC/show'), 'refresh');
            }
        }
    }
    

?>