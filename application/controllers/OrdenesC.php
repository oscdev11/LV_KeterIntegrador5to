<?php

class OrdenesC extends CI_Controller
{
    public function show(){
        $this->load->model('OrdenesM');
        $data['ordenes'] = $this->OrdenesM->getOrdenes();

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('ordenes/listaOrdenes.php', $data);
        $this->load->view('headers/footer.php');
    }
    //FUNCION BOTON BORRAR
    public function borrarOrden($id_OrdenProduccion){
        $this->load->model('OrdenesM');
        if($data['ordene'] = $this->OrdenesM->deleteOrden($id_OrdenProduccion)){
            redirect(base_url('index.php/ClientesC/show'), 'refresh');
        }
    }
/*
//FUNCION BOTON VER 
    public function detalleCliente($id_Cliente){
        $this->load->model('ClientesM');
        $data['cliente'] = $this->ClientesM->getCliente($id_Cliente);

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('clientes/detalleCliente.php', $data);
        $this->load->view('headers/footer.php');
    }

//FUNCION BOTON INSERTAR
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
//FUNCION BOTON ACTUALIZAR
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