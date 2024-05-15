<?php
class Personne{
    private string $lastname;
    private string $firstname;
    private string $adress;
    private string $dateOfBirth;

    public function __construct($lastname, $firstname, $adress, $dateOfBirth) {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->adress = $adress;
        $this->dateOfBirth = $dateOfBirth;
    }


    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

 
    public function getFirstname()
    {
        return $this->firstname;
    }


    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

 
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }
    public function afficherInfos() {
        echo "Nom: " . $this->getLastname() . "\n";
        echo "Prénom: " . $this->getFirstname() . "\n";
        echo "Adresse: " . $this->getAdress() . "\n";
        echo "Date de naissance: " . $this->getDateOfBirth() . "\n";
    }
    public function modifyAdress($newAdress) {
        $this->setAdress($newAdress);
    
    }
    public function calculAge(){
        $dateOfBirth = DateTime::createFromFormat('d/m/Y', $this->dateOfBirth);
        $today = new DateTime();  
        $difference = $dateOfBirth->diff($today);
        return $difference->y;
    } 

}