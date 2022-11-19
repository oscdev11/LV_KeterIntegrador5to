<?php

    class PuestosC extends CI_Controller
    {
        public function show(){
            $this->load->model('PuestosM');
            $data['puestos'] = $this->PuestosM->getPuestos();

            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');

            $this->load->view('puestos/listaPuestos.php', $data);

            $this->load->view('headers/footer.php');
        }

        //inserción de puesto
        public function insertPuesto(){
            $this->load->model('PuestosM');
            $data['puestos'] = $this->PuestosM->getPuestos();
            $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombre', 'nombre', 'required');

                if($this->form_validation->run() == FALSE){
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('puestos/insertPuesto', $data);
                    $this->load->view('headers/footer.php');
                } else{
                    $this->PuestosM->insertPuestos();
                    redirect(base_url('index.php/PuestosC/show'), 'refresh');
                }
        }
    }
    
?>