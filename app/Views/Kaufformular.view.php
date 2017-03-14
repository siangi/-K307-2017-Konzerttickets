<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Meine Seite</title>
    <link rel="stylesheet" href="public/css/app.css">
</head>
<body>

<h1 class="welcome">Kaufformular</h1>

<form action="app/Controllers/validationController.php" method="post">

    <fieldset>

        <legend>Kontaktinformationen</legend>

        <label for="firstname">Vorname</label>
        <input type="text" id="firstname">

        <label for="lastname">Nachname</label>
        <input type="text" id="lastname"></br>

        <label for="Adress">Adresse</label>
        <input type="text" id="Adress">

        <label for="Phonenumber">Telefonnummer</label>
        <input type="text" id="Phonenumber">



    </fieldset>

    <fieldset>

        <legend>Kaufinformationen</legend>

        <label for="Concert">Konzert</label>
        <select>
            <option value="1">Drake - Hallenstadion</option>
            <option value="2">Bryson Tiller - X-TRA</option>
            <option value="3">Post Malone - Dynamo</option>
            <option value="3">Future - X-TRA</option>
        </select>

        <label for="Treuebonus">Treuebonus</label>
        <input type="text" id="Treuebonus"></br>

        <label for="PriceWOBonus">Preis ohne Treuebonus</label>
        <input type="text" id="Treuebonus">

        <label for="Treuebonus">Preis Total</label>

    </fieldset>

    <button type="submit" name="form-submit">Anmeldung einreichen</button>

</form>


<script src="public/js/app.js"></script>
</body>
</html>