<?php
class OrdenesM extends CI_Model
{
    function getOrdenes(){
        $query = $this->db->get('ordenproduccion');
        return $query->result();
    }

//FUNCION BOTON ELIMINAR 
function deleteOrden($id_OrdenProduccion){
    $this->db->where('id_OrdenProduccion', $id_OrdenProduccion);
    $this->db->delete('ordenproduccion');
    return TRUE;
}

/*
//FUNCION BOTON VER 
    function getCliente($id_Cliente){
        $this->db->where('id_Cliente', $id_Cliente);
        $query = $this->db->get('cliente');
        return $query->result();
    }

//FUNCION BOTON INSERTAR
    function insertCliente(){
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
    
            $this->db->insert('cliente', $data);
    }
//FUNCION BOTON EDITAR
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
    }
    */
}
?>
