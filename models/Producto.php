<?php
    class Producto extends Conectar{
        public function get_producto(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM admcontactos WHERE contact_estado=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function get_producto_x_id($contac_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM admcontactos WHERE contac_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$contac_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_producto($id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE admcontactos
                SET
                    contact_estado=0,
                WHERE
                    contac_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function insert_producto($contac_nombre,$contac_apellido,$contac_puesto_trabajo,$contact_pais_procedencia){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO admcontactos (contac_id, contac_nombre, contac_apellido, contac_puesto_trabajo, contact_pais_procedencia, contact_estado) VALUES (NULL, ?,?,?,?,1);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$contac_nombre);
            $sql->bindValue(2,$contac_apellido);
            $sql->bindValue(3,$contac_puesto_trabajo);
            $sql->bindValue(4,$contact_pais_procedencia);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_producto($contac_id,$contac_puesto_trabajo,$contact_pais_procedencia){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE admcontactos
                SET
                    contac_puesto_trabajo=?,
                    contact_pais_procedencia=?,
                WHERE
                    contac_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$contac_id);
            $sql->bindValue(2,$contac_puesto_trabajo);
            $sql->bindValue(3,$contact_pais_procedencia);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }



    }
?>