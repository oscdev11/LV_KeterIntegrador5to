<?php

class EmpleadosC extends CI_Controller
{
    //vista general de Empleados
    public function show(){
        $this->load->model('EmpleadosM');
        $data['empleados'] = $this->EmpleadosM->getEmpleados();

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('empleados/listaEmpleados.php', $data);
        $this->load->view('headers/footer.php');
    }
}
?>