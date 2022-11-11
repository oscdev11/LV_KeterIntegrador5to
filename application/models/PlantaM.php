<?php
    class PlantaM extends CI_Model{
//funcion pantalla principal
        function getPlantas(){
            $query = $this->db->get('planta');
            return $query->result();
        }

//fucion ver de la tabla user admin
        function getAdmin(){
            $query = $this->db->get('userAdmin');
            return $query->result();
        }

//funcion boton ver
        function getPlanta($id_Planta){
            $this->db->where('id_Planta', $id_Planta);
            $query = $this->db->get('planta');
            return $query->result();
        }
//funcion boton insertar
        function insertPlanta(){
            $data = array(
                'id_UserAdmin' => $this->input->post('id_UserAdmin'),
                'nombre' => $this->input->post('nombre'),
                'alias' => $this->input->post('alias'),
                'telefono' => $this->input->post('telefono'),
                'domicilio' => $this->input->post('domicilio'),
                );
                $this->db->insert('planta', $data);
        }
//funcion actualizar planta
        function updatePlanta($id_Planta){
            $data = array(
                'id_UserAdmin' => $this->input->post('id_UserAdmin'),
                'nombre' => $this->input->post('nombre'),
                'alias' => $this->input->post('alias'),
                'telefono' => $this->input->post('telefono'),
                'domicilio' => $this->input->post('domicilio'),
                );
                $this->db->where('id_Planta', $this->input->post('id_Planta'));
                $this->db->update('planta', $data);
        }
 //funcion eliminar        
        function deletePlanta($id_Planta){
            $this->db->where('id_Planta', $id_Planta);
            $this->db->delete('planta');
            return TRUE;
        }
    }
?>