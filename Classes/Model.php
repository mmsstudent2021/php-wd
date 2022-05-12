<?php

class Model extends Database {

    public $table, $sql;

    public function __construct($inputTable)
    {
        $this->table = $inputTable;
        $this->sql = "select * from $this->table";
    }

    //Read from database
    public function fetchAll($sql){
        $query = mysqli_query($this->connect(),$sql);
        $rows = [];
        while ($row = mysqli_fetch_object($query)){
            array_push($rows,$row);
        }
        return $rows;
    }

    public function fetch($sql){
        $query = mysqli_query($this->connect(),$sql);
        return mysqli_fetch_object($query);
    }

    public function all(){
        $sql = "select * from $this->table";
        return $this->fetchAll($sql);
    }

    public function get(){
        return $this->fetchAll($this->sql);
    }

    public function find($id){
        $sql = "select * from $this->table where id=$id";
        return $this->fetch($sql);
    }

    public function first(){
        return $this->fetch($this->sql);
    }

    public function where($column,$operator,$value){
        if(str_contains($this->sql,"where")){
            $this->sql .= " && ";
        }else{
            $this->sql .= " where ";
        }
        $this->sql .= "$column $operator '$value'";
        return $this;
    }

    public function orWhere($column,$operator,$value){
        if(str_contains($this->sql,"where")){
            $this->sql .= " || ";
        }else{
            $this->sql .= " where ";
        }
        $this->sql .= "$column $operator '$value'";
        return $this;
    }

    public function whereIn($column,$valueArray){
        $valueArrayToString = join(",",$valueArray);
        $this->sql .= " where ";
        $this->sql .= "$column in ($valueArrayToString)";
        return $this;
    }

    public function create($dataArray){

        //for columns
        $dataArrayKeys = array_keys($dataArray);
        $columns = join(",",$dataArrayKeys);

        //for values
        $dataArrayValues = array_values($dataArray);
        $dataArrayValuesWithString = array_map(function ($i){
            return "'$i'";
        },$dataArrayValues);
        $values = join(",",$dataArrayValuesWithString);

        $sql = "insert into $this->table ($columns) VALUES ($values)";

        $conn = $this->connect();

        mysqli_query($conn,$sql);

        return $this->find(mysqli_insert_id($conn));
    }

    function delete($id){
        $sql = "delete from $this->table where id=$id";
        return mysqli_query($this->connect(),$sql);
    }

}