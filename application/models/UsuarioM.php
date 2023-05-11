<?php

class UsuarioM extends CI_Model{

    public function validarUsuario($nombreUsuario, $contra){
        $sql = "SELECT nombreUsuario, contra, perfil FROM UserAdmin WHERE nombreUsuario = '$nombreUsuario' AND contra = '$contra' UNION SELECT nombreUsuario, contra, perfil FROM JefeDepartamento WHERE nombreUsuario = '$nombreUsuario' AND contra = '$contra'";
        //$sql = "select id_UserAdmin, nombreUsuario, contra, perfil FROM UserAdmin where nombreUsuario = '$nombreUsuario' AND contra = '$contra'";
        $query = $this->db->query($sql);
        echo $this->db->last_query();
        return $query->result();
    }	


    
    /*public function validarUsuario($nombreUsuario, $contra){
        $this->db->where('nombreUsuario', 'nombreUsuario');
        $this->db->where('contra', md5('contra'));
        $query = db->get('UserAdmin');
        
    }*/

 /*public function validaUsuario($nombreUsuario, $contra){

    $this->db->where('nombreUsuario',$nombreUsuario);
    $this->db->where('contra',md5($contra));
    $q = $this->db->get('JefeDepartamento');
    if ($q->num_rows()>0) {
        return true;
    }else {
        return false;
    }

    }*/
    /*

    public function validaUsuarioE($nombreUsuario, $contra){

        $this->db->where('nombreUsuario',$nombreUsuario);
        $this->db->where('contra',md5($contra));
        $q = $this->db->get('UserAdmin');
        if ($q->num_rows()>0) {
            return true;
        }else {
            return false;
        }
    
        }*/

}
?>