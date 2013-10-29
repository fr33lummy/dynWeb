<?php
require_once('config.php');

class Db
{
    private static $instance = null;
    private $_db;

    private function __construct()
    {

        global $db_config;
        $dsn = $db_config['driver'] . ':';
        foreach ($db_config['dsn'] as $key => $value) {
            $dsn .= $key . '=' . $value . ';';
        }

        try {
            $this->_db = new PDO($dsn, $db_config['username'], $db_config['password']);

            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if (($db_config['driver'] == 'pgsql') && isset($db_config['schema'])) {
                $this->_db->query(sprintf("SET SEARCH_PATH TO %s", $db_config['schema']));
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
        }
    }

    public static function getInstance()
    {
		//singleton
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function execute($sql, $arguments = array())
    {
        if (!is_array($arguments)) {
            $arguments = array($arguments);
        }

        try {
            $stmt = $this->_db->prepare($sql);
            $stmt->execute($arguments);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            error_log($e->getMessage());
        }

        return $stmt;
    }



    public function query($sql, $arguments = array())
    {
        $stmt = $this->execute($sql, $arguments);

        $result = array();

        if ($stmt) {
            while ($row = $stmt->fetch()) {
                $result[] = $row;
            }
        }

        return $result;
    }
}