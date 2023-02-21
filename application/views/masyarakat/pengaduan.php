<!DOCTYPE html>
<html lang="en" style="height: 100vh;">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <title>Complaint</title>
</head>
<style>
  @media screen and (max-width : 500px) {
    .size {
      width: 100%;
    }
  }

  @media screen and (min-width : 500px) {
    .size {
      width: 500px;
    }
  }

  @media screen and (max-height : 700px) {
    .size {
      height: 100%;
    }

    .margin {
      margin: 0px;
    }

    .padding {
      padding-bottom: 0px;
    }

    .textarea {
      height: 150px;
      margin-bottom: 5px;
    }
  }

  @media screen and (min-height : 700px) {
    .textarea {
      height: 100%;
      margin-bottom: 5px;
    }
  }
</style>

<body>
  <!-- <div class="underline-title"></div> -->
  <div class="d-flex form-floating" id="card">
    <div class="mx-auto" id="card-content">
      <div class="card size bg-light shadow-sm px-5" style="position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);">
        <div class="card-header bg-light mt-1 px-100">
          <div class="text-center" id="card-title">
            <h2>Complaint</h2>
          </div>
        </div>
        <div class="card-body padding">
          <form action="<?php echo site_url('auth_masyarakat/pengaduan') ?>" method="post" enctype="multipart/form-data" class="form">
            <div class="text-center">
              <!-- <input type="text" class="form-control"> -->
              <span>Your Nik</span>
              <div class="rounded" style="border:#dee2e6 solid 1px;background-color:#fff;">
                <?= $_SESSION['nik'] ?>
              </div>
              <!-- <label for="floatingInput"></label> -->
            </div>

            <div class="form-group text-center">
              <label for="comment">Complaint</label>
              <textarea class="textarea form-control" name="isi_laporan" rows="10" id="comment" type="text"></textarea>
              <!-- <textarea class="form-control" rows="10" id="comment"></textarea> -->
            </div>
            <!-- <div class="form-floating input-group mb-5">
          <div class="input-group-prepend">
            <input type="text" class="form-control input-group-text" style="padding-bottom: 200px;" id="floatingPassword" placeholder="complaint">
            <textarea class="form-control" aria-label="With textarea"></textarea>
          </div>
          </div> -->


            <div class="">
              <!-- <label for="formFile" class="form-label">Default file input example</label> -->
              <input class="form-control" name="foto" type="file" id="formFile">
            </div>

            <!-- <div class="mb-3">
            <input type="text" class="form-control" id="auto_date">
            <label id="auto_date"></label>
            <label for="floatingInput">Date</label>
          </div> -->

            <div class="text-center margin mb-3">
              <input type="text" id="auto_date" readonly value="" name="tgl_pengaduan" class="form-control text-center">
              <!-- <option name="tgl_pengaduan" value="1" id="auto_date"></option> -->
              <!-- <div class="rounded" style="border:#dee2e6 solid 1px;background-color:#fff;"> -->
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
              <a onclick="return confirm('Ingin Keluar?')" href="<?= base_url('masyarakat/laporan') ?>" id="back"> Back</a></p>
            </div>
          </center>
        </div>

        </form>
      </div>
    </div>
  </div>
  </div>

</body>

</html>
<script>
  var date = new Date();
  var current_date = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();
  document.getElementById("auto_date").value = current_date;
</script>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>