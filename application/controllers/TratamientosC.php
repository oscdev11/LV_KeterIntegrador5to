<?php

    class TratamientosC extends CI_Controller
    {

        //CONSTRUCTOR PARA EL LOGUEO DE USUARIOS (SESIONES)
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect(base_url());
        }
    }
    
        //show listaTratamientos
        public function show(){
            $this->load->model('TratamientosM');
            $data['tratamientos'] = $this->TratamientosM->getTratamientos();

            $this->load->view('headers/head.php');

            if (($this->session->userdata('perfil')==1)) {
                $this->load->view('headers/menu.php');
            } elseif (($this->session->userdata('perfil')==2)) {
                $this->load->view('JD/headers/menu.php');
            }

            //$this->load->view('headers/menu.php');
            $this->load->view('tratamientos/listaTratamientos.php', $data);            
            $this->load->view('headers/footer.php');

        }

        // inserción de Tratamiento
        public function insertTratamiento(){
            $this->load->model('TratamientosM');
            $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombreTratamiento', 'nombreTratamiento', 'required');

                if($this->form_validation->run() == FALSE){
                    
                    //visualización de header por perfil de usuario
                    $this->load->view('headers/head.php');

                    if (($this->session->userdata('perfil')==1)) {
                        $this->load->view('headers/menu.php');
                    } elseif (($this->session->userdata('perfil')==2)) {
                        $this->load->view('JD/headers/menu.php');
                    }

                    $this->load->view('tratamientos/insertTratamiento');                    
                    $this->load->view('headers/footer.php');

                } else{
                    $this->TratamientosM->insertTratamiento();
                    redirect(base_url('index.php/TratamientosC/show'), 'refresh');
                }
        }

        //actualizar información de Tratamiento
        public function updateTratamiento($id_Tratamiento){
            $this->load->model('TratamientosM');
            $data['tratamiento'] = $this->TratamientosM->getTratamiento($id_Tratamiento);
            $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombreTratamiento', 'nombreTratamiento', 'required');

                if($this->form_validation->run() == FALSE){
                    
                    //visualización de header por perfil de usuario
                    $this->load->view('headers/head.php');

                    if (($this->session->userdata('perfil')==1)) {
                        $this->load->view('headers/menu.php');
                    } elseif (($this->session->userdata('perfil')==2)) {
                        $this->load->view('JD/headers/menu.php');
                    }

                    $this->load->view('tratamientos/updateTratamiento', $data);                    
                    $this->load->view('headers/footer.php');

                } else{
                    $this->TratamientosM->updateTratamiento($id_Tratamiento);
                    redirect(base_url('index.php/TratamientosC/show'), 'refresh');
                }
        }

        //ver Tratamiento
        public function detalleTratamiento($id_Tratamiento){
            $this->load->model('TratamientosM');
            $data['tratamiento'] = $this->TratamientosM->getTratamiento($id_Tratamiento);

            //visualización de header por perfil de usuario
            $this->load->view('headers/head.php');

            if (($this->session->userdata('perfil')==1)) {
                $this->load->view('headers/menu.php');
            } elseif (($this->session->userdata('perfil')==2)) {
                $this->load->view('JD/headers/menu.php');
            }

            $this->load->view('tratamientos/detalleTratamiento.php', $data);            
            $this->load->view('headers/footer.php');

        }

        //borrar quimico
        public function borrarTratamiento($id_Tratamiento){
            $this->load->model('TratamientosM');
            if($data['tratamiento'] = $this->TratamientosM->deleteTratamiento($id_Tratamiento)){
                redirect(base_url('index.php/TratamientosC/show'), 'refresh');
            }
        }
    }
    
?>