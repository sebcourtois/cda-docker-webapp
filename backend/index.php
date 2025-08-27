<?php
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: http://localhost:3000");
// Autorise les méthodes HTTP spécifiques
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
// Autorise les en-têtes personnalisés
header("Access-Control-Allow-Headers: Content-Type, Authorization");
require_once 'db.php';

// Pour gérer les requêtes préliminaires (preflight)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$stmt = $pdo->query("SELECT * FROM tasks");
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($tasks, JSON_UNESCAPED_UNICODE);
