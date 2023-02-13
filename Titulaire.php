<?php

class Titulaire
{



    // Déclaration des propriétés

    private string $_prenom;
    private string $_nom;
    private string $_datenaissance;
    private string $_ville;
    private array $_comptes;


    // Déclaration des méthodes

    //Construct

    public function __construct(string $prenom, string $nom, string $datenaissance, string $ville)
    {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_datenaissance = $datenaissance;
        $this->_ville = $ville;
        $this->_comptes = [];
    }

    // METHODES//

    public function addCompte(Compte $compte)
    {
        $this->_comptes[] = $compte;
    }

    public function calcAge()
    {
        $ajd = date("Y-m-d");
        $diff = date_diff(date_create($this->_datenaissance), date_create($ajd));
        $age = $diff->format('%y');
        return $age;
    }



    public function afficherInfos()
    {
        $age = $this->calcAge();


        echo "<br> Information du titulaire : " . $this->_prenom . " " . $this->_nom . ", " . $age . " ans, ville de " . $this->_ville . ".";

        foreach ($this->_comptes as $value){
           echo $value->displayInfos();

        }
        //foreach comptes
    }

    public function __toString()
    {
        return $this->getPrenom() . " " . $this->getNom();
    }



    // GETTER AND SETTERS
    /**
     * Get the value of _prenom
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get the value of _nom
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _datenaissance
     */
    public function get_datenaissance()
    {
        return $this->_datenaissance;
    }

    /**
     * Set the value of _datenaissance
     *
     * @return  self
     */
    public function set_datenaissance($_datenaissance)
    {
        $this->_datenaissance = $_datenaissance;

        return $this;
    }

    /**
     * Get the value of ville
     */
    public function getVille()
    {
        return $this->_ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */
    public function setVille($ville)
    {
        $this->_ville = $ville;

        return $this;
    }

    /**
     * Get the value of _comptes
     */ 
    public function get_comptes()
    {
        return $this->_comptes;
    }

    /**
     * Set the value of _comptes
     *
     * @return  self
     */ 
    public function set_comptes($_comptes)
    {
        $this->_comptes = $_comptes;

        return $this;
    }
}
