<?php
    Class Cesta_model extends CI_Model{
        /* Metodo que añade un libro a la sesion de la cesta */
        function add($id){
            $carro = array();
            if(!$this->session->userdata('cesta')){
                $this->session->set_userdata('items', 0);
                $this->session->set_userdata('total_precio', '0.00');
            }else{
                $carro = $this->session->userdata('cesta');
            }
            if(isset($carro[$id])){
                $carro['id']++;
            }else{
                $carro['id'] = 1;
            }
            $this->session->set_userdata('cesta',$carro);
        }
        
        /* Metodo que actualiza la cesta */
        public function update(){
            if($this->session->userdata('cesta')){
                $carro = $this->session->userdata('cesta');
                $this->load->library('form_validation');
                foreach ($carro as $id => $cantidad){
                    if($this->input->post($id) == 0){
                        unset($carro['id']);
                    }else{
                        if(intval($this->input->post('$id')) > 0){
                            $carro[$id] = $this->input->post('$id');
                        }
                    }
                }
                $this->session->set_userdata('cesta', $carro);
            }
        }
        
        /* Metodo que devuelve un array con todos los datos de la cesta */
        public function getLibrosCesta(){
            $libros = array();
            if(!$this->session->userdata('cesta')){
                throw new InvalidArgumentException('El carro de la compra esta vacio');
            }
            $carro = $this->session->userdata('cesta');
            $this->load->model('Libros_model');
            $items = 0;
            $total_precio = 0;
            foreach ($carro as $id => $cantidad){
                $items = $items + $cantidad;
                $libro = $this->Libros_model->read($id);
                if(!is_null($libro)){
                    $libros[$id] = $libro;
                    $total_precio += ($cantidad * (float)$libro['precio']);
                }
            }
            $this->session->set_userdata('total_precio', $total_precio);
            $this->session->set_userdata('items', $items);
            return $libros;
        }
    }
?>