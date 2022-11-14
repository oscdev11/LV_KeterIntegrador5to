<?php

class JefeDepartamentosC extends CI_Controller
{
    public function show(){
         print "holaaa";

       /* $this->load->model('ClientesM');
        $data['clientes'] = $this->ClientesM->getClientes();

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('clientes/listaClientes.php', $data);
        $this->load->view('headers/footer.php');   */
    }
/*
    public function detalleCliente($id_Cliente){
        $this->load->model('ClientesM');
        $data['cliente'] = $this->ClientesM->getCliente($id_Cliente);

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('clientes/detalleCliente.php', $data);
        $this->load->view('headers/footer.php');
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
                        $this->load->view('headers/head.php');
                        $this->load->view('headers/menu.php');
                        $this->load->view('headers/footer.php');
                        $this->load->view('clientes/insertCliente');
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