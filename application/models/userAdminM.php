<?php

    class userAdminM extends CI_Model
    {
        //show listado de UserAdmin
        function getUserAdmins(){
            $query = $this->db->get('UserAdmin');
            return $query->result();
        }

        //obtener detalles del usuario administrador
        function getUserAdmin($id_UserAdmin){
            $this->db->where('id_UserAdmin', $id_UserAdmin);
            $query = $this->db->get('UserAdmin');
            return $query->result();
        }

        //editar información de Color
        function updateUserAdmin($id_UserAdmin){
            $data = array(
                'nombreUsuario' => $this->input->post('nombreUsuario'),
                'contra' => $this->input->post('contra'),
            );

            $this->db->where('id_UserAdmin', $id_UserAdmin);
            $this->db->update('UserAdmin', $data);
        }
    }
    

?>