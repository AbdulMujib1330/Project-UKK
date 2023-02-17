<!DOCTYPE html>
<html lang="en" style="height: 100vh;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<body>
  <!-- <div class="underline-title"></div> -->
  <div class="d-flex h-100 form-floating" id="card">
    <div class="mx-auto" id="card-content">
      <div class="card bg-light shadow-sm px-5" style="position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);">
      <div class="card-header bg-light px-100">
        <div class="text-center" id="card-title">
          <h2>Report</h2>
        </div>
      </div>
      <div class="card-body">
        <form action="<?php echo site_url('auth/login')?>" method="post" class="form">

          <div class="text-center">
            <!-- <input type="text" class="form-control"> -->
            <span>Your Nik</span>
            <div class="rounded" style="border:#dee2e6 solid 1px;background-color:#fff;">
              <?= $_SESSION['nik'] ?>
            </div>
            <!-- <label for="floatingInput"></label> -->
          </div>
          
          <div class="form-floating mb-5">
            <input type="text" class="form-control" style="padding-bottom: 200px;" id="floatingPassword" placeholder="complaint">
            <label for="floatingcomplaint">Complaint</label>
          </div>

          <div class="">
            <!-- <label for="formFile" class="form-label">Default file input example</label> -->
            <input class="form-control" type="file" id="formFile">
          </div>

          <!-- <div class="mb-3">
            <input type="text" class="form-control" id="auto_date">
            <label id="auto_date"></label>
            <label for="floatingInput">Date</label>
          </div> -->

          <div class="text-center mb-3">
            <!-- <input type="text" class="form-control"> -->
            <div class="rounded" style="border:#dee2e6 solid 1px;background-color:#fff;" id="auto_date">
            </div>
            <!-- <label for="floatingInput"></label> -->
          </div>

          <div class="row">
            <center>
              <div class="col-lg-12 mx-auto">
                <button class="btn btn-primary px-5">Send</button>
              </div>
            </center>
            <center>
              <div class="col-lg-12 mx-auto">
                <a onclick="return confirm('Ingin Keluar?')" href="<?= base_url('masyarakat/laporan')?>" id="back"> Back</a></p>
              </div>
            </center>
          </div>
                  
      </form>
      </div>
      </div>
    </div>
  </div>
  
</body>
</body>
</html>
<script>
	var date = new Date();
	var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate();
	document.getElementById("auto_date").innerHTML = current_date;
</script>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>