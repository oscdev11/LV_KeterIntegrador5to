<?php
class JefeDepartamentosM extends CI_Model
{
    function getJefes(){
        $sql = "select b.nombre as NombreEmpleado,c.nombre as NombrePuesto, a.nombreUsuario, a.contra from jefedepartamento a 
        inner join empleado b using(id_Empleado)
        inner join puesto c using(id_Puesto)";
        $query = $this->db->query($sql);
        return $query->result();
    }
    function inserJefeDepartamento(){
        $data = array(
            'id_Empleado' => $this->input->post('id_Empleado'),
            'nombreUsuario' => $this->input->post('nombreUsuario'),
            'contra' => $this->input->post('contra'),
            );
    
            $this->db->insert('jefedepartamento', $data);
    }
    function getEmpleado(){
        $sql = "select a.id_Empleado, a.nombre  from empleado a
        inner join puesto b using(id_Puesto) where b.nombre = 'Jefe De Departamento'";
        $query = $this->db->query($sql);
        return $query->result();
    }



/* 
   function getJefeDepartamento($id_JefeDepartamento){
        $this->db->where('id_JefeDepartamento', $id_JefeDepartamento);
        $query = $this->db->get('jefedepartamento');
        return $query->result();
    }
    

    function deleteCliente($id_Cliente){
        $this->db->where('id_Cliente', $id_Cliente);
        $this->db->delete('cliente');
        return TRUE;
    }*/

    
/* 
    function updateCliente($id_Cliente){
        $data = array(
            'razonSocial' => $this->input->post('razonSocial'),
            'alias' => $this->input->post('alias'),
            'rfc' => $this->input->post('rfc'),
            'calle' => $this->input->post('calle'),
            'colonia' => $this->input->post('colonia'),
            'numeroExterior' => $this->input->post('numeroExterior'),
            'numeroInterior' => $this->input->post('numeroInterior'),
            'codigoPostal' => $this->input->post('codigoPostal'),
            'ciudad' => $this->input->post('ciudad'),
            'estado' => $this->input->post('estado'),
            'telefono' => $this->input->post('telefono'),
            'correoElectronico' => $this->input->post('correoElectronico'),
            'direccionEnvioAlternativa' => $this->input->post('direccionEnvioAlternativa')
            );
    
            $this->db->where('id_Cliente', $id_Cliente);
            $this->db->update('cliente', $data);
    }*/
}
?>
