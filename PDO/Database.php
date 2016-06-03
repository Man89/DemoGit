<?php


class Database extends PDO{
    private $host = DB_HOST;
    private $port = DB_PORT;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $_db;
    private $stmt;
    private $error;

    public function __construct(){
        $dsn = 'pgsql:host=' .$this->host.';port='.$this->port. ';dbname='.$this->dbname;

        $option = array(PDO::ATTR_PERSISTENT=>true,PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);

        try{
            $this->_db= new PDO($dsn,$this->user,$this->pass,$option);
        }catch(PDOException $e){
            echo $e->getMessage();
            $this->error= $e->getMessage();
        }
    }

    public function query($sql){
        $this->stmt= $this->_db->prepare($sql);
    }


    public function execute(){
        return $this->stmt->execute();
    }


    public function insert($title,$status){

        $sql = "INSERT INTO todo(title,status) VALUES (?,?)";
        $this->query($sql);
        $param_array=array($title,$status);
        $this->bind($param_array);
        try{
            $this->execute();

        }catch(PDOException $e){
            return $e->getMessage();
        }
        return true;
    }

    public function update($id, $title, $status, $created_at){

        $sql = "UPDATE todo SET title = ?, status= ?, created_at=? WHERE id= ? ";
        $this->query($sql);
        $param_array=array($title, $status, $created_at, $id);
        $this->bind($param_array);

        try{
            $this->execute();
        }catch(PDOException $e){
            return $e->getMessage();
        }
        return true;
    }

    public function delete($id){

        $sql = "DELETE FROM todo WHERE id=?";
        $this->query($sql);
        $param_array= array($id);
        $this->bind($param_array);

        try{
            $this->execute();
        }catch (PDOException $e)
        {
            return $e->getMessage();
        }
        return true;
    }

    public function bind($param_array){
        for($i=0; $i < count($param_array) ; $i++){
            $type = PDO::PARAM_STR; // Default
            if(is_int($param_array[$i])){
                $type = PDO::PARAM_INT;
            }
            if(is_bool($param_array[$i])){
                $type = PDO::PARAM_BOOL;
            }
            if(is_null($param_array[$i])){
                $type = PDO::PARAM_NULL;
            }

            $this->stmt->bindValue($i+1 ,$param_array[$i] ,$type);

        }
    }

    public function findAll(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findOne(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount(){
        $this->execute();
        return $this->stmt->rowCount();
    }

    public function lastInsertId($seq_name = NULL){
        return $this->_db->lastInsertId($seq_name);
    }









}