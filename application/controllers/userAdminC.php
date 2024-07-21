<?php

class userAdminC extends CI_Controller
{

    //CONSTRUCTOR PARA EL LOGUEO DE USUARIOS (SESIONES)
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect(base_url());
        }
    }
    
    //
    public function show(){
        $this->load->model('userAdminM');
            $data['userAdmin'] = $this->userAdminM->getUserAdmins();

            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('userAdmin/listaUserAdmin.php', $data);            
            $this->load->view('headers/footer.php');

    }

    //actualizar información de UserAdmin
    public function updateUserAdmin($id_UserAdmin){
        $this->load->model('userAdminM');
        $data['userAdmin'] = $this->userAdminM->getUserAdmin($id_UserAdmin);
        $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nombreUsuario', 'nombreUsuario', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('headers/head.php');
                $this->load->view('headers/menu.php');
                $this->load->view('userAdmin/updateUserAdmin', $data);                
                $this->load->view('headers/footer.php');

            } else{
                $this->userAdminM->updateUserAdmin($id_UserAdmin);
                redirect(base_url('index.php/userAdminC/show'), 'refresh');
            }
    }
}


?>