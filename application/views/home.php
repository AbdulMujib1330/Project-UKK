<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/home.css')?>">
    <title>home</title>
</head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul style="color:white;text-align:center;background:linear-gradient(180deg, #04aa6d, #333)" class="text">
Pelaporan/Pengaduan Masyarakat
</ul>
<ul>
  <li style="align-items: center;"><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a href="<?= base_url('index.php/masyarakat/register')?>">Register</a></li>
  <li style="float:right"><a href="<?= base_url('index.php/masyarakat/login')?>">Login</a></li>
</ul>
</body>
</html>