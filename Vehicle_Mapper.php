<?php
require_once('Db.php');
require_once('Vehicle.php');

class Vehicle_Mapper
{
    private $_db;

    public function __construct()
    {
        $this->_db = Db::getInstance();
    }

    public function add($object)
    {
        $sql = "INSERT INTO vehicles (color, brand) VALUES (:color, :brand);";

        $arguments = array(
            $object->getColor(),
            $object->getBrand()
        );

        return $this->_db->execute($sql, $arguments);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM vehicles";

        $data = $this->_db->query($sql);

        $objects = array();
        foreach ($data as $row) {
            $object = new Vehicle($row['color'], $row['brand']);
            $objects[] = $object;
        }
        return $objects;
    }
}