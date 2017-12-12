﻿<?php
class TPgsql {
    
    private $db_host;
    private $db_user;
    private $db_pwd;
    private $db_database;
    private $conn;
    public function __construct($db_host="127.0.0.1",$db_user="root", $db_pwd="111", $db_database="db_market") {
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pwd = $db_pwd;
        $this->db_database = $db_database;
        $this->OpenConn();
    } 
    public function OpenConn()
    {
        $this->conn=mysql_connect($this->db_host,$this->db_user,$this->db_pwd);
        if(!$this->conn)
        {
            echo "database connected failed!";
        }
       $this->Opendb();
    }

    public function Opendb()
    {
      mysql_select_db($this->db_database);
        mysql_query("set names utf8");
    }

    public function CloseConn()
    {
        if($this->conn) mysql_close($this->conn);
        unset($this->conn);
    }

    public function query($sql)
    {
        $result=mysql_query($sql);
        try
        {
            if(!$result)
                throw new Exception("SQL in error,[".$sql."]");
        }
        catch(Exception $see)
        {
            $see->getMessage();
        }
        
        return $result;
    }

    public function query_two($sql)
    {
        $result=mysql_query($sql);
        try
        {
            if(!$result)
                throw new Exception("SQL is error,[".$sql."]");
        }
        catch(Exception $see)
        {
            $see->getMessage();
        }
        $arr=array();
        while ($row=mysql_fetch_assoc($result))
        {
            array_push($arr,$row);
        }
        return $arr;
    }
    public function query_one($sql)
    {
        $result=mysql_query($sql);
        try
        {
            if(!$result)
                throw new Exception("SQL is error,[".$sql."]");
        }
        catch(Exception $see)
        {
            $see->getMessage();
        }
        $arr=array();
        $arr=mysql_fetch_assoc($result);
        return $arr;
    }
    public function query_onerow($sql)
    {
        $result=mysql_query($sql,$this->conn);
        try
        {
            if(!$result)
                throw new Exception("SQL is error,[".$sql."]");
        }
        catch(Exception $see)
        {
            $see->getMessage();
        }
        $arr = mysql_fetch_assoc($result);
        return $arr;    
    }
}
?>
