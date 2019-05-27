<?php

namespace Flame;

use App\config\Database;

class Model {
    
    protected $db;

    public function __construct(){
        $db = new Database();
        $this->db = $db->getConnection(); 
    }

    public function all(){
        $query = 'SELECT * FROM ' . $this->table;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}