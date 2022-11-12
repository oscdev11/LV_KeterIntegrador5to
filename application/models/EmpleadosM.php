<?php 
class EmpleadosM extends CI_Model
{   
    //para mostar todos los registros en la pantalla general
    function getEmpleados(){
        $query = $this->db->get('Empleado');
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
            'nombreTratamiento' => $this->input->post('nombreTratamiento'),
            'id_Puesto' => $this->input->post('id_Puesto'),
            'numTrabajador' => $this->input->post('numTrabajador'),
            'nombre' => $this->input->post('nombre'),
            'apellidoPaterno' => $this->input->post('apellidoPaterno'),
            'apellidoMaterno' => $this->input->post('apellidoMaterno'),
            'domicilio' => $this->input->post('domicilio'),
            'RFC' => $this->input->post('RFC'),
            'CURP' => $this->input->post('CURP'),
            'fechaIngreso' => $this->input->post('fechaIngreso'),
            'fechaNacimiento' => $this->input->post('fechaNacimiento'),
            'estadoSalud' => $this->input->post('estadoSalud'),
            'observaciones' => $this->input->post('observaciones'),
            'estadoCivil' => $this->input->post('estadoCivil'),
            'telefonoContacto' => $this->input->post('telefonoContacto'),
            'correoElectronico' => $this->input->post('correoElectronico'),
            'estatus' => $this->input->post('estatus'),

        );

        $this->db->insert('empleado', $data);
    }
}?>