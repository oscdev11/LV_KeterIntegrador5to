<?php

    class QuimicoColorC extends CI_Controller
    {
        public function show(){
            $this->load->model('QuimicoColorM');
            $data['quimicos'] = $this->QuimicoColorM->getQuimicoColores();
            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('quimicoColor/listaQuimicoColor.php', $data);
            $this->load->view('headers/footer.php');
        }

        //borrar quimico
        public function borrarQuimicoColor($id_Quimico){
            $this->load->model('QuimicoColorM');
            if($data['quimicos'] = $this->QuimicoColorM->deleteQuimicoColor($id_Quimico)){
                redirect(base_url('index.php/QuimicoColorC/show'), 'refresh');
            }
        }
    }

?>