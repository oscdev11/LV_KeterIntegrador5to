<?php

    class PedidosC extends CI_Controller
    {

        //CONSTRUCTOR PARA EL LOGUEO DE USUARIOS (SESIONES)
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect(base_url());
        }
    }
    
        public function show($id_OrdenProduccion){
            $this->load->model('PedidosM');
            $data['pedidos'] = $this->PedidosM->getPedidos($id_OrdenProduccion);

            //visualización de header por perfil de usuario
            $this->load->view('headers/head.php');

            if (($this->session->userdata('perfil')==1)) {
                $this->load->view('headers/menu.php');
            } elseif (($this->session->userdata('perfil')==2)) {
                $this->load->view('JD/headers/menu.php');
            }

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
                    
                    //visualización de header por perfil de usuario
                    $this->load->view('headers/head.php');

                    if (($this->session->userdata('perfil')==1)) {
                        $this->load->view('headers/menu.php');
                    } elseif (($this->session->userdata('perfil')==2)) {
                        $this->load->view('JD/headers/menu.php');
                    }

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