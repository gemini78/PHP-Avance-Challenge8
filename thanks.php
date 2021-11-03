<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$message = sprintf("Merci %s %s de nous avoir contacté à propos de “%s”. 
Un de nos conseiller vous contactera soit à l’adresse %s 
ou par téléphone au %s dans les plus brefs délais 
pour traiter votre demande : %s",$firstname, $lastname, $subject, $email, $phone, $message);

$pageActive = '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 8 : Simuler une prise de contact</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require('parts/topbar.php')  ?>
    <main>
        <div class="wrapper">
            <h1>Tanks !!!</h1>
            <div class="container-cards">
                <div class="card">
                    <div class="card-header">
                        <span>informations</span>
                    </div>
                    <div class="card-body">
                        <p><?= $message ?></p>
                    </div>
                    <div class="card-footer">
                        <span>informations</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require('parts/footer.php') ?>
</body>

</html>