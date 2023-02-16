<!DOCTYPE html>
<html style="height: 100vh;">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="<?= base_url('css/login.css')?>" rel="stylesheet">
  <title>Login</title>
</head>
<?php
$info = $this->session->flashdata('info');
if(!empty($info)){
  echo "<script>alert('$info')</script>";
}
?>
<body>
  <div class="d-flex h-100" id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
        <form action="<?php echo site_url('auth/login')?>" method="post" class="form">

        <label for="user-username" style="padding-top:13px">&nbsp;Username</label>
        <input id="user-username" class="form-content" type="username" name="username" autocomplete="on" required />
        <div class="form-border"></div>

        <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>

        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
        <p id="signup"><a href="<?= base_url('index.php/masyarakat/register')?>" id="signup">Don't have account yet /</a><a onclick="return confirm('Ingin Keluar?')" href="<?= base_url('')?>" id="back"> Back</a></p>
        
      </form>
    </div>
  </div>
</body>
</html>