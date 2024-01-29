<?php



class Entreprise 
{
    private string $_raisonSociale;
    private DateTime $_dateCreation;
    private string $_adresse;
    private string $_cp;
    private string $_ville;
    private array $_employes;

    public function __construct(string $raisonSociale, string $dateCreation, string $adresse, string $cp, string $ville)
    {
        $this->_raisonSociale = $raisonSociale;
        $this->_dateCreation = new DateTime($dateCreation);
        $this->_adresse = $adresse;
        $this->_cp = $cp;
        $this->_ville = $ville;
        $this->_employes = [];

    }

    public function getRaisonSociale(): string
    {   
        return $this->_raisonSociale;
    }

    public function setRaisonSociale(string $raisonSociale)
    {   
        $this->_raisonSociale = $raisonSociale;
    }

    public function getDateCreation(): DateTime
    {   
        return $this->_dateCreation;
    }

    public function setDateCreation(string $dateCreation)
    {   
        $this->_dateCreation = $dateCreation;
    }

    public function getAdresse(): string
    {   
        return $this->_adresse;
    }

    public function setAdresse(string $adresse)
    {   
        $this->_adresse = $adresse;
    }

    public function getCp(): string
    {   
        return $this->_cp;
    }

    public function setCp(string $cp)
    {   
        $this->_cp = $cp;
    }

    public function getVille(): string
    {   
        return $this->_ville;
    }

    public function setVille(string $ville)
    {   
        $this->_ville = $ville;
    }

    public function getAdresseComplete()
    {
        return $this->_adresse." ".$this->_cp." ".$this->_ville;
    }

    public function getInfos()
    {
        return $this." a été crée le ".$this->getDateCreation()->format("d.m.Y")." et se situe à l'adresse suivante ". $this->getAdresseComplete()."<br>";
    }

    public function getEmployes()
    {
        return $this->_employes;
    }

    public function setEmployes($employes)
    {
         $this->_employes = $employes;
    }

    public function addEmploye(Employe $employe)
    {
         $this->_employes[] = $employe;
    }

    public function afficherEmployes()
    {
        $result = "<h1>Employés de $this</h1><ul>";

        foreach ($this->_employes as $employe)
        {
            $result .= "<li>$employe</li>";
        }
        
        $result.= "</ul>";
        return $result;
    }

    public function __toString()
    {
        return $this->_raisonSociale;
    }


    
    

}