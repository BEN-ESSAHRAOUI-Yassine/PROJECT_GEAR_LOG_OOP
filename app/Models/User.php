<?php
require_once __DIR__ . '/../Core/Database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function all() {
        return $this->db->query("SELECT * FROM user_db")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM user_db WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO user_db (name,email,role) VALUES (?,?,?)");
        return $stmt->execute([$data['name'],$data['email'],$data['role']]);
    }

    public function update($id,$data) {
        $stmt = $this->db->prepare("UPDATE user_db SET name=?, email=?, role=? WHERE id=?");
        return $stmt->execute([$data['name'],$data['email'],$data['role'],$id]);
    }

    public function delete($id) {
        return $this->db->prepare("DELETE FROM user_db WHERE id=?")->execute([$id]);
    }
}