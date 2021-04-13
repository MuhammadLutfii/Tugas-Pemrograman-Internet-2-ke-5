<html>
    <head>
        <title>TAMBAH DATA MATAKULIAH</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous">
    </head>
<Body>
        <div class="container">
	 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Pemograman Internet 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="mahasiswa.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="absen.php">Absen</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Nilai</a>
        <li class="nav-item">
          <a class="nav-link" href="matkul.php">Mata Kuliah</a>
        </li>
		</li>
          </ul>
    </div>
  </div>
</nav>
    <div class="container-fluid">
    <h1>Tambah</h1>
    <a href="matkul.php">Kembali</a>
    <br><br>
        <form action="proses.php" method="post">
        <div class="col-3">
            <div class="mb-3">
                <label class="form=label">NAMA MATAKULIAH</label>
                <input type="text" name="nama" class="form-control">
            </div>

            <button type="submit" name="submit_matkul" class="btn btn-success">SUBMIT</button>
            <button type="reset" class="btn btn-danger">CANCEL</button>
        </div>
        </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</Body>
</html>