<?php

    class QuimicoColorM extends CI_Model
    {
        /*function getQuimicoColores(){
            $query = $this->db->get('quimicocolor');
            return $query->result();
        }*/

        function getQuimicoColores($id_Color){
            $sql = "select c.nombre as Nombre_Quimico, cantidadUsar from quimicocolor
            inner join color b using(id_Color)
            inner join quimico c using(id_Quimico) where b.id_Color = $id_Color";
            // $sql = "select * from QuimicoColor, Quimico where QuimicoColor.id_Quimico = Quimico.id_Quimico AND QuimicoColor.id_Color = $id_Color";

            $query = $this->db->query($sql);
            return $query->result();
        }

        function getQuimicoColor($id_Quimico){
            $this->db->where('id_Quimico', $id_Quimico);
            $query = $this->db->get('quimicocolor');
            return $query->result();
        }

        function getColores(){
            $query = $this->db->get('color');
            return $query->result();
        }

        function getQuimicos(){
            $query = $this->db->get('quimico');
            return $query->result();
        }

        function insertQuimicoColor(){
            $data = array(
                'id_Quimico' => $this->input->post('id_Quimico'),
                'id_Color' => $this->input->post('id_Color'),
                'cantidadUsar' => $this->input->post('cantidadUsar')
            );
            $this->db->insert('quimicoColor', $data);
        }

        //borrar registro de Material
        function deleteQuimicoColor($id_Quimico){
            $this->db->where('id_Quimico', $id_Quimico);
            $this->db->delete('quimicocolor');
            return TRUE;
        }
    }
    
?>