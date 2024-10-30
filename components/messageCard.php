<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    echo '<div class="card mb-4">';
    echo '    <div class="card-body p-4">';
    echo '        <div class="d-flex">';
    echo '            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>';
    echo '            <div class="ms-4">';
    echo "                <p class='mb-1'>$message</p>";
    echo "                <div class='small text-muted'>- $name, $email, $phone</div>";
    echo '            </div>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
}
?>
