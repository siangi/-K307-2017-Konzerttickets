<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $name = $_POST['firstname'] ?? '';
        $name = trim($name);
        if($name === '') {
            echo 'Bitte geben Sie einen Namen ein.';
        }


    }
?>
