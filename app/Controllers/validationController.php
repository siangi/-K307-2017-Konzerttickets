<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $firstname = $_POST['firstname'] ?? '';
        $firstname = trim($firstname);

        if($firstname === '') {
            echo 'Bitte geben Sie Ihren Vornamen ein.';
        }
        else{
            echo 'Thanks';
        }

        $lastname = $_POST['lastname'] ?? '';
        $lastname = trim($lastname);
        if($lastname === '') {
            echo 'Bitte geben Sie Ihren Nachnamen ein.';
        }

        $Email = $_POST['Email'] ?? '';
        $Email = trim($Email);
        if(filter_var($Email, FILTER_VALIDATE_EMAIL === false)) {
            echo 'Bitte geben Sie eine gültige E-Mail Adresse ein.';
        }


        $Phonenumber = $_POST['P'] ?? '';
        $Phonenumber = trim($Phonenumber);
        if($Phonenumber === '') {
            echo 'Bitte geben Sie Ihren Nachnamen ein.';
        }
    }
?>
