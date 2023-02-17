<!DOCTYPE html>
<html lang="en" style="height: 100vh;">

<head style="height:100vh;">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <ti  tle>Document</title> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
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

  .size.side.close {
    width: 200px;
    transition: 0.5s;
  }

  .size.side {
    width: 100px;
    transition: 0.5s;
  }
</style>

<body class="h-100 m-0">
  <!-- <p>
  <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample"></button>
</p> -->
  <!-- <div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body bg-dark" style="height:91vh; width: 45vh;"> -->
  <div class="size side close">
    <div class="border text-center h-100" id="" style="background-color: rgba(0,0,0,0.10);">
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item border"><button class="aa px-auto bx bx-menu nav-link text-dark px-4 btns w-100"></button></li>
        <li class="nav-item border"><a class="aa nav-link" href="">hai</a></li>
        <li class="nav-item border"><a class="aa nav-link" href="<?php echo site_url('masyarakat/pengaduan') ?>">Report Contents</a></li>
        <li class="nav-item border"><a class="aa nav-link" href="">hai</a></li>
        <li class="nav-item border"><a class="aa nav-link" href="<?php echo site_url('masyarakat/settings') ?>">Settings</a></li>
        <li class="nav-item border"><a class="aa nav-link" href="<?php echo site_url('auth/logout') ?>">Logout</a></li>
      </ul>
    </div>
  </div>
  <!-- </div>
  </div>
</div> -->
  <script>
    const body = document.querySelector('body'),
      side = document.querySelector(".side"),
      menuBtns = document.querySelector(".btns");

    // const body = document.querySelector('body'),
    //       sidebar = body.querySelector('nav'),
    //       toggle = body.querySelector(".toggle"),
    //       //   searchBtn = body.querySelector(".search-box"),
    //       modeSwitch = body.querySelector(".toggle-switch"),
    //       modeText = body.querySelector(".mode-text");


    //   toggle.addEventListener("click", () => {
    //       sidebar.classList.toggle("close");
    //   })

    menuBtns.addEventListener("click", () => {
      // menuBtn.addEventListener("click", () => {
      side.classList.toggle("close");


    });
    // });
  </script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>