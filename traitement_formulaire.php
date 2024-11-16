<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $sujet = htmlspecialchars($_POST['sujet']);
    $message = htmlspecialchars($_POST['message']);

    // Validation simple
    if (empty($nom) || empty($email) || empty($telephone) || empty($sujet) || empty($message)) {
        echo '<p class="error-message">Veuillez remplir tous les champs.</p>';
        exit;
    }

    // Envoi de l'email (configurez votre email)
    $to = 'amdieye@gmail.com';
    $subject = 'Nouvelle plainte reçue';
    $body = "Nom: $nom\nEmail: $email\nTéléphone: $telephone\nSujet: $sujet\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo '<p class="success-message">Votre plainte a été soumise avec succès. Merci pour votre retour.</p>';
    } else {
        echo '<p class="error-message">Une erreur est survenue lors de l\'envoi de votre plainte. Veuillez réessayer.</p>';
    }
}
?>
