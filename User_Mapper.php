
<?php
require_once('Db.php');
require_once('user.php');

class User_Mapper
{
    private $_db;

    public function __construct()
    {
        $this->_db = Db::getInstance();
    }

    public function add($object)
    {
		//hier kan fout zitte
        $sql = "INSERT INTO users (userId, username, password) VALUES (:id, :naam,:voornaam, :pass);";

        $arguments = array(
            $object->getId(),
            $object->getNaam(),
            $object->getVoornaam(),
            $object->getPasswoord()
        );

        return $this->_db->execute($sql, $arguments);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM users";

        $data = $this->_db->query($sql);

        $objects = array();
        foreach ($data as $row) {
			
            $object = new User($row['userId'], $row['naam'],$row['voornaam'],$row['passwoord']);
            $objects[] = $object;
        }
        return $objects;
    }
    
    public function isValidUser($object){
		$sql = "SELECT * FROM USERS WHERE naam = :naam AND passwoord = :passwoord";
		
		
		$arguments = array(
            $object->getNaam(),
            $object->getPasswoord()
        );
        
		$this->_db->execute($sql, $arguments);
	}
}
