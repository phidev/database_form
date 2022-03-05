<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Datenbankanwendung</title>
</head>

<body>
    <div class="main">
        <!--Kontaktformular-->
        <form action="./php/dbOperations.php" target="_blank" method="post">
            <h2>Kontaktformular</h2>
            <input type="text" id="name" name="name" maxlength="40" placeholder="Dein Name *" autocomplete="off" required>
            <br>
            <input type="email" name="email" maxlength="40" placeholder="Deine E-Mail Adresse *" autocomplete="off" required>
            <br>
            <input type="text" name="subject" maxlength="30" placeholder="Betreff *" autocomplete="off" required>
            <br>
            <textarea id="textarea" name="message" minlength="10" maxlength="350" placeholder="Deine Nachricht an uns! *" required></textarea>
            <br>
            <input type="submit" name="submit" id="submit" value="Absenden">
        </form>
    </div>
</body>

</html>