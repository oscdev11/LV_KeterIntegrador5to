<?php

    class MaterialesM extends CI_Model
    {
        //show listaMateriales
        function getMateriales(){
            $query = $this->db->get('Material');
            return $query->result();
        }

        // ver detalles del Material (getMaterial)
        function getMaterial($id_Material){
            $this->db->where('id_Material', $id_Material);
            $query = $this->db->get('Material');
            return $query->result();
        }

        // inesrción de Material
        function insertMaterial(){
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'fabricante' => $this->input->post('fabricante'),
                'tipo' => $this->input->post('tipo'),
                'descripcion' => $this->input->post('descripcion'),
                'cantidadDisponible' => $this->input->post('cantidadDisponible')
            );

            $this->db->insert('Material', $data);
        }

        //editar información de Material
        function updateMaterial($id_Material){
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'fabricante' => $this->input->post('fabricante'),
                'tipo' => $this->input->post('tipo'),
                'descripcion' => $this->input->post('descripcion'),
                'cantidadDisponible' => $this->input->post('cantidadDisponible')
            );

            $this->db->where('id_Material', $id_Material);
            $this->db->update('Material', $data);
        }

        //borrar registro de Material
        function deleteMaterial($id_Material){
            $this->db->where('id_Material', $id_Material);
            $this->db->delete('Material');
            return TRUE;
        }
    }
    

?>