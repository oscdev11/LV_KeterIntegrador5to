<?php 
class EmpleadosM extends CI_Model
{   
    //Prueva
    function Dependinamico(){
        $this->db->order_by('nombre', 'ASC');
        $query = $this->db->get('Departamento');
        return $query->result();
    }
    //Prueva
    //para mostar todos los registros en la pantalla general
    function getEmpleados(){
        $query = $this->db->get('Empleado');
        return $query->result();
    }
    //informacion de otra tabla 
    function getPuestos(){
        $query = $this->db->get('Puesto');
        return $query->result();
    }
     
    //para ventana de detalle
    function getEmpleado($id_Empleado){
        $this->db->where('id_Empleado', $id_Empleado);
        $query = $this->db->get('Empleado');
        return $query->result();
    }
    //para la ventana de agregar
    function insertEmpleado(){
        $data = array(
            'numTrabajador' => $this->input->post('numTrabajador'),
            'id_Puesto' => $this->input->post('id_Puesto'),
            'numTrabajador' => $this->input->post('numTrabajador'),
            'nombre' => $this->input->post('nombre'),
            'apellidoPaterno' => $this->input->post('apellidoPaterno'),
            'apellidoMaterno' => $this->input->post('apellidoMaterno'),
            'domicilio' => $this->input->post('domicilio'),
            'RFC' => $this->input->post('RFC'),
            'CURP' => $this->input->post('CURP'),
            'NSS' => $this->input->post('NSS'),
            'fechaIngreso' => $this->input->post('fechaIngreso'),
            'sexo' => $this->input->post('sexo'),
            'fechaNacimiento' => $this->input->post('fechaNacimiento'),
            'estadoSalud' => $this->input->post('estadoSalud'),
            'observaciones' => $this->input->post('observaciones'),
            'estadoCivil' => $this->input->post('estadoCivil'),
            'telefonoContacto' => $this->input->post('telefonoContacto'),
            'correoElectronico' => $this->input->post('correoElectronico'),
            'estatus' => $this->input->post('estatus'),

        );

        $this->db->insert('Empleado', $data);
    }
    //para Actualizar
    function updateEmpleado($id_Empleado){
        $data = array(
            'numTrabajador' => $this->input->post('numTrabajador'),
            'id_Puesto' => $this->input->post('id_Puesto'),
            'numTrabajador' => $this->input->post('numTrabajador'),
            'nombre' => $this->input->post('nombre'),
            'apellidoPaterno' => $this->input->post('apellidoPaterno'),
            'apellidoMaterno' => $this->input->post('apellidoMaterno'),
            'domicilio' => $this->input->post('domicilio'),
            'RFC' => $this->input->post('RFC'),
            'CURP' => $this->input->post('CURP'),
            'NSS' => $this->input->post('NSS'),
            'fechaIngreso' => $this->input->post('fechaIngreso'),
            'sexo' => $this->input->post('sexo'),
            'fechaNacimiento' => $this->input->post('fechaNacimiento'),
            'estadoSalud' => $this->input->post('estadoSalud'),
            'observaciones' => $this->input->post('observaciones'),
            'estadoCivil' => $this->input->post('estadoCivil'),
            'telefonoContacto' => $this->input->post('telefonoContacto'),
            'correoElectronico' => $this->input->post('correoElectronico'),
            'estatus' => $this->input->post('estatus'),
        );

        $this->db->where('id_Empleado', $id_Empleado);
        $this->db->update('Empleado', $data);
    }
    function deleteEmpleado($id_Empleado){
        $this->db->where('id_Empleado', $id_Empleado);
        $this->db->delete('Empleado');
        return TRUE;
    }
}?>