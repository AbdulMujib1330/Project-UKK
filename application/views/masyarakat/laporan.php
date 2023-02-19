<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('css/navbar/1.css') ?>">

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <title>Document</title>
</head>

<style>
html,
body {
  height: 100vh;
  font-family: Arial, Helvetica, sans-serif;
}

a {
  text-decoration: none !important;
}

body {
  background: -webkit-linear-gradient(bottom, rgb(255, 255, 255), rgb(255, 255, 255));
  background-repeat: no-repeat;
}

.primary{
background: -webkit-linear-gradient(bottom,rgba(13,110,253,0.5),#046ec4);
}

.aa:hover {
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
}

.aa {
  color: black;
}
/* div .side #open {
  width: 80px;
} */
.size-btn {
  background-color: rgba(13,110,253,0.5);
  width: 200px;
}

.size.side.close {
  width: 200px;
  transition: 0.5s;
}

.size.side{
  width: 0;
  transition: 0.5s;
}
.display-none.close{
  display: none;
}
/* div.size.side.close div ul li{
  display: none;
}  */
/* .border-my{
  border-top-right-radius:5px ;
} */
div.color{
  background-color:rgba(13,110,253,0.5);
}
/* .bx{
  font-size: 20px;
} */
</style>

<body>

<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-light primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>

  <!-- <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(0,0,0,0);">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false">
      <span class="">=</span>
    </button>
    <div class="collapse navbar-collapse" style="background-color: black;" id="navbar">
      <ul class="navbar-nav ms-auto">
      <li class="nav-link"><button class="aa bx bx-menu bg-dark text-light btns w-100"></button></li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <a class="nav-link me-2 disabled link-light" href="#">Disabled</a>
        <a class="nav-link me-2 link-light" href="">BACK</a>
      </ul>
      <div class="navbar-nav">
      </div>
    </div>
  </nav> -->

<!-- sidebar -->
<div class="d-flex" style="height: 100%; width: 100%;">
  <div style="height: 100%; width: 16%;">
    <div class="size-btn color-my">
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item"><button class="px-auto btn bx bx-menu nav-link text-dark px-4 btns w-100" style="font-size: 20px;"></button></li>
      </ul>
    </div>
    <div class="h-100 color size side close">
      <div class="text-center h-100" id="">
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item"><a class=" aa display-none off nav-link" href="<?php echo site_url('masyarakat/pengaduan') ?>"> Report Contents</a></li>
          <li class="nav-item"><a class=" bx bx-cog aa display-none off nav-link" href="<?php echo site_url('masyarakat/settings') ?>"> Settings</a></li>
          <li class="nav-item"><a class=" aa display-none off nav-link" href="<?php echo site_url('auth_masyarakat/logout') ?>"> Logout</a></li>
          <li class="nav-item my-5 bx bx-user" style="font-size: 20px;"><span> <?= $_SESSION['username'] ?></span></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- table -->
  
  <div class="card bg-light mt-5 mx-2" style="height: 50%; width: 84%;">
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-2 mt-5">
            <h2 class="heading-section">Report Data</h2>
          </div>
        </div>
          <div class="row">
            <div class="col-md-12">
              <div class="table-wrap">
                <table class="table">
                  <thead class="thead-primary">
                  <tr class="text-center">
                    <th>#</th>
                    <th>Date</th>
                    <th>Report</th>
                    <th>Foto</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                    <tbody>
                      <?php foreach ($pengaduan as $data) :?>
                      <tr class="text-center">
                          <th scope="row"><?= $data['id_pengaduan']?></th>
                          <td><?= $data['tgl_pengaduan']?></td>
                          <td><?= $data['isi_laporan']?></td>
                          <td><?= $data['foto']?></td>
                          <td><?= $data['status']?></td>
                      </tr>
                      <?php endforeach;?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
    </section>
  </div>
</div>

  <!-- </div>
  </div>
</div> -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
  <script>
    const body = document.querySelector('body'),
      side = document.querySelector(".side"),
      menuBtns = document.querySelector(".btns");
      menuBtns.addEventListener("click", () => {
        // menuBtn.addEventListener("click", () => {
          side.classList.toggle("close");
          
              // const body = document.querySelector('body'),
              //       sidebar = body.querySelector('nav'),
              //       toggle = body.querySelector(".toggle"),
              //       //   searchBtn = body.querySelector(".search-box"),
              //       modeSwitch = body.querySelector(".toggle-switch"),
              //       modeText = body.querySelector(".mode-text");
          
          
              //   toggle.addEventListener("click", () => {
              //       sidebar.classList.toggle("close");
              //   })
          


    });
    // });
  </script>