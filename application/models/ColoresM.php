<?php

    class ColoresM extends CI_Model
    {
        //show listaColores
        function getColores(){
            $query = $this->db->get('Color');
            return $query->result();
        }

        // ver detalles del Colores (getColor)
        function getColor($id_Color){
            $this->db->where('id_Color', $id_Color);
            $query = $this->db->get('Color');
            return $query->result();
        }

        //inserciones de Color
        function insertColor(){
            $data = array(
                'nombreColor' => $this->input->post('nombreColor'),
                'abreviaturaColor' => $this->input->post('abreviaturaColor'),
            );

            $this->db->insert('Color', $data);
        }

        //editar información de Color
        function updateColor($id_Color){
            $data = array(
                'nombreColor' => $this->input->post('nombreColor'),
                'abreviaturaColor' => $this->input->post('abreviaturaColor'),
            );

            $this->db->where('id_Color', $id_Color);
            $this->db->update('Color', $data);
        }

        //borrar registro de Color
        function deleteColor($id_Color){
            $this->db->where('id_Color', $id_Color);
            $this->db->delete('Color');
            return TRUE;
        }
    }
    

?>