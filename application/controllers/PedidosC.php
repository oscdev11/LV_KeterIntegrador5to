<?php

    class PedidosC extends CI_Controller
    {
        public function show($id_OrdenProduccion){
            $this->load->model('PedidosM');
            $data['pedidos'] = $this->PedidosM->getPedidos($id_OrdenProduccion);
            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('pedidos/listaPedidos.php', $data);
            $this->load->view('headers/footer.php');
        }

        // inserción de puesto
         public function insertPedido(){
            $this->load->model('PedidosM');
            $data['ordenes'] = $this->PedidosM->getOrdenes();
            $data['colores'] = $this->PedidosM->getColores();

                 $this->load->helper(array('form', 'url'));
                 $this->load->library('form_validation');
                 $this->form_validation->set_rules('cantidad', 'cantidad', 'required');

                 if($this->form_validation->run() == FALSE){
                     $this->load->view('headers/head.php');
                     $this->load->view('headers/menu.php');
                     $this->load->view('pedidos/insertPedido', $data);
                     $this->load->view('headers/footer.php');
                 } else{
                    $this->PedidosM->insertPedido();
                     redirect(base_url('index.php/OrdenesC/show'), 'refresh');
                 }
         }
        
        // borrar puesto 
         public function borrarPedido($id_Pedido){
             $this->load->model('PedidosM');
             if($data['pedidos'] = $this->PedidosM->deletePedido($id_Pedido)){
                 redirect(base_url('index.php/OrdenesC/show'), 'refresh');
             }
         }
    }
    
?>