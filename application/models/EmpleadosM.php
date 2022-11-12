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
}?>