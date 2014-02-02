<?php

Class Libros extends MY_Controller{
    protected $models = array('libros'); // Cargo el modelo de los libros para su uso en la clase
    /* Funcion que carga la home de la aplicacion donde se ven todos los libros dados de alta en la BB.DD  */
    public function index(){
        try{
            $this->data['libros'] = $this->libros->getLibros();
            if($this->data['libros'] === NULL){
                throw new Exception('Se ha producido un error con la base de datos, disculpe las molestias');
            }
            $this->view = 'libros/listar';
        } catch (Exception $e){
            show_error($e->getMessage());
        }
    }
    
    /* Metodo que carga la ficha de un libro */
    public function ver(){
        try{
            if ($this->uri->segment(3) === FALSE){
                throw new Exception('No se ha especificado la id de ningun libro');
            }    
            $id = $this->uri->segment(3); //Recojo el id de la URL
            $this->data['libro'] = $this->libros->read($id);
        }  catch (Exception $e){
            show_error($e->getMessage());
        }
    }
    
    /* Metodo que muestra el resultado de la busqueda de libros */
    public function buscar(){
        try{
            if(!$this->input->post('titulo')){
                throw new Exception('No se ha especificado titulo para la busqueda');
            }
            $this->data['libros'] = $this->libros->buscarLibros($this->input->post('titulo'));
        }  catch (Exception $e){
            show_error($e->getMessage());
        }
    }
}
?>
