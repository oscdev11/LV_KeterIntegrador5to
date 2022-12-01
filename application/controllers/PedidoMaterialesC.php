<?php

    class PedidoMaterialesC extends CI_Controller
    {
        public function show($id_Pedido){
            $this->load->model('PedidoMaterialesM');
            $data['materiales'] = $this->PedidoMaterialesM->getPedidoMateriales($id_Pedido);
            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('pedidoMateriales/listaPedidoMateriales.php', $data);
            $this->load->view('headers/footer.php');
        }

        //  inserción de puesto
          public function insertPedidoMaterial(){
             $this->load->model('PedidoMaterialesM');
             $data['pedidos'] = $this->PedidoMaterialesM->getPedidos();
             $data['materiales'] = $this->PedidoMaterialesM->getMateriales();

                  $this->load->helper(array('form', 'url'));
                  $this->load->library('form_validation');
                  $this->form_validation->set_rules('porcentaje', 'porcentaje', 'required');

                  if($this->form_validation->run() == FALSE){
                      $this->load->view('headers/head.php');
                      $this->load->view('headers/menu.php');
                      $this->load->view('pedidoMateriales/insertPedidoMaterial', $data);
                      $this->load->view('headers/footer.php');
                  } else{
                     $this->PedidoMaterialesM->insertPedidoMaterial();
                      redirect(base_url('index.php/OrdenesC/show'), 'refresh');
                  }
          }
        
        // // borrar puesto 
          public function borrarPedidoMaterial($id_Pedido){
              $this->load->model('PedidoMaterialesM');
              if($data['pedidos'] = $this->PedidoMaterialesM->deletePedidoMaterial($id_Pedido)){
                  redirect(base_url('index.php/OrdenesC/show'), 'refresh');
              }
          }
    }
    
?>