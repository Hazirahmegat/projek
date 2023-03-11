<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2> HALAMAN DAFTAR MASUK</h2><br>
    <div class="dftr">
    <form id="dftr" method="post" action="register.php">
        <label><b>NAMA : </b></label>
        <input type="text" name="Uname" id="Uname" placeholder="Nama">
        <br><br>
        <label><b>NO KAD PENGENALAN : </b></label>
        <input type="Nokp" name="Nokp" id="Nokp" placeholder="000000-00-0000">
        <br><br>
        <label><b>KATA LALUAN : </b></label>
        <input type="Password" name="Pass" id="Pass"require placeholder="Kata laluan">
        <br><br>
        <label><b>NO TELEFON : </b></label>
        <input type="tel" name="Notel"id="notel" required placeholder="+60"> 
        <br><br>
        <label><b>NAMA WARIS : </b></label>
        <input type="text" name="Wname" id="Wname" placeholder="Nama waris">
        <br><br>
        <label><b>NO TEL WARIS : </b></label>
        <input type="tel" name="WnoTel" id="WnoTel" required placeholder="+60"">
        <br><br>
        <input type="submit" name="sendform" id="rgis" value="DAFTAR MASUK">
        <input type="reset" name="clearform" id="cancel" value="BATAL">
        <br><br>
        <a href="login.php"> Sudah mempunyai akaun ? Log masuk 
    </form>
</div>
</body>
</html>