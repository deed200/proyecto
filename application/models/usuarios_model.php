<?php
    Class Usuarios_model extends CI_Model{
        /* Metodo que comprueba si usuario existe en la base de datos. */
        function getUsuarioLogin($email, $contrasenya){
            $query = $this->db->select('id','nombre','rol');
            $query = $this->db->from('usuarios');
            $query = $this->db->where('email',$email);
            $query = $this->db->where('contrasenya', sha1($contrasenya));
            $query = $this->db->get();
            $usuario = array();
            foreach ($query->result_array() as $row){
                $usuario[] = $row;
            }
            return $usuario;
        }
        
        /* Metodo que devuelve los datos de un usuario para ser cargados */
        function read($id){
            /* SELECT u.id, u.nombre, direccion, cp, email, rol, contrasenya, c.id, c.nombre, p.id, p.nombre
            FROM usuarios u, ciudades c, paises p
            WHERE u.fk_ciudades = c.id AND c.fk_paises = p.id AND u.id = 1 */
            $query = $this->db->select('u.id', 'u.nombre', 'direccion', 'cp', 'email', 'rol', 'contrasenya', 'c.id', 'c.nombre', 'p.id', 'p.nombre');
            $query = $this->db->from('usuarios u');
            $query = $this->db->join('ciudades c', 'u.fk_ciudades = c.id');
            $query = $this->db->join('paises p', 'c.fk_paises = p.id');
            $query = $this->db->where('u.id', $id);
            $query = $this->db->get();
            $usuario = array();
            foreach ($query->result_array() as $row){
                $usuario[] = $row;
            }
            return $usuario;
        }
        
        /* Metodo que inserta un usuario */
        function create($usuario){
            /* Usuario es un array con los siguientes datos:
             * $usuario['nombre']
             * $usuario['direccion']
             * $usuario['cp']
             * $usuario['email']
             * $usuario['rol']
             * $usuario['contrasenya']
             * $usuario['fk_ciudades'] */
            $this->db->insert('usuarios', $usuario);
        }
        
        /* Metodo que actualiza los datos de un usuario */
        function update($usuario){
            /* Usuario es un array con los siguientes datos:
             * $usuario['id']
             * $usuario['nombre']
             * $usuario['direccion']
             * $usuario['cp']
             * $usuario['email']
             * $usuario['rol']
             * $usuario['contrasenya']
             * $usuario['fk_ciudades'] */
            $this->db->where('id', $usuario['id']);
            $this->db->update('usuarios', $usuario);
        }
        
        /* Metodo que comprueba si el email existe en la base de datos */
        function existeEmail($email){
            $this->db->select('*');
            $this->db->from('usuarios');
            $this->db->where('email', $email);
            $query = $this->db->get();
            $existe = false;
            if($query->num_rows() > 0){
                $existe = true;
            }else{
                $existe = false;
            }
            
            return $existe;
        }
    }
?>
