<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $firstname = $_POST['firstname'] ?? '';
        $firstname = trim($firstname);

        if($firstname === '') {
            echo 'Bitte geben Sie Ihren Vornamen ein.';
        }

        $lastname = $_POST['lastname'] ?? '';
        $lastname = trim($lastname);
        if($lastname === '') {
            echo 'Bitte geben Sie Ihren Nachnamen ein.';
        }

        $Email = $_POST['Email'] ?? '';
        $Email = trim($Email);
        if(empty($Email) || !preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9.-]+.[a-zA-Z0-9]$/", $Email) === true){
            echo "Email ist nicht gültig";
        }


        $Phonenumber = $_POST['Phonenumber'] ?? '';
        $Phonenumber = trim($Phonenumber);
        if(empty($Phonenumber) || !preg_match("/^[0-9\s+-\/]+$/", $Phonenumber)===true){
            echo "Telefonnummer ist nicht gültig";
        }


    }
?>
