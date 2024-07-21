<?php

    class MaterialesC extends CI_Controller
    {

        //CONSTRUCTOR PARA EL LOGUEO DE USUARIOS (SESIONES)
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect(base_url());
        }
    }
    
        //show listaMateriales
        public function show(){
            $this->load->model('MaterialesM');
            $data['materiales'] = $this->MaterialesM->getMateriales();

            $this->load->view('headers/head.php');

            if (($this->session->userdata('perfil')==1)) {
                $this->load->view('headers/menu.php');
            } elseif (($this->session->userdata('perfil')==2)) {
                $this->load->view('JD/headers/menu.php');
            }

            //$this->load->view('headers/menu.php');
            $this->load->view('materiales/listaMateriales.php', $data);            
            $this->load->view('headers/footer.php');

        }

        //ver Material
        public function detalleMaterial($id_Material){
            $this->load->model('MaterialesM');
            $data['material'] = $this->MaterialesM->getMaterial($id_Material);

            //visualización de header por perfil de usuario
            $this->load->view('headers/head.php');

            if (($this->session->userdata('perfil')==1)) {
                $this->load->view('headers/menu.php');
            } elseif (($this->session->userdata('perfil')==2)) {
                $this->load->view('JD/headers/menu.php');
            }

            $this->load->view('materiales/detalleMaterial.php', $data);            
            $this->load->view('headers/footer.php');

        }

        // inserción de Material
        public function insertMaterial(){
            $this->load->model('MaterialesM');
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

                    $this->load->view('materiales/insertMaterial');                    
                    $this->load->view('headers/footer.php');

                } else{
                    $this->MaterialesM->insertMaterial();
                    redirect(base_url('index.php/MaterialesC/show'), 'refresh');
                }
        }

        // actualizar información de Material
        public function updateMaterial($id_Material){
            $this->load->model('MaterialesM');
            $data['material'] = $this->MaterialesM->getMaterial($id_Material);
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

                    $this->load->view('materiales/updateMaterial', $data);                    
                    $this->load->view('headers/footer.php');

                } else{
                    $this->MaterialesM->updateMaterial($id_Material);
                    redirect(base_url('index.php/MaterialesC/show'), 'refresh');
                }
        }

        public function borrarMaterial($id_Material){
            $this->load->model('MaterialesM');
            if($data['material'] = $this->MaterialesM->deleteMaterial($id_Material)){
                redirect(base_url('index.php/MaterialesC/show'), 'refresh');
            }
        }
    }
?>