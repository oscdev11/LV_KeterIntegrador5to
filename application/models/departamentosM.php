<?php

    class departamentosM extends CI_Model
    {
        //show listaDepartamentos
        function getDepartamentos(){
            $query = $this->db->get('departamento');
            return $query->result();
        }

        //get unicamente un departamento a través de su ID
        function getDepartamento($id_Departamento){
            $this->db->where('id_Departamento', $id_Departamento);
            $query = $this->db->get('departamento');
            return $query->result();
        }

        //get información del la tabla Plantas
        function getPlantas(){
            $query = $this->db->get('planta');
            return $query->result();
        }

        //iserción de Departamento
        function insertDepartamento(){
            $data = array(
                'id_Planta' => $this->input->post('id_Planta'),
                'nombre' => $this->input->post('nombre')
            );
            $this->db->insert('departamento', $data);
        }

        //editar información de departamento
        function updateDepartamento($id_Departamento){
            $data = array(
                'nombre' => $this->input->post('nombre'),
            );
            $this->db->where('id_Departamento', $id_Departamento);
            $this->db->update('departamento', $data);
        }

        //borrar registro de Material
        function deleteDepartamento($id_Departamento){
            $this->db->where('id_Departamento', $id_Departamento);
            $this->db->delete('departamento');
            return TRUE;
        }
    }
?>