<?php

    class PuestosC extends CI_Controller
    {
        public function show($id_Departamento){
            $this->load->model('PuestosM');
            $data['puestos'] = $this->PuestosM->getPuestos($id_Departamento);
            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('puestos/listaPuestos.php', $data);
            $this->load->view('headers/footer.php');
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
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('puestos/insertPuesto', $data);
                    $this->load->view('headers/footer.php');
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