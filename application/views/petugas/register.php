<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <title>Registration</title>
</head>
<style>
  *{
    margin: 0;
    padding: 0;
  }
  html{
    height: 100vh;
  }
  body{
    height: auto;
    width: auto;
    background: -webkit-linear-gradient(bottom, #ffffff, #a6f77b);
    background-repeat: no-repeat;
  }
  .border{
    border: white;
    border-radius: 10PX;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  }
  a{
    text-decoration: none;
    color:#2dbd6e;
  }
  @media screen and (max-width : 750px){
    div.width{
      width: 100%;
    }
  }
  button{
    border: white 1px;
    border-radius: 25px;
    color: white;
    height: 50px;
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    box-shadow: 0px 1px 8px #24c64f;
  }
  .form-border{
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
	height: 1px;
	width: 100%;
  }
  .form-content{
  background: #f8f9fa;
	border: none;
	outline: none;
	padding-top: 14px;
	padding: 10px;
	padding-left: 2px;
	padding-right: 2px;
  }
.underline-title {
	background: -webkit-linear-gradient(bottom, #a6f77b, #2ec06f);
  border-radius: 5px;
	height: 5px;
	margin: -1.1rem auto 0 auto;
	width: 40%;
}
.form-border-underline {
	background: -webkit-linear-gradient(bottom, #a6f77b, #2ec06f);
	height: 3px;
  border-radius: 5px;
	width: 100%;
}
.form-border-name {
	background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
	height: 3px;
  border-radius: 5px;
	width: 100%;
}
.form-border-username {
	background: -webkit-linear-gradient(left, #a6f77b, #2ec06f);
	height: 3px;
  border-radius: 5px;
	width: 100%;
}
.font{
  font-family: Arial, Helvetica, sans-serif;
}
</style>
<body class="d-flex justify-content-center">
  <div class="border bg-light width width-auto" style="position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);">
  
      <div class="h-auto h2 w-100 text-center h1 my-2 mt-3 mb-3">
        REGISTRATION
      </div>
      <center>
        <div class="underline-title"></div>
      </center>

    <div class="h-50 text-center mx-auto mt-5 justify-content-center" style="width: 75%;">
      <form action="<?php echo site_url('auth_petugas/register')?>" method="post">

      <div class="row">

        <!-- <div class="col-lg-12">
          <div class="mb-2">
            <label for="" class="font">Nik</label>
            <input type="number" class="form-border form-content font" name="nik" id="inputNik" size="5" required>
            <center>
              <div class="form-border-underline"></div>
            </center>
          </div>
        </div> -->

        <div class="col-lg-12 mb-2">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <label for="" class="font mt-4">Name</label>
              <input type="text" class="form-border form-content font" name="nama" id="inputNama" size="5" required>
              <center>
                <div class="form-border-name"></div>
              </center>
            </div>
  
            <div class="col-lg-6 col-md-12">
              <label for="" class="font mt-4">Username</label>
              <input type="text" class="form-border form-content font" name="username" id="inputUsername" size="5" required>
              <center>
                <div class="form-border-username"></div>
              </center>
            </div>
          </div>
        </div>
<center>
  <div style="width: 65%;">
    <div class="col-lg-12">
      <div class="mb-2">
        <label for="" class="font mt-4">Password</label>
        <input type="password" class="form-border form-content font" name="password" id="inputPassword" size="5" required>
        <center>
          <div class="form-border-underline"></div>
        </center>
      </div>
    </div>

    <div class="col-lg-12 mb-5">
      <div class="mb-2">
        <label for="" class="font mt-4">No Telephon</label>
        <input type="number" class="form-border form-content font" name="telp" id="inputTelp" size="5" required>
        <center>
          <div class="form-border-underline"></div>
        </center>
      </div>
    </div>
  </div>
</center>

        <div class="col-lg-12 mb-2 font">
          <div class="col-lg-6 mx-auto">
            <button class="w-100" id="submit-btn" type="submit" name="submit" value="SAVE">SAVE</button>
          </div>
          <div class="col-lg-12 mt-3">
            <p id="signup"><a href="<?= base_url('petugas/login')?>" id="signup">Have Account /</a><a onclick="return confirm('Ingin Keluar?')" href="<?= base_url('')?>" id="back"> Back</a></p>
          </div>
        </div>
      </div>
        

      </form>
    </div>
  </div>
</body>
</html>

<!-- <!DOCTYPE html>
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
          <form action="<?php echo site_url('auth_masyarakat/register')?>" method="post" class="form">
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
              <p id="signup"><a href="<?= base_url('masyarakat/login')?>" id="signup">Have Account /</a><a onclick="return confirm('Ingin Keluar?')" href="<?= base_url('')?>" id="back"> Back</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html> -->

<!-- <!DOCTYPE html>
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
          <form action="<?php echo site_url('auth_petugas/register')?>" method="post" class="form">

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
              <input id="user-nama" class="form-content" type="name" name="nama_petugas" required />
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
              <p id="signup"><a href="<?= base_url('petugas/login')?>" id="signup">Have Account /</a><a onclick="return confirm('Ingin Keluar?')" href="<?= base_url('')?>" id="back"> Back</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html> -->