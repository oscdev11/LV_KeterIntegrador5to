<?php

class JefeDepartamentosC extends CI_Controller
{
    public function show(){
        $this->load->model('JefeDepartamentosM');
        $data['jefes'] = $this->JefeDepartamentosM->getJefes();
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('jefesDepartamento/listaJefesDepartamentos.php', $data);
        $this->load->view('headers/footer.php');   
    }


    

    public function inserJefeDepartamento(){
        $this->load->model('JefeDepartamentosM');
        $data['Empleado'] = $this->JefeDepartamentosM->getEmpleado();
        $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('id_Empleado', 'required');


                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('headers/head.php');
                        $this->load->view('headers/menu.php');
                        $this->load->view('jefesDepartamento/inserJefeDepartamento',$data);
                        $this->load->view('headers/footer.php');
                        
                }
                else
                {
                        $this->JefeDepartamentosM->inserJefeDepartamento();
                        redirect(base_url('index.php/JefeDepartamentosC/show'), 'refresh');
                }
    }
    /*
    public function borrarCliente($id_Cliente){
        $this->load->model('ClientesM');
        if($data['cliente'] = $this->ClientesM->deleteCliente($id_Cliente)){
            redirect(base_url('index.php/ClientesC/show'), 'refresh');
        }
    }

    public function updateCliente($id_Cliente){
        $this->load->model('ClientesM');

        $data['cliente'] = $this->ClientesM->getCliente($id_Cliente);

        $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('alias', 'alias', 'required');


                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('headers/head.php');
                        $this->load->view('headers/menu.php');
                        $this->load->view('headers/footer.php');
                        $this->load->view('clientes/updateCliente', $data);
                }
                else
                {
                        $this->ClientesM->updateCliente($id_Cliente);
                        redirect(base_url('index.php/ClientesC/show'), 'refresh');
                }
    }
    */
    
}
?>