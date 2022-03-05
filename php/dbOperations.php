<?php

require "../php/server.php";
// Wenn auf "submit" geklickt wird und es im HTML keine errors gegeben hat.
if (isset($_POST["submit"])) {

    // Prepared Statement.
    $stmt = $connection->prepare("INSERT INTO `message`(`name`, `email`, `subject`, `message`)
    VALUES (?, ?, ?, ?)");

    // Aus HTML input tags auslesen.
    $name = strtolower($_POST["name"]);
    $email = strtolower($_POST["email"]);
    $subject = strtolower($_POST["subject"]);
    $message = strtolower($_POST["message"]);

    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // In die Datenbank schreiben.
    if ($stmt->execute()) {
        header('location: messageSuccsess.php');
    } else {
        echo "Fehlgesschlagen: " . $stmt . "<br>" . $connection->error;
    }

    // Verbindung zur Datenbank wieder schließen.
    $connection->close();
}
