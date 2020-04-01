<?php

namespace App;

class Db{
    /**
     * @var DB
     * @access private
     * @static
     */
    private static $dBinstance = null;

    private $hostname;
    private $dbname;
    private $username;
    private $password;
    private $charset;

    /**
     * Constructeur de la classe
     *
     * @param void
     * @return void
     */
    private function __construct(){
        $this->hostname = "db5000253693.hosting-data.io";
        $this->dbname = "dbs247579";
        $this->username = "dbu366454";
        $this->password = "Proto00229+";
        $this->charset = "utf8mb4";
    }

    public function connect(){
        try{
            $dns = "mysql:host=".$this->hostname.";dbname=".$this->dbname.";charset=".$this->charset;
            $link = new PDO($dns,$this->username,$this->password);
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $link;
        }catch (PDOException $e) {
            die("Erreur connection: ".$e->getMessage());
        }
    }

    /**
     * Méthode qui crée l'unique instance de la classe
     * si elle n'existe pas encore puis la retourne.
     *
     * @param void
     * @return DB
     */
    public static function getInstance(){
        if(is_null(self::$dBinstance)){
            $dBinstance = new Db;
        }
        return $dBinstance;
    }

    function __destruct(){
        self::$dBinstance = null;
    }
}
?>
