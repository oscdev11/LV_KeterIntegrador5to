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

        //borrar quimico
        public function borrarQuimicoTratamiento($id_Quimico){
            $this->load->model('QuimicoTratamientoM');
            if($data['quimicos'] = $this->QuimicoTratamientoM->deleteQuimicoTratamiento($id_Quimico)){
                redirect(base_url('index.php/QuimicoTratamientoC/show'), 'refresh');
            }
        }
    }

?>