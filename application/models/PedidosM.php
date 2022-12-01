<?php

    class PedidosM extends CI_Model
    {
        function getPedidos($id_OrdenProduccion){
            $sql = "select * from OrdenProduccion, Pedido where OrdenProduccion.id_OrdenProduccion = Pedido.id_OrdenProduccion AND Pedido.id_OrdenProduccion = $id_OrdenProduccion";
            $query = $this->db->query($sql);
            return $query->result();
        }

        // show lista Puestos
        function getOrdenes(){
            $query = $this->db->get('ordenproduccion');
            return $query->result();
        }

        

        // get departamentosss
         function getColores(){
             $query = $this->db->get('color');
             return $query->result();
        }

        // function getPuesto($id_Puesto){
        //     $this->db->where('id_Puesto', $id_Puesto);
        //     $query = $this->db->get('puesto');
        //     return $query->result();
        // }

         function insertPedido(){
             $data = array(
                 'id_OrdenProduccion' => $this->input->post('id_OrdenProduccion'),
                 'id_Color' => $this->input->post('id_Color'),
                 'cantidad' => $this->input->post('cantidad'),
                 'PrecioUnitario' => $this->input->post('PrecioUnitario'),
                 'descripcion' => $this->input->post('descripcion')
             );
             $this->db->insert('pedido', $data);
         }

        // borrar registro de Material
         function deletePedido($id_Pedido){
             $this->db->where('id_Pedido', $id_Pedido);
             $this->db->delete('pedido');
             return TRUE;
         }
    }
    
?>