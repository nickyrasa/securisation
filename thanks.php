<?php
$name = $_POST['user_name'];
$prenom = $_POST['user_prenom'];
$email = $_POST['user_email'];
$message = $_POST['user_message'];
$telephone = $_POST['user_telephone'];

$errors = [];

if (empty($name)) {
    $errors[] = 'Le champ compagnie doit être renseigné';
}

if (empty($prenom)) {
    $errors[] = 'Le champ prénom doit être renseigné';
}

if (empty($email)) {
    $errors[] = 'Le champ email doit être renseigné';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'l\'adresse email n\'est pas au bon format';
}

if (empty($message)) {
    $errors[] = 'Le champ message doit être renseigné';
}

if (!empty($errors)) {
    require 'error.php';
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks page</title>
</head>

<body>
    <div>
        <p>Merci <?= $name ?> <?= $prenom ?> de nous avoir contacté à propos de " <?= $sujet ?> "<br>
            Un de nos conseillers vous contactera soit à l’adresse <?= $email ?> ou par téléphone au <?= $telephone ?> <br>
            dans les plus brefs délais pour traiter votre demande : <?= $message ?> </p>
    </div>
</body>

</html>