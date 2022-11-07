<?php
    class PlantaM extends CI_Model{

        function getPlantas(){
            $query = $this->db->get('planta');
            return $query->result();
        }

        function getPlanta($id_Planta){
            $this->db->where('id_Planta', $id_Planta);
            $query = $this->db->get('planta');
            return $query->result();
        }

        function deletePlanta($id_Planta){
            $this->db->where('id_Planta', $id_Planta);
            $this->db->delete('planta');
            return TRUE;
        }

        function insertPlanta(){
            $data = array(
                'planta' => $this->input->post('planta'),
                'alias' => $this->input->post('alias'),
                'telefono' => $this->input->post('telefono'),
                'domicilio' => $this->input->post('domicilio'),
                );
                $this->db->insert('planta', $data);
        }

        function updatePlanta(){
            $data = array(
                'planta' => $this->input->post('planta'),
                'alias' => $this->input->post('alias'),
                'telefono' => $this->input->post('telefono'),
                'domicilio' => $this->input->post('domicilio'),
                );
                $this->db->where('id_Planta', $this->input->post('id_Planta'));
                $this->db->update('planta', $data);
        }
    }
?>