<?php
require_once 'BookController.php';

$controller = new BookController();
$action = isset($_GET['action']) ? $_GET['action'] : 'genres';

if ($action == 'genres') {
    $controller->genres();
} elseif ($action == 'authors') {
    $controller->authors();
} else {
    echo "Halaman tidak ditemukan!";
}
?>