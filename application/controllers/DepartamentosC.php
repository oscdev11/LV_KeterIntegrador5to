<?php

    class DepartamentosC extends CI_Controller
    {

        //CONSTRUCTOR PARA EL LOGUEO DE USUARIOS (SESIONES)
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect(base_url());
        }
    }

        //show listaDepartamentos
        public function show(){
            $this->load->model('DepartamentosM');
            $data['departamentos'] = $this->DepartamentosM->getDepartamentos();

            //visualización de header por perfil de usuario
            $this->load->view('headers/head.php');

            if (($this->session->userdata('perfil')==1)) {
                $this->load->view('headers/menu.php');
                $this->load->view('departamentos/listaDepartamentos.php', $data);
                $this->load->view('headers/footer.php');
            } elseif (($this->session->userdata('perfil')==2)) {
                $this->load->view('JD/headers/404.php');
            }

            /*$this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');

            $this->load->view('departamentos/listaDepartamentos.php', $data);

            $this->load->view('headers/footer.php');*/
        }

        //inserción de departamento
        public function insertDepartamento(){
            $this->load->model('DepartamentosM');
            $data['planta'] = $this->DepartamentosM->getPlantas();
            $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombre', 'nombre', 'required');

                if($this->form_validation->run() == FALSE){

                    //visualización de header por perfil de usuario
                    $this->load->view('headers/head.php');

                    if (($this->session->userdata('perfil')==1)) {
                        $this->load->view('headers/menu.php');
                        $this->load->view('departamentos/insertDepartamento', $data);
                        $this->load->view('headers/footer.php');
                    } elseif (($this->session->userdata('perfil')==2)) {
                        $this->load->view('JD/headers/404.php');
                    }

                    /*$this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('departamentos/insertDepartamento', $data);
                    $this->load->view('headers/footer.php');*/
                } else{
                    $this->DepartamentosM->insertDepartamento();
                    redirect(base_url('index.php/DepartamentosC/show'), 'refresh');
                }
        }

        //actualizar información de Departamento
        public function updateDepartamento($id_Departamento){
            $this->load->model('DepartamentosM');
            $data['departamento'] = $this->DepartamentosM->getDepartamento($id_Departamento);
            $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombre', 'nombre', 'required');

                if($this->form_validation->run() == FALSE){

                    //visualización de header por perfil de usuario
                    $this->load->view('headers/head.php');

                    if (($this->session->userdata('perfil')==1)) {
                        $this->load->view('headers/menu.php');
                        $this->load->view('departamentos/updateDepartamento', $data); 
                        $this->load->view('headers/footer.php');
                    } elseif (($this->session->userdata('perfil')==2)) {
                        $this->load->view('JD/headers/404.php');
                    }

                    /*$this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('departamentos/updateDepartamento', $data);                    
                    $this->load->view('headers/footer.php');*/

                } else{
                    $this->DepartamentosM->updateDepartamento($id_Departamento);
                    redirect(base_url('index.php/DepartamentosC/show'), 'refresh');
                }
        }

        public function borrarDepartamento($id_Departamento){
            $this->load->model('DepartamentosM');
            if($data['departamento'] = $this->DepartamentosM->deleteDepartamento($id_Departamento)){
                redirect(base_url('index.php/DepartamentosC/show'), 'refresh');
            }
        }

        //listaPuestos--------------------------------------------------------


    }
?>