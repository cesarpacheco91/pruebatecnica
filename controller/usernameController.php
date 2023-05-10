<?php
    class usernameController{
        private $model;
        public function __construct() 
        {
            require_once("c://xampp/htdocs/Cafeteria/model/usernameModel.php");
            $this->model = new usernameModel();

        }
        public function guardar ($nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha_creacion){
            $id= $this->model->INSERTAR($nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha_creacion);
            return($id!=false) ? header("location:show.php?id=".$id) : header("location:create.php");
        } 
        public function show($id) {
            return($this->model->show($id)!= false) ? $this->model->show($id): header("location:index.php");
        }
        public function index(){
            return $this->model->index() ? $this->model->index() : false;
        }
        public function update($id,$nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha_creacion){
            return ($this->model->update($id,$nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha_creacion) != false) ? header("location:show.php?id=".$id):header("location:index.php");
        }
        public function delete($id,){
            return ($this->model->delete($id,))? header("location:index.php"):header("location:show.php?id=".$id);
        }
}    




?>