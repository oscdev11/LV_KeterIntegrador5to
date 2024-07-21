<?php

    class PedidoTratamientosC extends CI_Controller
    {

        //CONSTRUCTOR PARA EL LOGUEO DE USUARIOS (SESIONES)
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect(base_url());
        }
    }
    
        public function show($id_Pedido){
            $this->load->model('PedidoTratamientosM');
            $data['tratamientos'] = $this->PedidoTratamientosM->getPedidoTratamientos($id_Pedido);
            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('pedidoTratamientos/listaPedidoTratamientos.php', $data);
            $this->load->view('headers/footer.php');
        }

        //  inserción de puesto
          public function insertPedidoTratamiento(){
             $this->load->model('PedidoTratamientosM');
             $data['pedidos'] = $this->PedidoTratamientosM->getPedidos();
             $data['tratamientos'] = $this->PedidoTratamientosM->getTratamientos();

                  $this->load->helper(array('form', 'url'));
                  $this->load->library('form_validation');
                  $this->form_validation->set_rules('tiempoEnTratamiento', 'tiempoEnTratamiento', 'required');

                  if($this->form_validation->run() == FALSE){
                      $this->load->view('headers/head.php');
                      $this->load->view('headers/menu.php');
                      $this->load->view('pedidoTratamientos/insertPedidoTratamiento', $data);
                      $this->load->view('headers/footer.php');
                  } else{
                     $this->PedidoMaterialesM->insertPedidoMaterial();
                      redirect(base_url('index.php/OrdenesC/show'), 'refresh');
                  }
          }
        
        // // borrar puesto 
          public function borrarPedidoTratamiento($id_Tratamiento){
              $this->load->model('PedidoTratamientosM');
              if($data['tratamientos'] = $this->PedidoTratamientosM->deletePedidoTratamiento($id_Tratamiento)){
                  redirect(base_url('index.php/OrdenesC/show'), 'refresh');
              }
          }
    }
    
?>