<?php
require_once __DIR__ . '/../Models/Asset.php';

class AssetController {
    private $model;

    public function __construct() {
        $this->model = new Asset();
    }

    public function index() {
        $assets = $this->model->all();
        require '../views/assets/index.php';
    }

    public function create() {
        require '../views/assets/form.php';
    }

    public function store() {
        $this->model->create($_POST);
        header("Location: index.php");
    }

    public function edit() {
        $asset = $this->model->find($_GET['id']);
        require '../views/assets/form.php';
    }

    public function update() {
        $this->model->update($_GET['id'], $_POST);
        header("Location: index.php");
    }

    public function delete() {
        $this->model->delete($_GET['id']);
        header("Location: index.php");
    }
}