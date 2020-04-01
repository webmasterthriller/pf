<?php

namespace App;


class Contrat
{
    private $id;
    private $demande;
    private $montant;
    private $taux;
    private $periode;
    private $mensualite;
    private $date_redaction_contrat;
    private $visa;
    private $date_signature;

    /**
     *
     * @param void
     * @return boolean
     */
    public function create(){
        try {
            $link = Db::getInstance()->connect();

            $query = "INSERT INTO Contrat VALUES('".$this->id."','".$this->demande."','".$this->montant."','".$this->taux."','".$this->periode."','".$this->mensualite."','".$this->date_redaction_contrat."','".$this->visa."','".$this->date_signature."')";

            if($link->query($query)){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur création de contrat: ".$e->getMessage());
        }
    }

    /**
     * @param void
     * @return boolean
     */
    public function approve($contrat_id){
        try {
            $link = Db::getInstance()->connect();

            $query = "UPDATE Contrat SET 'contrat_visa'=TRUE, 'contrat_date_visa'=current_date WHERE contrat_id=$contrat_id";

            if($link->query($query)){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur approbation du contrat: ".$e->getMessage());
        }
    }

    /**
     * @param string
     * @return string
     */
    public function read($contrat_id){
        try {
            $link = Db::getInstance()->connect();

            $query = "SELECT * From Contrat WHERE contrat_id=$contrat_id";

            $exec = $link->query($query);

            $fetch = $exec->fetchAll();

            if(empty($fetch)){
                return "not found";
            }else{
                return json_encode($fetch);
            }
        } catch (PDOException $e) {
            die("Erreur lecture du contrat: ".$e->getMessage());
        }
    }

    /**
     *
     * @param string
     * @return boolean
     */
    public function cancel($contrat_id){
        try {
            $link = Db::getInstance()->connect();

            $query = "UPDATE Contrat SET 'contrat_visa'=FALSE WHERE contrat_id=$contrat_id";

            if($link->query($query)){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur annulation du contrat: ".$e->getMessage());
        }
    }

    /**
     *
     * @param string
     * @return boolean
     */
    public function delete($contrat_id){
        try {
            $link = Db::getInstance()->connect();

            $query = "DELETE FROM Contrat WHERE contrat_id=$contrat_id";

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

            $query = "SELECT * From Contrat";

            $exec = $link->query($query);

            $fetch = $exec->fetchAll();

            if(empty($fetch)){
                return "not found";
            }else{
                return json_encode($fetch);
            }
        } catch (PDOException $e) {
            die("Erreur lecture liste de contrat: ".$e->getMessage());
        }
    }
}
