<?php

class JefeDepartamentosC extends CI_Controller
{

    //CONSTRUCTOR PARA EL LOGUEO DE USUARIOS (SESIONES)
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect(base_url());
        }
    }
    
    public function show(){
        $this->load->model('JefeDepartamentosM');
        $data['jefes'] = $this->JefeDepartamentosM->getJefes();

        //visualización de header por perfil de usuario
        $this->load->view('headers/head.php');

        if (($this->session->userdata('perfil')==1)) {
            $this->load->view('headers/menu.php');
            $this->load->view('jefesDepartamento/listaJefesDepartamentos.php', $data);
            $this->load->view('headers/footer.php');
        } elseif (($this->session->userdata('perfil')==2)) {
            $this->load->view('JD/headers/404.php');
        }

        /*$this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('jefesDepartamento/listaJefesDepartamentos.php', $data);
        $this->load->view('headers/footer.php');   */
    }


    

    public function inserJefeDepartamento(){
        $this->load->model('JefeDepartamentosM');
        $data['Empleado'] = $this->JefeDepartamentosM->getEmpleado();
        $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('id_Empleado', 'nombreUsuario', 'contra', 'perfil', 'required');


                if ($this->form_validation->run() == FALSE)
                {

                    //visualización de header por perfil de usuario
                    $this->load->view('headers/head.php');

                    if (($this->session->userdata('perfil')==1)) {
                        $this->load->view('headers/menu.php');
                        $this->load->view('jefesDepartamento/inserJefeDepartamento',$data);
                        $this->load->view('headers/footer.php');
                    } elseif (($this->session->userdata('perfil')==2)) {
                        $this->load->view('JD/headers/404.php');
                    }

                        /*$this->load->view('headers/head.php');
                        $this->load->view('headers/menu.php');
                        $this->load->view('jefesDepartamento/inserJefeDepartamento',$data);
                        $this->load->view('headers/footer.php');*/
                        
                }
                else
                {
                        $this->JefeDepartamentosM->inserJefeDepartamento();
                        redirect(base_url('index.php/JefeDepartamentosC/show'), 'refresh');
                }
    }


    public function borrarJefeDepartamento($id_JefeDepartamento){
        $this->load->model('JefeDepartamentosM');
        if($data['jefeDepartamentos'] = $this->JefeDepartamentosM->deleteJefeDepartamento($id_JefeDepartamento)){
            redirect(base_url('index.php/JefeDepartamentosC/show'), 'refresh');
        }
    }

    public function updateJefeDepartamento($id_JefeDepartamento){
        $this->load->model('JefeDepartamentosM');
        $data['jefedepartamento'] = $this->JefeDepartamentosM->getJefes($id_JefeDepartamento);
        $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nombreUsuario', 'contra', 'required');

            if($this->form_validation->run() == FALSE){

                //visualización de header por perfil de usuario
                $this->load->view('headers/head.php');

                if (($this->session->userdata('perfil')==1)) {
                    $this->load->view('headers/menu.php');
                    $this->load->view('jefesDepartamento/updateJefeDepartamento', $data);
                    $this->load->view('headers/footer.php');
                } elseif (($this->session->userdata('perfil')==2)) {
                    $this->load->view('JD/headers/404.php');
                }

                /*$this->load->view('headers/head.php');
                $this->load->view('headers/menu.php');
                $this->load->view('jefesDepartamento/updateJefeDepartamento', $data);                    
                $this->load->view('headers/footer.php');*/

            } else{
                $this->inserJefeDepartamentoM->updateJefeDepartamento($id_JefeDepartamento);
                redirect(base_url('index.php/JefeDepartamentos/show'), 'refresh');
            }
    }



    /*
    public function borrarCliente($id_Cliente){
        $this->load->model('ClientesM');
        if($data['cliente'] = $this->ClientesM->deleteCliente($id_Cliente)){
            redirect(base_url('index.php/ClientesC/show'), 'refresh');
        }
    }

    public function updateCliente($id_Cliente){
        $this->load->model('ClientesM');

        $data['cliente'] = $this->ClientesM->getCliente($id_Cliente);

        $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('alias', 'alias', 'required');


                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('headers/head.php');
                        $this->load->view('headers/menu.php');
                        $this->load->view('headers/footer.php');
                        $this->load->view('clientes/updateCliente', $data);
                }
                else
                {
                        $this->ClientesM->updateCliente($id_Cliente);
                        redirect(base_url('index.php/ClientesC/show'), 'refresh');
                }
    }
    */
    
}
?>