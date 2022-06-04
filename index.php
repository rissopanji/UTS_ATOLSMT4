<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <style>
    .mx-auto {
      width: 800px
    }

    .card {
      margin-top: 10px;
    }
  </style>
</head>

<body>

  <?php

  $data = isset($_POST['data']) ? json_decode($_POST['data'], true) : [];
  if (isset($_POST['submit'])) {
    $data[] = [
      'nim' => $_POST['nim'],
      'nama' => $_POST['nama'],
      'nilai' => $_POST['nilai'],
    ];
  } ;


  

  ?>
  <div class="mx-auto">
    <!-- untuk memasukkan data -->
    <div class="card">
      <div class="card-header">
        <b>MASUKAN DATA</b>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <input type="hidden" name="data" value='<?= json_encode($data) ?>'>
          <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nim" name="nim">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">NILAI</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nilai" name="nilai">
            </div>
          </div>
          <div class="col-3">
            <input type="submit" name="submit" value="Tambah" class="btn btn-primary" />
          </div>
        </form>
      </div>
    </div>

    <!-- Data sebelum di sort -->
    <div class="card">
      <div class="card-header text-white bg-secondary">
        Data Mahasiswa Sebelum Di Urutkan
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">NIM</th>
              <th scope="col">Nama</th>
              <th scope="col">Nilai</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $value) { ?>
              <tr>
                <td><?= $value['nim'] ?></td>
                <td><?= $value['nama'] ?></td>
                <td><?= $value['nilai'] ?></td>
              </tr>
            <?php } ?>
          </tbody>

        </table>
      </div>
    </div>
    
  

  </div>
</body>

</html>