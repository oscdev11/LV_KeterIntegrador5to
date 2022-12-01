<?php

    class QuimicoTratamientoC extends CI_Controller
    {
        public function show($id_Tratamiento){
            $this->load->model('QuimicoTratamientoM');
            $data['quimicos'] = $this->QuimicoTratamientoM->getQuimicoTratamientos($id_Tratamiento);
            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('quimicoTratamiento/listaQuimicoTratamiento.php', $data);
            $this->load->view('headers/footer.php');
        }

        public function insertQuimicoTratamiento(){
            $this->load->model('QuimicoTratamientoM');
            $data['tratamientos'] = $this->QuimicoTratamientoM->getTratamientos();
            $data['quimicos'] = $this->QuimicoTratamientoM->getQuimicos();

            $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('cantidadUsar', 'cantidadUsar', 'required');

                if($this->form_validation->run() == FALSE){
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('quimicoTratamiento/insertQuimicoTratamiento', $data);
                    $this->load->view('headers/footer.php');
                } else{
                    $this->QuimicoTratamientoM->insertQuimicoTratamiento();
                    redirect(base_url('index.php/TratamientosC/show'), 'refresh');
                }
        }

        //borrar quimico
        public function borrarQuimicoTratamiento($id_Quimico){
            $this->load->model('QuimicoTratamientoM');
            if($data['quimicos'] = $this->QuimicoTratamientoM->deleteQuimicoTratamiento($id_Quimico)){
                redirect(base_url('index.php/QuimicoTratamientoC/show'), 'refresh');
            }
        }
    }

?>