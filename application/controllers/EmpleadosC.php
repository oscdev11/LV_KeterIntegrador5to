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
    //funcion del boton de agregar
    public function insertEmpleado(){
        $this->load->model('EmpleadosM');
        $data['puestos'] = $this->EmpleadosM->getPuestos();
        //$data1['plantaId'] = $this->EmpleadosM->getPlantaId();
        
        $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nombre', 'id_Puesto', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('headers/head.php');
                $this->load->view('headers/menu.php');
                $this->load->view('headers/footer.php');
                $this->load->view('empleados/insertEmpleado',$data);
            } else{
                $this->EmpleadosM->insertEmpleado();
                redirect(base_url('index.php/EmpleadosC/show'), 'refresh');
            }
    }
}
?>