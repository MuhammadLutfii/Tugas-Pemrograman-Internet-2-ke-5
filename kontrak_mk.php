<?php
    include 'model.php';
    $model = new Model();
    $index = 1;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	 <title>Data Mahasiswa</title> 
    </head>
<body>
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
        </li>
         <li class="nav-item">
          <a class="nav-link" href="matkul.php">Mata Kuliah</a>
        </li> 
		  <li class="nav-item">
          <a class="nav-link" href="kontrak_mk.php">Kontrak Matakuliah</a>
        </li>
		  </ul>
    </div>
  </div>
      </nav>
    
    <h1>Data Mahasiswa</h1> 
 	 	<a href="create_kontrak_mk.php">Tambah Data Mahasiswa</a> 
 	 	<br> 
 	 	<a href="print_mhs.php" target="_blank">Cetak Data</a> 
 	 	<br><br> 
 	 	<table class="table table-striped table-hover">
  
    <thead class="text-center"> 
                <tr>
                    <th>No.</th>
                    <th>MataKuliah ID</th>
                    <th>Mahasiswa ID</th>
                   
                   
                </tr>
            </thead>
             <tbody class="text-center"> 
                <?php
                    $result = $model->tampil_konrtak_mk();
                    if (!empty($result)) {
                        foreach ($result as $data) : ?>
                <tr>
                    <td><?= $index++ ?></td>
                    <td><?= $data->matakuliah_id ?></>
                    <td><?= $data->mhs_id ?></>
                    
                        
                       
                </tr>
                <?php endforeach;
                    }else { ?>
                <tr>
                    <td colspan="9">Belum Ada Data Pada Tabel Data Matakuliah</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>
</html> 