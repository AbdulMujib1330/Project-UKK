  <style>
    html,
    body {
      height: 100vh;
    }

    a {
      text-decoration: none !important;
    }

    body {
      background: -webkit-linear-gradient(bottom, rgb(255, 255, 255), rgb(255, 255, 255));
      background-repeat: no-repeat;
    }
  </style>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(0,0,0,0.10);">
    <h6 class="navbar-brand"><?= $_SESSION['username'] ?></h6>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false">
      <span></span>
    </button>
    <div class="collapse navbar-collapse" style="background-color: black;" id="navbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <a class="nav-link me-2 disabled link-light" href="#">Disabled</a>
        <a class="nav-link me-2 link-light" href="<?php echo site_url('auth/logout') ?>">BACK</a>
      </ul>
      <!-- <div class="navbar-nav">
      </div> -->
    </div>
  </nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
