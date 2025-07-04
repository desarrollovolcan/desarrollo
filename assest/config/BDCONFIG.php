<?php
class BDCONFIG {

    private $HOST;
    private $USER;
    private $PASS;
    private $DBNAME;

    public function __construct()
    {
        $this->HOST = "190.13.179.171:3306";
     $this->USER = "sm_desarrollo";
        $this->PASS ="5a7O(yQlB)*5aNdl" ;
        $this->DBNAME = "smartberry_desarrollo";

    }

    public function __GET($k) {
        return $this->$k;
    }

    public function __SET($k, $v) {
        $this->$k = $v;
    }

    public function conectar() {
        try {
            $link = new PDO("mysql:host={$this->HOST};dbname={$this->DBNAME}", $this->USER, $this->PASS);
            $link->exec("set names utf8");
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $link;
        } catch (PDOException $e) {
            // Maneja el error de conexión aquí, si es necesario
            echo 'Error de conexión: ' . $e->getMessage();
            return null;
        }
    }
}