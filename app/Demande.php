<?php

namespace App;


class Demande
{
    private $id;
    private $type;
    private $civilite;
    private $nom;
    private $prenom;
    private $adresse;
    private $code_postal;
    private $ville;
    private $pays;
    private $telephone;
    private $email;
    private $date;
    private $statut;

    /**
     *
     * @param Demande
     * @return boolean
     */
    public function create($demande){
        try {
            $link = Db::getInstance()->connect();

            $query = "INSERT INTO Demand VALUES('".$this->id."','".$this->type."','".$this->civilite."','".$this->nom."','".$this->prenom."','".$this->adresse."','".$this->code_postal."','".$this->ville."','".$this->pays."','".$this->telephone."','".$this->email."','".$this->date."','".$this->statut."')";

            if($link->query($query)){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur création de demande: ".$e->getMessage());
        }
    }

    /**
     * @param string
     * @return string
     */
    public function read($demande_id){
        try {
            $link = Db::getInstance()->connect();

            $query = "SELECT * From Demand WHERE dmd_id=$demande_id";

            $exec = $link->query($query);

            $fetch = $exec->fetchAll();

            if(empty($fetch)){
                return "not found";
            }else{
                return json_encode($fetch);
            }
        } catch (PDOException $e) {
            die("Erreur lecture de demande: ".$e->getMessage());
        }
    }

    /**
     * @param void
     * @return boolean
     */
    public function activate($demande_id){
        try {
            $link = Db::getInstance()->connect();

            $query = "UPDATE Demand SET 'dmd_statut'=TRUE WHERE dmd_id=$demande_id";

            if($link->query($query)){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur activation de demande: ".$e->getMessage());
        }
    }

    /**
     *
     * @param string
     * @return boolean
     */
    public function archive($demande_id){
        try {
            $link = Db::getInstance()->connect();

            $query = "UPDATE Demand SET 'dmd_statut'=FALSE WHERE dmd_id=$demande_id";

            if($link->query($query)){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur archivage de demande: ".$e->getMessage());
        }
    }

    /**
     *
     * @param string
     * @return boolean
     */
    public function delete($demande_id){
        try {
            $link = Db::getInstance()->connect();

            $query = "DELETE FROM Demand WHERE dmd_id=$demande_id";

            if($link->query($query)){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur suppression de demande: ".$e->getMessage());
        }
    }

    /**
     * @param void
     * @return string
     */
    public function list(){
        try {
            $link = Db::getInstance()->connect();

            $query = "SELECT * From Demand";

            $exec = $link->query($query);

            $fetch = $exec->fetchAll();

            if(empty($fetch)){
                return "not found";
            }else{
                return json_encode($fetch);
            }
        } catch (PDOException $e) {
            die("Erreur lecture liste des demandes: ".$e->getMessage());
        }
    }
}
