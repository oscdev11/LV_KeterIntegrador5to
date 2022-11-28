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

        function insertPuesto(){
            $data = array(
                'nombre' => $this->input->post('nombre')
            );
            $this->db->insert('departamento', $data);
        }

        //borrar registro de Material
        function deleteQuimicoColor($id_Quimico){
            $this->db->where('id_Quimico', $id_Quimico);
            $this->db->delete('quimicocolor');
            return TRUE;
        }
    }
    
?>