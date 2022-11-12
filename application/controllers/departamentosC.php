<?php

    class DepartamentosC extends CI_Controller
    {
        //show listaDepartamentos
        public function show(){
            $this->load->model('DepartamentosM');
            $data['departamentos'] = $this->DepartamentosM->getDepartamentos();

            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');

            $this->load->view('departamentos/listaDepartamentos.php', $data);

            $this->load->view('headers/footer.php');
        }

        //inserción de departamento
        public function insertDepartamento(){
            $this->load->model('DepartamentosM');
            $data['planta'] = $this->DepartamentosM->getPlantas();
            $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombre', 'nombre', 'required');

                if($this->form_validation->run() == FALSE){
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('departamentos/insertDepartamento', $data);
                    $this->load->view('headers/footer.php');
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
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('headers/footer.php');
                    $this->load->view('departamentos/updateDepartamento', $data);
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
    }
?>