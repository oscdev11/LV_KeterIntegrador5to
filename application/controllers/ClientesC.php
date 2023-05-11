<?php

class ClientesC extends CI_Controller
{

    //CONSTRUCTOR PARA EL LOGUEO DE USUARIOS (SESIONES)
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect(base_url());
        }
    }

    public function show(){

        $this->load->model('ClientesM');
        $data['clientes'] = $this->ClientesM->getClientes();

        //visualización de header por perfil de usuario
        $this->load->view('headers/head.php');

        if (($this->session->userdata('perfil')==1)) {
            $this->load->view('headers/menu.php');
            $this->load->view('clientes/listaClientes.php', $data);
            $this->load->view('headers/footer.php');
        } elseif (($this->session->userdata('perfil')==2)) {
            $this->load->view('JD/headers/404.php');
        }

        /*$this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('clientes/listaClientes.php', $data);
        $this->load->view('headers/footer.php');*/
    }

    public function detalleCliente($id_Cliente){
        $this->load->model('ClientesM');
        $data['cliente'] = $this->ClientesM->getCliente($id_Cliente);

        //visualización de header por perfil de usuario
        $this->load->view('headers/head.php');

        if (($this->session->userdata('perfil')==1)) {
            $this->load->view('headers/menu.php');
            $this->load->view('clientes/detalleCliente.php', $data);
            $this->load->view('headers/footer.php');
        } elseif (($this->session->userdata('perfil')==2)) {
            $this->load->view('JD/headers/404.php');
        }

        /*$this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('clientes/detalleCliente.php', $data);
        $this->load->view('headers/footer.php');*/
    }

    public function borrarCliente($id_Cliente){
        $this->load->model('ClientesM');
        if($data['cliente'] = $this->ClientesM->deleteCliente($id_Cliente)){
            redirect(base_url('index.php/ClientesC/show'), 'refresh');
        }
    }

    public function insertCliente(){
        $this->load->model('ClientesM');
        $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('alias', 'alias', 'required');


                if ($this->form_validation->run() == FALSE)
                {

                    //visualización de header por perfil de usuario
                    $this->load->view('headers/head.php');

                    if (($this->session->userdata('perfil')==1)) {
                        $this->load->view('headers/menu.php');
                        $this->load->view('clientes/insertCliente');
                        $this->load->view('headers/footer.php');
                    } elseif (($this->session->userdata('perfil')==2)) {
                        $this->load->view('JD/headers/404.php');
                    }

                        /*$this->load->view('headers/head.php');
                        $this->load->view('headers/menu.php');
                        $this->load->view('clientes/insertCliente');                        
                        $this->load->view('headers/footer.php');*/

                }
                else
                {
                        $this->ClientesM->insertCliente();
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
                    //visualización de header por perfil de usuario
                    $this->load->view('headers/head.php');

                    if (($this->session->userdata('perfil')==1)) {
                        $this->load->view('headers/menu.php');
                        $this->load->view('clientes/updateCliente', $data);
                        $this->load->view('headers/footer.php');
                    } elseif (($this->session->userdata('perfil')==2)) {
                        $this->load->view('JD/headers/404.php');
                    }

                        /*$this->load->view('headers/head.php');
                        $this->load->view('headers/menu.php');
                        
                        $this->load->view('headers/footer.php');*/
                }
                else
                {
                        $this->ClientesM->updateCliente($id_Cliente);
                        redirect(base_url('index.php/ClientesC/show'), 'refresh');
                }
    }
}
?>