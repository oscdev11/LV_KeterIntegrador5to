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
            redirect(base_url('index.php/OrdenesC/show'), 'refresh');
        }
    }


    //FUNCION BOTON INSERTAR
    public function insertOrden(){
        $this->load->model('OrdenesM');
        $data['plantaId'] = $this->OrdenesM->getPlantaId();
        $data['clientesRazonId'] = $this->OrdenesM->getClienteRazon();
        
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('id_Planta', 'Planta', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('ordenes/insertOrden.php',$data);
            $this->load->view('headers/footer.php');
    }
    else{
        $this->OrdenesM->insertOrden();
        redirect(base_url('index.php/OrdenesC/show'), 'refresh');
        }
    }


   // /FUNCION BOTON ACTUALIZAR
    public function updateOrden($id_OrdenProduccion){
        $this->load->model('OrdenesM');

        $data['ordenesUpdate'] = $this->OrdenesM->getCliente($id_OrdenProduccion);

        $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
               // $this->form_validation->set_rules('alias', 'alias', 'required');


                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('headers/head.php');
                        $this->load->view('headers/menu.php');
                        $this->load->view('headers/footer.php');
                        $this->load->view('ordenes/updateOrdenes', $data);
                }
                else
                {
                        $this->OrdenesM->updateCliente($id_OrdenProduccion);
                        redirect(base_url('index.php/ClientesC/show'), 'refresh');
                }
    }
//funcion boton ver 
    public function detalleOrden($id_OrdenProduccion){
        $this->load->model('OrdenesM');
        $data['odendesVer'] = $this->OrdenesM->getOrden($id_OrdenProduccion);

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('ordenes/detalleOrden.php', $data);
        $this->load->view('headers/footer.php');
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


/
    */
}
?>