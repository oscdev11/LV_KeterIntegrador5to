<?php

    class PedidoMaterialesM extends CI_Model
    {
        function getPedidoMateriales($id_Pedido){
            $sql = "select * from Pedido, MaterialPedido where Pedido.id_Pedido = MaterialPedido.id_Pedido AND MaterialPedido.id_Pedido = $id_Pedido";
            $query = $this->db->query($sql);
            return $query->result();
        }

        //  show lista Puestos
         function getPedidos(){
             $query = $this->db->get('Pedido');
             return $query->result();
         }

        // // get departamentosss
          function getMateriales(){
              $query = $this->db->get('Material');
              return $query->result();
         }

        // // function getPuesto($id_Puesto){
        // //     $this->db->where('id_Puesto', $id_Puesto);
        // //     $query = $this->db->get('puesto');
        // //     return $query->result();
        // // }

          function insertPedidoMaterial(){
              $data = array(
                  'id_Pedido' => $this->input->post('id_Pedido'),
                  'id_Material' => $this->input->post('id_Material'),
                  'porcentaje' => $this->input->post('porcentaje')
              );
              $this->db->insert('MaterialPedido', $data);
          }

        // // borrar registro de Material
          function deletePedidoMaterial($id_Pedido){
              $this->db->where('id_Pedido', $id_Pedido);
              $this->db->delete('MaterialPedido');
              return TRUE;
          }
    }
    
?>