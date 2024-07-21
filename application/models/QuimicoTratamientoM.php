<?php

    class QuimicoTratamientoM extends CI_Model
    {
        function getQuimicoTratamientos($id_Tratamiento){
            $sql = "select c.nombre as Nombre_Quimico, a.cantidadUsar from QuimicoTratamiento a
            inner join Tratamiento b using(id_Tratamiento)
            inner join Quimico c using(id_Quimico) 
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
            $query = $this->db->get('QuimicoTratamiento');
            return $query->result();
        }

        function getTratamientos(){
            $query = $this->db->get('Tratamiento');
            return $query->result();
        }

        function getQuimicos(){
            $query = $this->db->get('Quimico');
            return $query->result();
        }

        function insertQuimicoTratamiento(){
            $data = array(
                'id_Quimico' => $this->input->post('id_Quimico'),
                'id_Tratamiento' => $this->input->post('id_Tratamiento'),
                'cantidadUsar' => $this->input->post('cantidadUsar')
            );
            $this->db->insert('QuimicoTratamiento', $data);
        }

        //borrar registro de Material
        function deleteQuimicoTratamiento($id_Quimico){
            $this->db->where('id_Quimico', $id_Quimico);
            $this->db->delete('QuimicoTratamiento');
            return TRUE;
        }
    }
    
?>