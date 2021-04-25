<?php

class Database extends PDO
{
    private $pdo;
    private $dbtype="mysql";
    private $host="localhost";  //El host suele ser este, no el nombre de dominio
    private $dbname="tienda";
    private $dbcharset="utf8";
    private $usr="";
    private $pwd="";

    public function __construct()
    {
        $this->Connect();
        

    }

    public function Connect()
    {
        $host=$this->host;
        $dsn = $this->dbtype.":host=".$this->host.";dbname=".$this->dbname.";charset=".$this->dbcharset;
        $arrOptions = array(
            PDO::ATTR_EMULATE_PREPARES => FALSE,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try 
        {
            $this->pdo = new PDO($dsn, $this->usr, $this->pwd, $arrOptions);
        }
        catch (PDOException $e) 
        {
            error_log($this->error = $e->getMessage(),0);
        }
       
    }
    
}

?>