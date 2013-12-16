<?php
/*
 *  author : Eray ARSLAN
 *  web    : erayarslan.com
 */

require_once 'NotORM.php';

class f {

    private $pdo;
    private $db;

    // DB Up
    public function __construct() {

        $this->pdo = new PDO('mysql:dbname=database_name;host=database_host','database_username','database_password');
        $this->db = new NotORM($this->pdo);

    }

    // Save Link to DB
    public function saveLink($array) {

        if($data = $this->db->links()->insert($array)) {
            return $this->getLink($data['id']);
        } else {
            return false;
        }
    }

    // Read Link From DB
    public function readLink($id) {

        if($data = $this->db->links()->where('id', $id)->fetch()) {
            return $data['link'];
        } else {
            return false;
        }

    }

    // Generate Link
    public function getLink($id) {

        return 'http://'.$_SERVER['SERVER_NAME'].'/'.$id;

    }

    // Get Link Count By IP (perDay)
    public function getThisDayCountByIp($ip) {

        return $this->db->links()->where('ip',$ip)->where('date',date('d:m:Y',time()))->count();

    }

}