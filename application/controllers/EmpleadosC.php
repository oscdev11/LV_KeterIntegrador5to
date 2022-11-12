<?php

class EmpleadosC extends CI_Controller
{
    //vista general
    public function show(){
        $this->load->model('EmpleadosM');
        $data['empleados'] = $this->EmpleadosM->getEmpleados();

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('empleados/listaEmpleados.php', $data);
        $this->load->view('headers/footer.php');
    }
    //funcion del boton ver
    public function detalleEmpleado($id_Empleado ){
        $this->load->model('EmpleadosM');
        $data['empleado'] = $this->EmpleadosM->getEmpleado($id_Empleado);

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('empleados/detalleEmpleado.php', $data);
        $this->load->view('headers/footer.php');
    }
}
?>