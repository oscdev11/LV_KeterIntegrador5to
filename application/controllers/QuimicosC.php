<?php
//euhsd
    class QuimicosC extends CI_Controller
    {

        //CONSTRUCTOR PARA EL LOGUEO DE USUARIOS (SESIONES)
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect(base_url());
        }
    }
    
        public function show(){
            $this->load->model('QuimicosM');
            $data['quimicos'] = $this->QuimicosM->getQuimicos();

            $this->load->view('headers/head.php');

            if (($this->session->userdata('perfil')==1)) {
                $this->load->view('headers/menu.php');
            } elseif (($this->session->userdata('perfil')==2)) {
                $this->load->view('JD/headers/menu.php');
            }

            //$this->load->view('headers/menu.php');
            $this->load->view('quimicos/listaQuimicos.php', $data);            
            $this->load->view('headers/footer.php');

        }

         // inserción de Quimico
         public function insertQuimico(){
            $this->load->model('QuimicosM');
            $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombre', 'nombre', 'required');

                if($this->form_validation->run() == FALSE){
                    
                    //visualización de header por perfil de usuario
                    $this->load->view('headers/head.php');

                    if (($this->session->userdata('perfil')==1)) {
                        $this->load->view('headers/menu.php');
                    } elseif (($this->session->userdata('perfil')==2)) {
                        $this->load->view('JD/headers/menu.php');
                    }

                    $this->load->view('quimicos/insertQuimico');                    
                    $this->load->view('headers/footer.php');

                } else{
                    $this->QuimicosM->insertQuimico();
                    redirect(base_url('index.php/QuimicosC/show'), 'refresh');
                }
        }

        //actualizar información de Quimico
        public function updateQuimico($id_Quimico){
            $this->load->model('QuimicosM');
            $data['quimico'] = $this->QuimicosM->getQuimico($id_Quimico);
            $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombre', 'nombre', 'required');

                if($this->form_validation->run() == FALSE){
                    
                    //visualización de header por perfil de usuario
                    $this->load->view('headers/head.php');

                    if (($this->session->userdata('perfil')==1)) {
                        $this->load->view('headers/menu.php');
                    } elseif (($this->session->userdata('perfil')==2)) {
                        $this->load->view('JD/headers/menu.php');
                    }

                    $this->load->view('quimicos/updateQuimico', $data);                    
                    $this->load->view('headers/footer.php');

                } else{
                    $this->QuimicosM->updateQuimico($id_Quimico);
                    redirect(base_url('index.php/QuimicosC/show'), 'refresh');
                }
        }

        //borrar quimico
        public function borrarQuimico($id_Quimico){
            $this->load->model('QuimicosM');
            if($data['quimico'] = $this->QuimicosM->deleteQuimico($id_Quimico)){
                redirect(base_url('index.php/QuimicosC/show'), 'refresh');
            }
        }
    }
?>