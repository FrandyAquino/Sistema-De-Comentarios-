<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);

    $message = htmlspecialchars($_POST["message"]);

    $filePath = 'data.json';

    $data = [];
    if (file_exists($filePath)) {
        $json = file_get_contents($filePath);
        $data = json_decode($json, true);
    }

    $newEntry = [
        'name' => $name,
 
        'message' => $message,
    ];
    $data[] = $newEntry;

    file_put_contents($filePath, json_encode($data, JSON_PRETTY_PRINT));

    $_SESSION['successMessage'] = "Gracias, $name. Tu comentario ha sido recibido.";

    header("Location: index.php");
    exit();
}
?>
