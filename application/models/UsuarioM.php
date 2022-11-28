<?php

class UsuarioM extends CI_Model{

    function validaUsuario($nombreUsuario, $contra){
        $sql="Select id_UserAdmin, nombreUsuario from useradmin where nombreUsuario = $nombreUsuario and contra = $contra";
        $query = $this->db->query($sql);
        echo $this->db->last_query();
        return $query->result();


    }

    function validaUsuarioDepartamento($nombreUsuario, $contra){
        $sql="Select id_JefeDepartamento, nombreUsuario from jefedepartamento where nombreUsuario = $nombreUsuario and contra = $contra";
        $query = $this->db->query($sql);
        echo $this->db->last_query();
        return $query->result();


    }

}
?>