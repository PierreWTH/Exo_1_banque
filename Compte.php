
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
       
        
    }

    // METHODES//

    public function displayInfos(){

        echo "<br>Le compte bancaire de " .$this->_titulaire. " est un compte de type ".$this->_libelle. " et il a un solde de ".$this->_solde. " ".$this->_devise;

    }

    public function Credit(int $credit){

        $this->_solde += $credit;
        echo "<br> Votre compte a été crédité de ".$credit." ".$this->_devise;
        return $this->_solde;

        

    }

    public function Debit(int $debit){
        $this->_solde -= $debit;
        echo "<br> Votre compte a été débité de ".$debit." ".$this->_devise;
        return $this->_solde;


    }

    public function Payment(int $somme, Compte $_compte2){
        $this->Debit($somme);
        $_compte2->Credit($somme);
        echo "<br>\ Virement effectué/<br>";

    }


}






?>


