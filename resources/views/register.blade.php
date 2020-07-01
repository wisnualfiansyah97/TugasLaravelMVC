<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SanberCode</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
        <h1><b>Buat Account Baru</b></h1>
        <h3><b>Form Sign Up</b></h3>
        <form method="POST" action="/welcome">
            {{ csrf_field() }}
            First Name:<br><input type="text"  name="FirstName" value=""><br>
            Last Name:<br><input type="text"  name="LastName" value=""><br>
            Gender:<br><input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>
            Nationality :<select id="nation" name="nation">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapura">Singapura</option>
            <option value="Thailand">Thailand</option>
            </select><br><br>
            Language Spoken:<br>
            <input type="checkbox" id="Indonesia" name="Indonesia" value="Indonesia">
            <label for="Indonesia">Indonesia</label><br>
            <input type="checkbox" id="English" name="English" value="English">
            <label for="English"> English</label><br>
            <input type="checkbox" id="Arabic" name="Arabic" value="Arabic">
            <label for="Arabic"> Arabic</label><br>
            <input type="checkbox" id="Japanese" name="Japanese" value="Japanese">
            <label for="Japanese"> Japanese</label><br><br>
            Biography:<br><textarea id="bio" name="bio" rows="7" cols="50"></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
