<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Formulaire">
 <link rel="stylesheet" href="./css/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" href="/favicon_io/favicon.ico">
    <link rel="manifest" href="/site.webmanifest">
    <title>Formulaire</title>
</head>

<body>
    <header>
        <h1>
            Formulaire d'inscription 
        </h1>
    </header>
    <main>
        <fieldset>
            <legend>
                inscription étudiant
            </legend>
            <form action="index.html" method="get"></form> <!--faire différence entre get et post-->

            <label for="Nom"> <!--la balise for et name doivent être identique-->
                Votre nom:
            </label>

            <input type="text" id="Nom" name="Nom" placeholder="Votre nom" autofocus required aria-required="true">

            <label for="préom"> <!--la balise for et name doivent être identique-->
                Votre prénom:
            </label>
            <input type="text" id="prénom" name="prénom" placeholder="Votre prénom">

    
            <label for="date"> <!--la balise for et name doivent être identique-->
                Votre date de naissance:
            </label>
            <input type="date" id="date"  name="date de naissance" placeholder="date de naissance">

            <label for="téléphone"> <!--la balise for et name doivent être identique-->
                Votre numéros de téléphone:
            </label>
            <input type="téléphone" id="téléphone"  name="téléphone" placeholder="téléphone">
        </fieldset>
    </main>
    <footer>
        <p>
            &copy; 2022 Formulaire
            <?php
        </p>
    </footer>
    
</body>
</html>