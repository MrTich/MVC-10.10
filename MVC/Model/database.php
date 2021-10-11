<?php
    class Database
    {
        public $conn;
        function __construct()
        {
            $this->conn = new PDO("mysql:host=".HOST.";dbname=".DB, USER, PW);
            $this->conn->query("set names utf8");
        }
        function selectQuery($sql, $arr=array())
        {
            $cmd_sql = $this->conn->prepare($sql);
            $cmd_sql->execute($arr);
            return $cmd_sql->fetchAll(PDO::FETCH_ASSOC);
        }
        function updateQuery($sql, $arr=array())
        {
            $cmd_sql = $this->conn->prepare($sql);
            $cmd_sql->execute($arr);
            return $cmd_sql->rowCount();
        }        
    }
?>