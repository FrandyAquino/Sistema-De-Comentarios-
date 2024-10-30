<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    $_SESSION['name'] = $name;

    header("Location: index.php");
    exit();
} else {
    echo "<h1>No se ha enviado ningún formulario</h1>";
}
?>
