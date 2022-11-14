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
    }
    
?>