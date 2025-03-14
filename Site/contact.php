<!-- PHP -->
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        $to = "damienlamarrep@gmail.com";
        $subject = "Nouveau message de contact de $name";
        $headers = "From: $email";

        if (mail($to, $subject, $message, $headers)) {
            echo "<p>Message envoyé avec succès!</p>";
        } else {
            echo "<p>Erreur lors de l'envoi du message.</p>";
        }
    }
    ?>