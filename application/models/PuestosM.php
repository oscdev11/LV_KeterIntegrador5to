<?php

    class PuestosM extends CI_Model
    {
        function getPuestos($id_Departamento){
            $sql = "select * from Departamento, Puesto where Departamento.id_Departamento = Puesto.id_Departamento AND Puesto.id_Departamento = $id_Departamento";
            $query = $this->db->query($sql);
            return $query->result();
        }

        function getPuesto($id_Puesto){
            $this->db->where('id_Puesto', $id_Puesto);
            $query = $this->db->get('puesto');
            return $query->result();
        }

        function insertPuesto(){
            $data = array(
                'nombre' => $this->input->post('nombre')
            );
            $this->db->insert('departamento', $data);
        }

        //borrar registro de Material
        function deletePuesto($id_Puesto){
            $this->db->where('id_Puesto', $id_Puesto);
            $this->db->delete('puesto');
            return TRUE;
        }
    }
    
?>