<?php

Class Cesta extends MY_Controller{
    protected $models = array('cesta');
    /* Metodo que añade un libro a la cesta */
    public function add($id){
        $id_libro = int($id);
        try{
            if($id_libro > 0){
                $this->cesta->add($id_libro);
            }else{
                throw new Exception('El identificador del libro no es correcto');
            }
            redirect('cesta/ver', 'refresh');
        }catch(Exception $e){
            show_error($e->getMessage());
        }
    }
    
    /* Metodo que actualiza el carro de la compra */
    public function update(){
        if($this->input->post('actualizar')){
            $this->cesta->update();
        }
        redirect('cesta/ver', 'refresh');
    }
    
    /* Metodo que obtiene los datos de la sesion para pasarselos a la vista */
    public function ver(){
        $carro = array();
        $items = 0;
        $total_precio = '0.00';
        if($this->session->userdata('cesta')){
            $carro = $this->session->userdata('cesta');
            if(count($carro) > 0){
                $this->data['librosCesta'] = $this->cesta->getLibrosCesta();
                $items = $this->session->userdata('items');
                $total_precio = $this->session->userdata('total_precio');
            }
            $this->data['items'] = $items;
            $this->data['total_precio'] = $total_precio;
        }
        $this->data['carro'] = $carro;
    }
}
?>
