<?php 
class EmpleadosM extends CI_Model
{   
    //
    function getEmpleados(){
        $query = $this->db->get('Empleado');
        return $query->result();
    } 
    //
    function getEmpleado($id_Empleado){
        $this->db->where('id_Empleado', $id_Empleado);
        $query = $this->db->get('Empleado');
        return $query->result();
    }
}?>