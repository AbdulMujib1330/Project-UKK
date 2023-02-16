<!DOCTYPE html>
<html style="height: 100vh;">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link href="<?= base_url('css/register.css')?>" rel="stylesheet">
  <title>Register</title>
</head>

<body class="d-flex h-100">
  <div class="my-auto mx-auto" id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>SIGN-UP</h2>
        <div class="underline-title"></div>
      </div>
      <div class="margin container">
        <div class="row">
          <form action="<?php echo site_url('auth/register')?>" method="post" class="form">
          <div class="col-sm">
            <div>
              <label for="user-nik" style="padding-top:22px">&nbsp;Nik</label>
              <input id="user-nik" size="50" class="form-content" type="number" name="nik" required />
              <div class="form-border"></div>
            </div>
          </div>

          <div class="col-sm">
            <div class="col-sm">
              <label for="user-nama" style="padding-top:22px">&nbsp;Name</label>
              <input id="user-nama" class="form-content" type="name" name="nama" required />
              <div class="form-border"></div>
            </div>
            
            
            <div class="col-sm">
              <label for="user-username" style="padding-top:13px">&nbsp;Username</label>
              <input id="user-username" class="form-content" type="text" name="username" required />
              <div class="form-border"></div>
            </div>
          </div>

          <div class="col-sm">
            <div>
              <div class="col-sm">
                <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                <input id="user-password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>
              </div>
              
              <div class="col-sm">
                <label for="user-no_telephon" style="padding-top:22px">&nbsp;No Telephon</label>
                <input id="user-no_telephon" class="form-content" type="number" name="telp" required />
                <div class="form-border"></div>
              </div>
            </div>
          </div>

            <div style="display: grid;">
              <input id="submit-btn" type="submit" name="submit" value="SAVE" />
              <p id="signup"><a href="<?= base_url('index.php/masyarakat/login')?>" id="signup">Have Account /</a><a onclick="return confirm('Ingin Keluar?')" href="<?= base_url('')?>" id="back"> Back</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>