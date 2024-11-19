<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Uas Sidik</title>
  </head>
  <body>

    <center>
    <img src="images-removebg-preview.png" alt="" style="width: 180px;" >
    <h3>PENGGAJIHAN <br> GURU/KARYAWAN YAYASAN ASSLAAM</h3   >
   
    
<div class="card text-dark bg-light mb-3" style="width: 50%; ">
  <div class="card-header">
    Data Penggajihan
  </div>
  <div class="card-body">
    <form action="uas_sidik_2.php" method="post">
  <div class="mb-3">
    <label class="form-label" style="margin-right: 600px;">No :</label>
    <input type="number" name="no" class="form-control" id="">
  </div>
  <div class="mb-3">
    <label class="form-label" style="margin-right: 580px;">Nama :</label>
    <input type="text" name="nama" class="form-control" id="">
  </div>
  <div class="mb-3">
    <label class="form-label" style="margin-right: 520px;">Unit Pendidikan :</label>
    <select name="unit" id="" class="form-select">
    <option selected>Pilih Unit Pendidikan</option>
    <option value="SD">SD</option>
    <option value="SMP">SMP</option>
    <option value="SMA">SMA</option>
    <option value="SMK">SMK</option>
    <option value="TPQ">MA</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label" style="margin-right: 540px;">Tanggal Gaji :</label>
    <input type="date" name="tanggal" class="form-control" id="">
  </div>
  <div>
    <table style="width: 100%;">
        <tr align="center">
            <td style="width: 50%;"><h3>Gaji</h3></td>
            <td><h3>Potongan</h3></td>
        </tr>
        <tr>
            <td>Jabatan :</td>
            <td>BPJS :</td>
        </tr>
        <tr>
            <td>
                <select name="jabatan" class="form-select" id="">
                    <option selected>Pilih Jabatan</option>
                    <option value="kepala sekolah">Kepala Sekolah</option>
                    <option value="wakasek">Wakasek</option>
                    <option value="guru">Guru</option>
                    <option value="karyawan">Karyawan</option>
                </select>
            </td>
            <td><input type="number" name="bpjs" class="form-control" placeholder="BPJS" id=""></td>
        </tr>
        <tr>
            <td>Lama Kerja :</td>
            <td>Pinjaman</td>
        </tr>
        <tr>
            <td><input type="number" name="lamakerja" class="form-control" placeholder="Lama kerja" id=""></td>
            <td><input type="number" name="pinjaman" class="form-control" placeholder="Pinjaman"id=""></td>
        </tr>
        <tr>
            <td>Status Kerja :</td>
            <td>Cicilan :</td>
        </tr>
        <tr>
            <td>
            <select name="status" class="form-select" id="">
                    <option selected>Pilih Status Kerja</option>
                    <option value="tetap">Tetap</option>
                    <option value="kontrak">Kontrak</option>
            </select>
            </td>
            <td><input type="number" name="cicilan" class="form-control" placeholder="Cicilan" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td>Infaq :</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="number" name="infaq" class="form-control" placeholder="Infaq" id=""></td>
        </tr>
        <tr align="center">
            <td colspan="2"> <button type="submit" class="btn btn-primary" name="submit">Submit</button></td>
            <td></td>
        </tr>
    </table>
  </div>
</form>
  </div>
</div>
</center>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

