<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coba Get</title>
</head>
<body>
  
  <!-- mengirim data menggunakan get -->
  <a href="kuliah_latihan3.php?nama=Galih">Kirim Data Nama</a>
  <hr>
  <!-- mengirimkan data menggunakan post -->
  <h3>Login Form</h3>
  <form action="kuliah_latihan3.php" method="post">
    <label for="username">Username : </label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Password :</label>
    <input type="password" name="password" id="password">
    <br>
    <button type="submit">Kirim</button>
  </form>

</body>
</html>