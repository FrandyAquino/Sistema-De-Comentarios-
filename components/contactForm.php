<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    $messageSent = true;
}
?>
<form id="contactForm" action="procesar.php" method="POST">
    <div class="form-floating mb-3">
        <input class="form-control" id="name" name="name" type="text" placeholder="Ingresa tu nombre..." required />
        <label for="name">Nombre completo</label>
    </div>
 
    <div class="form-floating mb-3">
        <textarea class="form-control" id="message" name="message" placeholder="Ingresa tu mensaje aquí..." style="height: 10rem" required></textarea>
        <label for="message">Mensaje</label>
    </div>
    <div class="d-grid">
        <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Enviar</button>
    </div>
</form>


<?php if (isset($messageSent) && $messageSent): ?>
    <div class="alert alert-success mt-3" role="alert">
        <?php echo "Gracias, $name. Tu comentario ha sido recibido."; ?>
    </div>
<?php endif; ?>
