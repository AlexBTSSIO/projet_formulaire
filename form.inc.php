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
        <h1>Formulaire de contact</h1>
    </header>
    <main>
        <div class="inner-form" role="form">
            
            <fieldset>
                <legend>Espace membre</legend>
                <form action="index.html" method="post"> <!-- mettre le nom du fichier html dans aciton +diférencier la méthode post du get--> 
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Nom" aria-required="true"  autofocus>

                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom" aria-required="true">

                    <label for="date">Date de naissance</label>
                    <input type="date" id="date" name="date" aria-required="true">
        
                    <label for="phone">Votre téléphone</label>

                    <input type="tel" id="phone" name="phone" aria-label="format à 10 chiffre" placeholder="téléphone" aria-required="true">

                    <small>Format: (+33)01-75-22-15-45</small>
                    <button type="submit" value="Envoyer" aria-label="cliquez pour envoyer">envoyer</button>

                </form>
            </fieldset>
        </div>
        <ul>
        <?php 
        // print "<pre>";
        // print_r($_POST);
        // print "</pre>";
        foreach($_POST as $key => $value) {
        print "<li>".$key." ".$value."</li>";
        }
        ?>
        </ul>
    </main>
    <footer>
        <p>
            &copy; - MIT -&nbsp;
        </p>
    </footer>
    
   
</body>
</html>