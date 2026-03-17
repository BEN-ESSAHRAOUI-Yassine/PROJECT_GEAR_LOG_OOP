<?php
require_once __DIR__ . '/../Models/User.php';

class UserController {
    private $model;

    public function __construct() {
        $this->model = new User();
    }

    public function index() {
        $users = $this->model->all();
        require '../views/users/index.php';
    }

    public function create() {
        require '../views/users/form.php';
    }

    public function store() {
        $this->model->create($_POST);
        header("Location: index.php?controller=user");
    }

    public function edit() {
        $user = $this->model->find($_GET['id']);
        require '../views/users/form.php';
    }

    public function update() {
        $this->model->update($_GET['id'], $_POST);
        header("Location: index.php?controller=user");
    }

    public function delete() {
        $this->model->delete($_GET['id']);
        header("Location: index.php?controller=user");
    }
}