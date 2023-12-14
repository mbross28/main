
<?php
// Récupération des données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$description = $_POST['description'];

// Envoi des données par e-mail ou traitement supplémentaire
$to = $_POST['email'];
$subject = "Confirmation de demande de devis";
$message = "Merci pour votre demande de devis. Nous vous contacterons bientôt pour discuter de votre problème de réparation.";
$headers = "From: mathisaucarre@gmail.com";

if (mail($to, $subject, $message, $headers)) {
  echo "E-mail de confirmation envoyé avec succès !";
} else {
  echo "Une erreur s'est produite lors de l'envoi de l'e-mail de confirmation.";
}
// Réponse de confirmation
echo "Merci $nom pour votre demande de devis. Nous vous contacterons bientôt à l'adresse $email ou au numéro de téléphone $telephone pour discuter de votre problème de réparation.";

?>

