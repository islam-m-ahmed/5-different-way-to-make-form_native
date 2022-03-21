<?php
class db {
    private $username="root";
    private $password="";
    private $dbname="form_iti";
    private $host="localhost";
    private $dbtype="mysql";
    private $connection=null;

    function __construct(){
        
        $this->connection= new pdo(
            "$this->dbtype:host=$this->host;dbname=$this->dbname",
            $this->username,
            $this->password);
    }

    function getconnection(){
        return $this->connection;
    }

    function getData($col,$table,$condition){
       $data= $this->connection->query
       ("select $col from $table where $condition");
        return $data;
    }
    function deleteData($table, $condtion){
        $this->connection->query("delete from $table where $condtion");
    }
    function insertRow($tablename ,$data){
        $this->connection->query
        ("insert into $tablename set $data");
        return $this->connection->lastInsertId();
    }

    function update($tableName,$col,$condition){
        $this->connection->query("update $tableName set $col where $condition");
    }

}






?>