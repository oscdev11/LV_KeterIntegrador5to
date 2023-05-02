<?php

class UsuarioM extends CI_Model{

 public function validaUsuario($nombreUsuario, $contra){

    $this->db->where('nombreUsuario',$nombreUsuario);
    $this->db->where('contra',$contra);
    $q = $this->db->get('JefeDepartamento');
    if ($q->num_rows()>0) {
        return true;
    }else {
        return false;
    }

    }

    public function validaUsuarioE($nombreUsuario, $contra){

        $this->db->where('nombreUsuario',$nombreUsuario);
        $this->db->where('contra',md5($contra));
        $q = $this->db->get('UserAdmin');
        if ($q->num_rows()>0) {
            return true;
        }else {
            return false;
        }
    
        }

}
?>