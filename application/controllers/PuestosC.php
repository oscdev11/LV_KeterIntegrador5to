<?php

    class PuestosC extends CI_Controller
    {

        //CONSTRUCTOR PARA EL LOGUEO DE USUARIOS (SESIONES)
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect(base_url());
        }
    }
    
        public function show($id_Departamento){
            $this->load->model('PuestosM');
            $data['puestos'] = $this->PuestosM->getPuestos($id_Departamento);

            //visualización de header por perfil de usuario
            $this->load->view('headers/head.php');

            if (($this->session->userdata('perfil')==1)) {
                $this->load->view('headers/menu.php');
                $this->load->view('puestos/listaPuestos.php', $data);
                $this->load->view('headers/footer.php');
            } elseif (($this->session->userdata('perfil')==2)) {
                $this->load->view('JD/headers/404.php');
            }

            /*$this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('puestos/listaPuestos.php', $data);
            $this->load->view('headers/footer.php');*/
        }

        //inserción de puesto
        public function insertPuesto(){
            $this->load->model('PuestosM');
            $data['puestos'] = $this->PuestosM->getPuestoss();
            $data['departamentos'] = $this->PuestosM->getDepartamentos();

            $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombre', 'nombre', 'required');

                if($this->form_validation->run() == FALSE){

                    //visualización de header por perfil de usuario
                    $this->load->view('headers/head.php');

                    if (($this->session->userdata('perfil')==1)) {
                        $this->load->view('headers/menu.php');
                        $this->load->view('puestos/insertPuesto', $data);
                        $this->load->view('headers/footer.php');
                    } elseif (($this->session->userdata('perfil')==2)) {
                        $this->load->view('JD/headers/404.php');
                    }

                    /*$this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('puestos/insertPuesto', $data);
                    $this->load->view('headers/footer.php');*/
                } else{
                    $this->PuestosM->insertPuesto();
                    redirect(base_url('index.php/DepartamentosC/show'), 'refresh');
                }
        }
        
        //borrar puesto 
        public function borrarPuesto($id_Puesto){
            $this->load->model('PuestosM');
            if($data['puestos'] = $this->PuestosM->deletePuesto($id_Puesto)){
                redirect(base_url('index.php/DepartamentosC/show'), 'refresh');
            }
        }
    }
    
?>