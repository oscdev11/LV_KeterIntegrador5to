<?php 

class Usuario extends CI_Controller{

public function login(){  

    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nombreUsuario', 'nombreUsuario', 'required');
    $this->form_validation->set_rules('contra', 'contra', 'required');


                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('headers/head');
                    $this->load->view('usuario/login');
                }
                else
                {
                    $this->load->model('UsuarioM');
                    $usuario = $this->UsuarioM->validarUsuario($this->input->post('nombreUsuario'), md5($this->input->post('contra')));
                    print_r($usuario);

                    //si el query de $usuario es igual a nulo quiere decir que no hay coincidencias en la base de datos
                    //por lo tanto volverá a redirigir al login
                    if($usuario == null){
                        redirect(base_url());
                    }

                    //por otro lado, si existe una respuesta en el array, se ejecutará el inicio de sesion con el login:
                    else{ 
                        if($usuario[0]->perfil==1){
                        $newdata = array(
                            'nombreUsuario'  => $this->input->post('nombreUsuario'),
                            'perfil'     => 1,
                            'logged_in' => TRUE
                        );
                    
                        $this->session->set_userdata($newdata);
                        
                        redirect(base_url('index.php/PlantaC/show'),'refresh');
                        
                    } elseif ($usuario[0]->perfil==2) {
                        $newdata = array(
                            'nombreUsuario'  => $this->input->post('nombreUsuario'),
                            'perfil'     => 2,
                            'logged_in' => TRUE
                        );
                    
                        $this->session->set_userdata($newdata);
                        redirect(base_url('index.php/OrdenesC/show'),'refresh');
                    }
                }
                    //redirect(base_url('index.php/PlantaC/show'), 'refresh');
                }
}

    /*
    ESTO ES LO QUE HIZO EL COMPA ADOLFO
    if(isset($_POST['contra'])){
        $this->load->model('UsuarioM');
        
        if ($this->UsuarioM->validaUsuario($_POST['nombreUsuario'],$_POST['contra'])){

            redirect(base_url('index.php/JefeDepartamentosC/show'),'refresh'); 

        }else if ($this->UsuarioM->validaUsuarioE($_POST['nombreUsuario'],$_POST['contra'])) {

            redirect(base_url('index.php/PlantaC/show'),'refresh'); 

        }else{
           
        }
    }*/


}?>