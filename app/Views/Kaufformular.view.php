<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Meine Seite</title>
    <link rel="stylesheet" href="public/css/app.css">
</head>
<body>

<h1 class="welcome">Kaufformular</h1>

<form action="validation" method="post">

    <fieldset>

        <legend>Kontaktinformationen</legend>

        <label for="firstname">Vor- und Nachname</label>
        <input type="text" id="firstAndLastName" name="firstAndLastName">

        <label for="Email">Email</label>
        <input type="text" id="Email" name="Email">

        <label for="Phonenumber">Telefonnummer</label>
        <input type="text" id="Phonenumber" name="Phonenumber">



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
        <select>
            <option value="1">0% Rabatt</option>
            <option value="2">5% Rabatt</option>
            <option value="3">10% Rabatt</option>
            <option value="3">15% Rabatt</option>
        </select></br>


        <label for="Treuebonus">Preis Total</label>

    </fieldset>

    <button type="submit" name="form-submit">Anmeldung einreichen</button>

</form>


<script src="public/js/app.js"></script>
</body>
</html>
