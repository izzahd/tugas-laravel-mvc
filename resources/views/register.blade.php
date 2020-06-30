<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Challenge | Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label for="first_name">First name:</label><br><br>
        <input type="text" id="first_name" name="first_name"><br><br>
        <label for="last_name">Last name:</label><br><br>
        <input type="text" id="last_name" name="last_name"><br><br>
        <label>Gender:</label><br><br>
        <input type="radio" name="gender" value="male"> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br><br>
        <label>Nationality:</label><br><br>
        <select name="" id="">
            <option value="indonesian">Indonesian</option>
            <option value="singaporean">Singaporean</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
        </select><br><br>
        <label>Languange Spoken:</label><br><br>
        <input type="checkbox" name="language" value="indonesia"> Bahasa Indonesia<br>
        <input type="checkbox" name="language" value="english"> English<br>
        <input type="checkbox" name="language" value="other"> Other<br><br>
        <label for="bio">Bio:</label><br><br>
        <textarea name="" id="bio" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>