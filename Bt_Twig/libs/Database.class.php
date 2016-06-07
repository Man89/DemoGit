<?php

class Database extends PDO{
    private $host = DS_HOST;
    private $port = DS_PORT;
    private $user = DS_USER;
    private $pass = DS_PASS;
    private $dbname = DS_NAME;

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
        $this->stmt = $this->_db->prepare($sql);
    }

    public function bind($params_array){
        foreach($params_array as $param => $value){

            $type = PDO::PARAM_STR; // Default

            if(is_int($value)) {
                $type = PDO::PARAM_INT;
            }
            if(is_bool($value)){
                $type= PDO::PARAM_BOOL;
            }
            if(is_null($value)){
                $type = PDO::PARAM_NULL;
            }


            $this->stmt->bindValue($param,$value,$type);

        }
    }

    public function execute(){
        return $this->stmt->execute();
    }




    public function insert($tableName, $data){
        $fields = array_keys($data);
        $params = ':' . implode(',:', $fields);
        $fields = implode(',' , $fields);
        $sql = "INSERT INTO $tableName ($fields) VALUES ($params) ";
        var_dump($sql);
        $this->query($sql);
        $data = $this->renameKey($data, ':');
        var_dump($data);
        $this->bind($data);
        try{
            $this->execute();
        } catch(PDOException $e){
            return $e->getMessage();
        }
        return true;
    }

    private function renameKey($arr, $prefix){
        foreach($arr as $key => $value){
            $arr[$prefix . $key] = $value;
            // var_dump($value). "</br>";
            unset($arr[$key]);
        }
        return $arr;
    }

    public function update($tableName, $data, $where){
        $fields = array_keys($data);
        $query = $this->createQuery($fields);
        $fields2 = array_keys($where);
        $condition = $this->createCondition($fields2);
        $sql="UPDATE $tableName SET $query WHERE $condition";
        $this->query($sql);
        $data = $this->renameKey($data , ':');
        $where = $this->renameKey($where, ':_');
        $this->bind($data);
        $this->bind($where);
        try{
            $this->execute();
        } catch (PDOException $e){
            return $e->getMessage();
        }
        return true;
    }

    public function delete($tableName, $where){
        $fields = array_keys($where);
        $condition= $this->createCondition($fields);
        $sql= "DELETE FROM $tableName WHERE $condition";

        $this->query($sql);
        $where = $this->renameKey($where, ':_');

        $this->bind($where);
        try{
            $this->execute();
        } catch (PDOException $e){
            return $e->getMessage();
        }
        return true;
    }

    private function createQuery($fields){
        $query= [];
        for($i = 0; $i < count($fields) ; $i ++){
            $query[] = $fields[$i] . '=:' . $fields[$i];
        }
        return implode(',', $query);
    }

    private function createCondition($where){
        $query=[];
        for ($i = 0; $i < count($where); $i++){
            $query[] = $where[$i] .'=:_'. $where[$i];
        }
        return implode(',',$query);
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
        return $this->stmt->rowCount();
    }

    public function lastInsertId($seq_name = NULL){
        return $this->_db->lastInsertId($seq_name);
    }

}