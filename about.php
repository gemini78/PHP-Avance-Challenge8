<?php
$pageActive = 'about';
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
            <div class="about">
                <div class="content">
                    <h1>A propos</h1>
                    <div class="rules">
                        <div class="content">
                            <p>
                                À partir de ce que tu viens de réaliser, il faut améliorer ce formulaire. Tu dois rajouter un champ pour entrer le numéro de téléphone de l’utilisateur, ainsi qu’une liste déroulante proposant plusieurs thématiques, qui sera reprise comme sujet du mail.

                                Une fois que l’utilisateur clique sur le bouton de soumission, les données du formulaires sont envoyées sur une nouvelle page “thanks.php” et les informations saisies sont reprises de la sorte sur la page :
                            </p>
                            <p style="background-color:black;color:white;padding:15px">
                                Merci {Prénom} {Nom} de nous avoir contacté à propos de “{sujet}”.

                                Un de nos conseiller vous contactera soit à l’adresse {e-mail} ou par téléphone au {téléphone} dans les plus brefs délais pour traiter votre demande :

                                {message}
                            </p>
                            <p style="background-color:grey;color:white;padding:15px">
                                Tu l'auras remarqué, à aucun moment on ne te demande d'envoyer le mail. C'est normal, il s'agit là d'une autre problématique. Tu verras ça plus tard. Concentre-toi sur la gestion des formulaires pour le moment.
                            </p>
                            <h3>Critères de validation</h3>
                            <ul>
                                <li>Le formulaire de contact comporte les champs
                                    <ul>
                                        <li>nom</li>
                                        <li>prénom</li>
                                        <li>e-mail</li>
                                        <li>téléphone</li>
                                        <li>sujet (sous forme de liste déroulante)</li>
                                        <li>message (textarea)</li>
                                    </ul>
                                </li>
                                <li>Le formulaire renvoie vers une nouvelle page PHP qui affiche le message demandé plus haut contenant les informations issues du formulaire.</li>
                                <li>Les données doivent être envoyées en POST.</li>
                                <li>Le code est disponible sur Github.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require('parts/footer.php') ?>
</body>

</html>