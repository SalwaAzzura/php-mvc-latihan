<?php
class HomeController {
    private $db;
    private $savingModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
        require_once 'saving.php';
        $this->savingModel = new saving($this->db);
    }

    public function index() {
        require_once 'AuthMiddleware.php';
        AuthMiddleware::isAuthenticated();
        
        $savings= $this->savingModel->getAll();
        $isAdmin = $_SESSION['user_role'] === 'admin';
        require_once 'home.php';
    }

    public function admin() {
        require_once 'AuthMiddleware.php';
        AuthMiddleware::isAdmin();
        
        require_once 'user.php';
        $userModel = new User($this->db);
        $users = $userModel->getAllUsers();
        $savings = $this->savingModel->getAll();
        require_once 'admin.php';
    }
}