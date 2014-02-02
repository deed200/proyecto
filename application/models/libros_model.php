<?php
    Class Libros_model extends CI_Model{
        /* Metodo que devuelve un array de los comentarios validos del libro pasado como parametro */
        function getComentarios($id){
            $query = $this->db->select('descripcion');
            $query = $this->db->get_where('comentarios', array('fk_libros'=>$id, 'validado'=>1));
            $comentarios = array();
            foreach($query->result_array() as $row){
                $comentarios[] = $row;
            }
            return $comentarios;
        }
        
        /* Metodo que devuelve un array con los autores del libro pasado como parametro */
        function getAutores($id){
            $query = $this->db->select('nombre');
            $query = $this->db->from('autores');
            $query = $this->db->join("libros_autores", "libros_autores.fk_autores = autores.id");
            $query = $this->db->where('libros_autores.fk_libros', $id);
            $query = $this->db->get();
            $autores = array();
            foreach ($query->result_array() as $row){
                $autores[] = $row;
            }
            return $autores;
        }
        
        /* Metodo que devuelve los datos de un libro junto con los autores y los comentarios del mismo */
        function read($id){
            $query = $this->db->get_where('libros', array('id'=>$id));
            $libros = array();
            foreach ($query->result_array() as $row){
                $row['comentarios'] = $this->getComentarios($id);
                $row['autores'] = $this->getAutores($id);
                $libros[] = $row;
            }
            return $libros;
        }
        
        /* Metodo que devuelve todos los libros de la base de datos junto con sus autores */
        function getLibros(){
            $query = $this->db->get('libros');
            $libros = array();
            foreach ($query->result_array() as $row){
                //$libros[] = $row;
                //$libros['autores'] = $this->getAutores($row['id']);
                $row['autores'] = $this->getAutores($row['id']);
                $libros[] = $row;
            }
            return $libros;
        }
    }
?>
