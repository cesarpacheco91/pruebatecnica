<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once("c:/xampp/htdocs/Cafeteria/Config/db.php");
            $con =new db();
            $this-> PDO = $con->conexion();
        } 
                public function insertar($nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha_creacion){
                    $statement = $this->PDO->prepare("INSERT INTO username1 (nombre, referencia, precio, peso, categoria, stock, fecha_creacion) VALUES (:nombre, :referencia, :precio, :peso, :categoria, :stock, :fecha_creacion)");
                    $statement->bindParam(":nombre", $nombre);
                    $statement->bindParam(":referencia", $referencia);
                    $statement->bindParam(":precio", $precio);
                    $statement->bindParam(":peso", $peso);
                    $statement->bindParam(":categoria", $categoria);
                    $statement->bindParam(":stock", $stock);
                    $statement->bindParam(":fecha_creacion", $fecha_creacion);
                        return ($statement->execute()) ? $this->PDO->lastInsertId() : false;

                }
                public function show($id){
                    $statement = $this ->PDO->prepare("SELECT * FROM username1 where id = :id limit 1");
                        $statement->bindParam(":id",$id);
                        return($statement->execute())? $statement->fetch() :false;
                }
                public function index(){
                        $stament =$this->PDO->prepare("SELECT * FROM username1");
                        return ($stament->execute()) ? $stament->fetchAll() : false ;
                }
                public function update($id,$nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha_creacion){
                        $sql = "UPDATE username1 SET nombre=:nombre, referencia=:referencia, precio=:precio, peso=:peso, categoria=:categoria, stock=:stock, fecha_creacion=:fecha_creacion WHERE id=:id";
                        $stament = $this->PDO->prepare($sql);
                        $stament->bindParam(":id",$id);
                        $stament->bindParam(":nombre",$nombre);
                        $stament->bindParam(":referencia",$referencia);
                        $stament->bindParam(":precio",$precio);
                        $stament->bindParam(":peso",$peso);
                        $stament->bindParam(":categoria",$categoria);
                        $stament->bindParam(":stock",$stock);
                        $stament->bindParam(":fecha_creacion",$fecha_creacion);
                                                
                        return($stament->execute())? $id: false ;
                }
                public function delete($id){
                        $stament =$this->PDO->prepare("DELETE FROM username1 WHERE id = :id");
                        $stament->bindparam(":id",$id);
                        return($stament->execute())? true : false ;

                }
                        

    }      