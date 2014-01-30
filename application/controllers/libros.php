<?php

Class Libros extends MY_Controller{
    protected $models = array('libros'); // Cargo el modelo de los libros para su uso en la clase
    /* Funcion que carga la home de la aplicacion donde se ven todos los libros dados de alta en la BB.DD  */
    public function index(){
        $this->data['libros'] = $this->libros->getLibros();
        $this->view = 'libros/listar.php';
    }
    
    /* Metodo que devuelve los datos de un libro junto con sus comentarios validados */
    public function ver(){
        if ($this->uri->segment(3) === FALSE){
            show_error ( 'No has especificado un identificador de libro.');
        }    
        $id = $this->uri->segment(3); //Recojo el id de la URL
        $this->data['libro'] = $this->libros->read($id);
    }
}
?>
