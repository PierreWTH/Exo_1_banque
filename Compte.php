
<?php

class Compte

{

// Déclaration des propriétés

private string $_libelle;
private int $_solde;
private string $_devise;
private Titulaire $_titulaire;


 // Déclaration des méthodes

    //Construct

    public function __construct(string $libelle, int $solde, string $devise, Titulaire $titulaire)
    {
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $this->_titulaire->addCompte($this);
        
    }

    // METHODES//

        // Afficher infos compte

    public function displayInfos(){

        echo "<br>Le compte bancaire de " .$this->_titulaire. " est un compte de type ".$this->_libelle. " et il a un solde de ".$this->_solde. " ".$this->_devise;

    }

        // Créditer

    public function Credit(int $credit){

        $this->_solde += $credit;
        echo "<br> Votre compte a été crédité de ".$credit." ".$this->_devise;
        return $this->_solde;

        // Debiter

    }

    public function Debit(int $debit){
        $this->_solde -= $debit;
        echo "<br> Votre compte a été débité de ".$debit." ".$this->_devise;
        return $this->_solde;

    }

        // Faire un virement

    public function Payment(int $somme, Compte $_compte2){
        $this->Debit($somme);
        $_compte2->Credit($somme);
        echo "<br> Le virement a été effectué. <br>";

    }

    // Getters and Setters


public function get_libelle()
{
return $this->_libelle;
}


public function set_libelle($_libelle)
{
$this->_libelle = $_libelle;

return $this;
}


public function get_solde()
{
return $this->_solde;
}


public function set_solde($_solde)
{
$this->_solde = $_solde;

return $this;
}


public function getDevise()
{
return $this->_devise;
}


public function setDevise($devise)
{
$this->_devise = $devise;

return $this;
}
    

public function get_titulaire()
{
return $this->_titulaire;
}


public function set_titulaire($_titulaire)
{
$this->_titulaire = $_titulaire;

return $this;
}

}

?>


