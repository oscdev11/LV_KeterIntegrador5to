<?php
    class QuimicosM extends CI_Model
    {
        //show listaQuimicos
        function getQuimicos(){
            $query = $this->db->get('Quimico');
            return $query->result();
        }

        // obtener detalles del Quimico (getQuimico)
        function getQuimico($id_Quimico){
            $this->db->where('id_Quimico', $id_Quimico);
            $query = $this->db->get('Quimico');
            return $query->result();
        }

        //inserciones de Quimicos
        function insertQuimico(){
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'fabricante' => $this->input->post('fabricante'),
                'descripcion' => $this->input->post('descripcion'),
                'cantidadDisponible' => $this->input->post('cantidadDisponible')
            );

            $this->db->insert('Quimico', $data);
        }

        //editar información de Químico
        function updateQuimico($id_Quimico){
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'fabricante' => $this->input->post('fabricante'),
                'descripcion' => $this->input->post('descripcion'),
                'cantidadDisponible' => $this->input->post('cantidadDisponible')
            );

            $this->db->where('id_Quimico', $id_Quimico);
            $this->db->update('Quimico', $data);
        }

        //borrar registro de Material
        function deleteQuimico($id_Quimico){
            $this->db->where('id_Quimico', $id_Quimico);
            $this->db->delete('Quimico');
            return TRUE;
        }
    }
?>