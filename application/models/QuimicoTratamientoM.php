<?php

    class QuimicoTratamientoM extends CI_Model
    {
        function getQuimicoTratamientos(){
            $query = $this->db->get('quimicotratamiento');
            return $query->result();
        }

        /*function getQuimicoTratamientos(){
            $sql = "select * from QuimicoTratamiento, Quimico where QuimicoColor.id_Quimico = Quimico.id_Quimico";
            $query = $this->db->query($sql);
            return $query->result();
        }*/

        function getQuimicoTratamiento($id_Quimico){
            $this->db->where('id_Quimico', $id_Quimico);
            $query = $this->db->get('quimicotratamiento');
            return $query->result();
        }

        function insertPuesto(){
            $data = array(
                'nombre' => $this->input->post('nombre')
            );
            $this->db->insert('departamento', $data);
        }

        //borrar registro de Material
        function deleteQuimicoTratamiento($id_Quimico){
            $this->db->where('id_Quimico', $id_Quimico);
            $this->db->delete('quimicotratamiento');
            return TRUE;
        }
    }
    
?>