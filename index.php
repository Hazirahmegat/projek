<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Login Page</h2><br>
    <div class="login">
    <form id="login" method="post" action="login.php">
        <label><b>KAD PENGENALAN</b></label>
        <input type="text" name="idpengguna" id="idpengguna" placeholder="IC">
        <br><br>
        <label><b>KATA LALUAN</b></label>
        <input type="Password" name="katalaluan" id="katalaluan" placeholder="Kata Laluan">
        <br><br>
        <button type="submit">LOG MASUK</button>
        <br><br>
    </form>
</div>
</body>
</html>