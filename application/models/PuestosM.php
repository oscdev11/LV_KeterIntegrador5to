<?php

    class PuestosM extends CI_Model
    {
        function getPuestos($id_Departamento){
            $sql = "select * from Departamento, Puesto where Departamento.id_Departamento = Puesto.id_Departamento AND Puesto.id_Departamento = $id_Departamento";
            $query = $this->db->query($sql);
            return $query->result();
        }

        //show lista Puestos
        function getPuestoss(){
            $query = $this->db->get('Puesto');
            return $query->result();
        }

        //get departamentosss
        function getDepartamentos(){
            $query = $this->db->get('Departamento');
            return $query->result();
        }

        function getPuesto($id_Puesto){
            $this->db->where('id_Puesto', $id_Puesto);
            $query = $this->db->get('Puesto');
            return $query->result();
        }

        function insertPuesto(){
            $data = array(
                'id_Departamento' => $this->input->post('id_Departamento'),
                'nombre' => $this->input->post('nombre')
            );
            $this->db->insert('Puesto', $data);
        }

        //borrar registro de Material
        function deletePuesto($id_Puesto){
            $this->db->where('id_Puesto', $id_Puesto);
            $this->db->delete('Puesto');
            return TRUE;
        }
    }
    
?>