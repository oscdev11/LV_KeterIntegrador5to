<?php

    class TratamientosM extends CI_Model
    {
        //show listaTratamientos
        function getTratamientos(){
            $query = $this->db->get('tratamiento');
            return $query->result();
        }

        // ver detalles del Tratamiento (getTratamiento)
        function getTratamiento($id_Tratamiento){
            $this->db->where('id_Tratamiento', $id_Tratamiento);
            $query = $this->db->get('tratamiento');
            return $query->result();
        }

        //inserciones de Tratamiento
        function insertTratamiento(){
            $data = array(
                'nombreTratamiento' => $this->input->post('nombreTratamiento'),
            );

            $this->db->insert('tratamiento', $data);
        }

        //editar información de Tratamiento
        function updateTratamiento($id_Tratamiento){
            $data = array(
                'nombreTratamiento' => $this->input->post('nombreTratamiento'),
            );

            $this->db->where('id_Tratamiento', $id_Tratamiento);
            $this->db->update('tratamiento', $data);
        }

        //borrar registro de Tratmiento
        function deleteTratamiento($id_Tratamiento){
            $this->db->where('id_Tratamiento', $id_Tratamiento);
            $this->db->delete('tratamiento');
            return TRUE;
        }
    }
    
?>