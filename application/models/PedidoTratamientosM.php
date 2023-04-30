<?php

    class PedidoTratamientosM extends CI_Model
    {
        function getPedidoTratamientos($id_Pedido){
            $sql = "select * from Pedido, TratamientoPedido where Pedido.id_Pedido = TratamientoPedido.id_Pedido AND TratamientoPedido.id_Pedido = $id_Pedido";
            $query = $this->db->query($sql);
            return $query->result();
        }

        //  show lista Puestos
         function getPedidos(){
             $query = $this->db->get('Pedido');
             return $query->result();
         }

        // // get departamentosss
          function getTratamientos(){
              $query = $this->db->get('Tratamiento');
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
                  'id_Tratamiento' => $this->input->post('id_Tratamiento'),
                  'tiempoEnTratamiento' => $this->input->post('tiempoEnTratamiento')
              );
              $this->db->insert('TratamientoPedido', $data);
          }

        // // borrar registro de Material
          function deletePedidoTratamiento($id_Tratamiento){
              $this->db->where('id_Tratamiento', $id_Tratamiento);
              $this->db->delete('TratamientoPedido');
              return TRUE;
          }
    }
    
?>