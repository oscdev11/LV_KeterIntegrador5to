<?php
//euhsd
    class QuimicosC extends CI_Controller
    {
        public function show(){
            $this->load->model('QuimicosM');
            $data['quimicos'] = $this->QuimicosM->getQuimicos();

            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('headers/footer.php');

            $this->load->view('quimicos/listaQuimicos.php', $data);
        }

         // inserción de Quimico
         public function insertQuimico(){
            $this->load->model('QuimicosM');
            $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombre', 'nombre', 'required');

                if($this->form_validation->run() == FALSE){
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('headers/footer.php');
                    $this->load->view('quimicos/insertQuimico');
                } else{
                    $this->QuimicosM->insertQuimico();
                    redirect(base_url('index.php/QuimicosC/show'), 'refresh');
                }
        }

        //actualizar información de Quimico
        public function updateQuimico($id_Quimico){
            $this->load->model('QuimicosM');
            $data['quimico'] = $this->QuimicosM->getQuimico($id_Quimico);
            $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombre', 'nombre', 'required');

                if($this->form_validation->run() == FALSE){
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('headers/footer.php');
                    $this->load->view('quimicos/updateQuimico', $data);
                } else{
                    $this->QuimicosM->updateQuimico($id_Quimico);
                    redirect(base_url('index.php/QuimicosC/show'), 'refresh');
                }
        }

        //borrar quimico
        public function borrarQuimico($id_Quimico){
            $this->load->model('QuimicosM');
            if($data['quimico'] = $this->QuimicosM->deleteQuimico($id_Quimico)){
                redirect(base_url('index.php/QuimicosC/show'), 'refresh');
            }
        }
    }
?>