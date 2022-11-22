<?php

    class TratamientosC extends CI_Controller
    {
        //show listaTratamientos
        public function show(){
            $this->load->model('TratamientosM');
            $data['tratamientos'] = $this->TratamientosM->getTratamientos();

            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
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
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
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
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
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

            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
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