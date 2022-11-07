<?php
class PlantaC extends CI_Controller{
    public function show(){
        $this->load->model('PlantaM');
        $data['plantas'] = $this->PlantaM->getPlantas();
        
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('plantas/listaPlantas.php', $data);
        $this->load->view('headers/footer.php');
    }

    public function detallePlanta($id_Planta){
        $this->load->model('PlantaM');
        $data['planta'] = $this->PlantaM->getPlanta($id_Planta);
        
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('plantas/detallePlanta.php', $data);
        $this->load->view('headers/footer.php');
    }

    public function borrarPlanta($id_Planta){
        $this->load->model('PlantaM');
        if($data['planta'] = $this->PlantaM->deletePlanta($id_Planta)){
            redirect(base_url('index.php/PlantaC/show'), 'refresh');
        }
    }

    public function insertarPlanta(){
        $this->load->model('PlantaM');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('plantas/insertarPlanta');
            $this->load->view('headers/footer.php');
    }
    else{
        $this->PlantaM->insertPlanta();
        redirect(base_url('index.php/PlantaC/show'), 'refresh');
    }
    }

    public function updatePlanta(){
        $this->load->model('PlantaM');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('plantas/updatePlanta');
            $this->load->view('headers/footer.php');
    }
    else{
        $this->PlantaM->updatePlanta();
        redirect(base_url('index.php/PlantaC/show'), 'refresh');
    }
    }

}
?>