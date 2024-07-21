<?php

class UsuarioM extends CI_Model
{

    public function validaUsuario($nombreUsuario, $contra)
    {

        $this->db->where('nombreUsuario', $nombreUsuario);
        $this->db->where('contra', $contra);
        $q = $this->db->get('jefedepartamento');
        if ($q->num_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }
    /*

    public function validaUsuarioE($nombreUsuario, $contra)
    {

        $this->db->where('nombreUsuario', $nombreUsuario);
        $this->db->where('contra', $contra);
        $q = $this->db->get('useradmin');
        if ($q->num_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }*/

}
?>