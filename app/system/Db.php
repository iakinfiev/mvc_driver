<?php


namespace app\system;

use PDO;

class Db
{
    protected $db;
    public function __construct()
    {
        try {
            $this->db = new PDO(DBDRIVER .':host='. DBHOST .';dbname='. DBNAME, DBUSERNAME, DBPASSVORD);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function query($sql)
    {
        return $this->db->query($sql);
    }

    public function row($sql)
    {
        return $this->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql)
    {
        return $this->query($sql)->fetchColumn();
    }
}