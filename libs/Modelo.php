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
        $stm = $this->db->prepare("SELECT * from {$this->table}");
        $stm->execute();
        return $stm->fetchAll();
    }

    public function getById($id){
        $stm = $this->db->prepare("SELECT * from {$this->table} where id = :id");
        $stm->bindValue(":id", $id);
        $stm->execute();
        return $stm->fetch();
    }
    // public function setValues($nombre, $apellido, $edad, $genero, $carrera, $cuenta, $promedio){
    //     $stm = $this->db->prepare("insert into {$this->table} (nombre, apellido, edad, genero, carrera, cuenta, promedio) values (:nombre, :apellido, :edad, :genero, :carrera, :cuenta, :promedio)");
    //     $stm->bindValue(":nombre", $nombre);
    //     $stm->bindValue(":apellido", $apellido);
    //     $stm->bindValue(":edad", $edad);
    //     $stm->bindValue(":genero", $genero);
    //     $stm->bindValue(":carrera", $carrera);
    //     $stm->bindValue(":cuenta", $cuenta);
    //     $stm->bindValue(":promedio", $promedio);
    //     $stm->execute();
    //     return $stm->fetch();
    // }

    public function store($data){
        $sql = "INSERT INTO {$this->table} (";

        foreach ($data as $key => $value) {
            $sql .= "{$key},";
        };
        // Eliminados el ultimo caracter de la cedena

        $sql = trim($sql, ',');
        $sql .= ") values (";

        foreach ($data as $key => $value) {
            $sql .= ":{$key},";
        };
        // Eliminados el ultimo caracter de la cedena
        $sql = trim($sql, ',');
        $sql .= ")";

        $stm = $this->db->prepare($sql);
        foreach ($data as $key => $value) {
            $stm->bindValue(":{$key}", $value);
        };
        $stm->execute();
        return $stm->fetch();

        // echo $sql;
    }

    public function delete($id){
        $sql = "DELETE from {$this->table} where id = :id";
        $stm = $this->db->prepare($sql);
        $stm->bindValue(":id", $id);
        $stm->execute();
        return $stm->fetch();
    }

    public function update($id, $data){
        $sql = "UPDATE {$this->table} set ";
        
        foreach ($data as $key => $value) {
            $sql .= "{$key} = :{$key}, ";
        }

        $sql = trim($sql, ', ');
        $sql .= " where id = :id";

        $stm = $this->db->prepare($sql);

        foreach ($data as $key => $value) {
            $stm->bindValue(":{$key}", $value);
        };

        $stm->bindValue(":id", $id);
        $stm->execute();

    }

}