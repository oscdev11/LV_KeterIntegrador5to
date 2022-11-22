<?php

    class QuimicoColorM extends CI_Model
    {
        /*function getQuimicoColores(){
            $query = $this->db->get('quimicocolor');
            return $query->result();
        }*/

        function getQuimicoColores(){
            $sql = "select * from QuimicoColor, Quimico where QuimicoColor.id_Quimico = Quimico.id_Quimico";
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