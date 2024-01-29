<?php



class Employe 
{
    private string $_nom;
    private string $_prenom;
    private string $_email;
    private Entreprise $_entreprise;

    public function __construct(string $nom, string $prenom, string $email, Entreprise $entreprise)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_email = $email;
        $this->_entreprise = $entreprise;
        $this->_entreprise->addEmploye($this);
        

    }

    public function getNom(): string
    {   
        return $this->_nom;
    }

    public function setNom(string $nom)
    {   
        $this->_nom = $nom;
    }

    public function getPrenom(): string
    {   
        return $this->_prenom;
    }

    public function setPrenom(string $prenom)
    {   
        $this->_prenom = $prenom;
    }

    public function getEmail(): string
    {   
        return $this->_email;
    }

    public function setEmail(string $email)
    {   
        $this->_email = $email;
    }

    public function getEntreprise(): Entreprise
    {   
        return $this->_entreprise;
    }

    public function setEntreprise(Entreprise $entreprise)
    {   
        $this->_entreprise = $entreprise;
    }

    public function getInfos()
    {
        return $this." travaille dans l'entreprise ".$this->_entreprise."<br>";
    }

    public function __toString()
    {
        return $this->_prenom." ".$this->_nom;
    }


    
    

}