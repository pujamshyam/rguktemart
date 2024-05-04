<?php

$correctPassword = "shyampujamemart";

if (isset($_GET["password"])) {
    $enteredPassword = $_GET["password"];

    if ($enteredPassword == $correctPassword) {

        header("Location: admin.php");
        exit();
    } else {
        echo "<script>alert('Incorrect password.');
        window.location.href = 'index.php';</script>";
        exit();
    }
}

?>