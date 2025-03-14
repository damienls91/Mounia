<!-- filepath: c:\Users\damie\Documents\BTS CIEL 2024_25\Innocent\HTML\Projet_1_site_publié\Site\test_email.php -->
<?php
// Activer l'affichage des erreurs
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "damienlamarrep@gmail.com"; // Remplacez par votre adresse email
    $subject = "Nouveau message de contact de $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Message envoyé avec succès!</p>";
    } else {
        echo "<p>Erreur lors de l'envoi du message.</p>";
    }
}
?>