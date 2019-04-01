<?PHP
class Livraison{
	private $nom;
    private $prenom;
	private $adresse;
    private $numero;
    private $prix;
    private $orderid;
    private $date;
    private $etat;
    private $zipcode;
    private $livreur;
	function __construct($nom,$prenom,$adresse,$numero,$prix,$orderid,$date,$etat,$zipcode,$livreur){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->adresse=$adresse;
        $this->numero=$numero;
        $this->prix=$prix;
        $this->orderid=$orderid;
		$this->date=$date;
        $this->etat=$etat;
        $this->zipcode=$zipcode;
        $this->numero=$numero;
		$this->livreur=$livreur;
    }




	/**
	 * Get the value of nom
	 */ 
	public function getNom()
	{
		return $this->nom;
	}

	/**
	 * Set the value of nom
	 *
	 * @return  self
	 */ 
	public function setNom($nom)
	{
		$this->nom = $nom;

		return $this;
	}

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

	/**
	 * Get the value of adresse
	 */ 
	public function getAdresse()
	{
		return $this->adresse;
	}

	/**
	 * Set the value of adresse
	 *
	 * @return  self
	 */ 
	public function setAdresse($adresse)
	{
		$this->adresse = $adresse;

		return $this;
	}

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of orderid
     */ 
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Set the value of orderid
     *
     * @return  self
     */ 
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get the value of zipcode
     */ 
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set the value of zipcode
     *
     * @return  self
     */ 
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get the value of livreur
     */ 
    public function getLivreur()
    {
        return $this->livreur;
    }

    /**
     * Set the value of livreur
     *
     * @return  self
     */ 
    public function setLivreur($livreur)
    {
        $this->livreur = $livreur;

        return $this;
    }
}

?>