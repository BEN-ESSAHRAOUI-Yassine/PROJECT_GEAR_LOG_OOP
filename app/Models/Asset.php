<?php
require_once __DIR__ . '/../Core/Database.php';

class Asset {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function all() {
        return $this->db->query("SELECT * FROM assets")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM assets WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO assets (device_name,serial_number) VALUES (?,?)");
        return $stmt->execute([$data['device_name'],$data['serial_number']]);
    }

    public function update($id,$data) {
        $stmt = $this->db->prepare("UPDATE assets SET device_name=?, serial_number=? WHERE id=?");
        return $stmt->execute([$data['device_name'],$data['serial_number'],$id]);
    }

    public function delete($id) {
        return $this->db->prepare("DELETE FROM assets WHERE id=?")->execute([$id]);
    }
}