<?php
class User
{
    private $naam;
    private $voornaam;
    private $passwoord;
    private $userId;

    public function __construct($userId, $naam,$voornaam,$passwoord)
    {
        $this->setNaam($naam);
        $this->setVoornaam($voornaam);
        $this->setPasswoord($passwoord);
        $this->setId($userId);
    }

    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    public function getNaam()
    {
        return $this->naam;
    }
	public function setVoornaam($naam)
    {
        $this->voornaam = $naam;
    }

    public function getVoornaam()
    {
        return $this->voornaam;
    }
      public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
      public function setPasswoord($passwoord)
    {
        $this->passwoord = $passwoord;
    }

    public function getPasswoord()
    {
        return $this->passwoord;
    }
}

?>
