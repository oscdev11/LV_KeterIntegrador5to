<?php

    class MaterialesM extends CI_Model
    {
        //show listaMateriales
        function getMateriales(){
            $query = $this->db->get('material');
            return $query->result();
        }
    }
    

?>