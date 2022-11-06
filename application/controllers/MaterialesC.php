<?php

    class MaterialesC extends CI_Controller
    {
        //show listaMateriales
        public function show(){
            $this->load->model('MaterialesM');
            $data['materiales'] = $this->MaterialesM->getMateriales();

            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('headers/footer.php');

            $this->load->view('materiales/listaMateriales.php', $data);
        }
    }
    

?>