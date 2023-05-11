<?php
class JefeDepartamentosM extends CI_Model
{
    function getJefes(){
        $sql = "select b.nombre as NombreEmpleado,c.nombre as NombrePuesto, a.id_JefeDepartamento, a.nombreUsuario, a.contra, a.perfil from JefeDepartamento a 
        inner join Empleado b using(id_Empleado)
        inner join Puesto c using(id_Puesto)";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getEmpleado(){
        $sql = "select a.id_Empleado, a.nombre  from Empleado a
        inner join Puesto b using(id_Puesto) where b.nombre = 'Jefe De Departamento'";
        $query = $this->db->query($sql);
        return $query->result();
    }


    function inserJefeDepartamento(){
        $data = array(
            'id_Empleado' => $this->input->post('idempleado'),
            'nombreUsuario' => $this->input->post('nombreUsuario'),
            'contra' => md5($this->input->post('contra')),
            'perfil' => $this->input->post('perfil')
            );
            
            $this->db->insert('JefeDepartamento', $data);
    }

    function deleteJefeDepartamento($id_JefeDepartamento){
        $this->db->where('id_JefeDepartamento', $id_JefeDepartamento);
        $this->db->delete('JefeDepartamento');
        return TRUE;
    }
    
    //editar información de Color
    function updateJefeDepartamento($id_JefeDepartamento){
        $data = array(
            'nombreUsuario' => $this->input->post('nombreUsuario'),
            'contra' => $this->input->post('contra'),
        );

        $this->db->where('id_JefeDepartamento', $id_JefeDepartamento);
        $this->db->update('JefeDepartamento', $data);
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
