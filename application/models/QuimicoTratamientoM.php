<?php

    class QuimicoTratamientoM extends CI_Model
    {
        function getQuimicoTratamientos($id_Tratamiento){
            $sql = "select c.nombre as Nombre_Quimico, a.cantidadUsar from quimicotratamiento a
            inner join tratamiento b using(id_Tratamiento)
            inner join quimico c using(id_Quimico) 
            where b.id_Tratamiento = $id_Tratamiento";
            $query = $this->db->query($sql);
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