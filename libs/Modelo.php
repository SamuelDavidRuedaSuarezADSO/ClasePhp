<?php

class Modelo
{
    protected $id;
    protected $table;
    protected $db;

    public function __construct($id, $table, PDO $connection){
        $this->id = $id;
        $this->table = $table;
        $this->db = $connection;
    }

    public function getAll()
    {
        $stm = $this->db->prepare("select * from {$this->table}");
        $stm->execute();
        return $stm->fetchAll();
    }

    public function getById($id){
        $stm = $this->db->prepare("select * from {$this->table} where id = :id");
        $stm->bindValue(":id", $id);
        $stm->execute();
        return $stm->fetch();
    }
    public function setValues($nombre, $apellido, $edad, $genero, $carrera, $cuenta, $promedio){
        $stm = $this->db->prepare("insert into {$this->table} (nombre, apellido, edad, genero, carrera, cuenta, promedio) values (:nombre, :apellido, :edad, :genero, :carrera, :cuenta, :promedio)");
        $stm->bindValue(":nombre", $nombre);
        $stm->bindValue(":apellido", $apellido);
        $stm->bindValue(":edad", $edad);
        $stm->bindValue(":genero", $genero);
        $stm->bindValue(":carrera", $carrera);
        $stm->bindValue(":cuenta", $cuenta);
        $stm->bindValue(":promedio", $promedio);
        $stm->execute();
        return $stm->fetch();
    }
}