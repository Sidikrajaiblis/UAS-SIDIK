<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hasilnya</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){ 
        $no = $_POST['no']; 
        $nama = $_POST['nama']; 
        $unit = $_POST['unit']; 
        $tanggal = $_POST['tanggal']; 
        $jabatan = $_POST['jabatan']; 
        $bpjs = $_POST['bpjs']; 
        $lamakerja = $_POST['lamakerja']; 
        $pinjaman = $_POST['pinjaman']; 
        $status = $_POST['status']; 
        $cicilan  = $_POST['cicilan']; 
        $infaq = $_POST['infaq']; 
    } 

    class Gaji {
        public $gaji_bersih;

        public function gaji_guru($no, $nama, $unit, $tanggal, $jabatan, $lamakerja, $status, $bpjs, $pinjaman, $cicilan, $infaq) {
            echo "<center>";
            echo "<table style='width: 40%; height: 80px;' border='1' class='text-primary'>";
            echo "<tr><td>";
            echo "<table style='width: 40%;height:80px ;' align='center'>";
            echo "<tr class='card-header' align='center'>";
            echo "<td colspan='2'><h4><b>$nama</b></h4></td>";
            echo "<td></td>";
            echo "</tr>";

            echo "<tr><td> No </td><td> : $no </td></tr>"; 
            echo "<tr><td> Nama </td><td> : $nama </td></tr>"; 
            echo "<tr><td> Unit Pendidikan </td><td> : $unit </td></tr>"; 
            echo "<tr><td> Tanggal Gaji </td><td> : $tanggal </td></tr>"; 
            echo "<tr><td> Jabatan </td><td> : $jabatan </td></tr>"; 

            switch($jabatan) {
                case 'kepala sekolah':
                    $gaji = 10000000;
                    break;
                case 'wakasek':
                    $gaji = 7500000;
                    break;
                case 'guru':
                    $gaji = 5000000;
                    break;
                case 'karyawan':
                    $gaji = 2500000;
                    break;
                default:
                    $gaji = 0;
            }

            echo "<tr><td> Gaji </td><td> : $gaji </td></tr>";
            echo "<tr><td> Lama Kerja </td><td> : $lamakerja </td></tr>"; 
            echo "<tr><td> Status Kerja </td><td> : $status </td></tr>"; 

            if ($status == "tetap") {
                $bonus = 500000;
            } else {
                $bonus = 0;
            }
            echo "<tr><td> Bonus </td><td> : $bonus </td></tr>"; 

            echo "<tr><td> BPJS </td><td> : $bpjs </td></tr>";
            echo "<tr><td> Pinjaman </td><td> : $pinjaman </td></tr>";
            echo "<tr><td> Cicilan </td><td> : $cicilan </td></tr>";
            echo "<tr><td> Infaq </td><td> : $infaq </td></tr>";

            $gaji_bersih = ($gaji + $bonus) - ($bpjs + $pinjaman + $cicilan + $infaq);
            echo "<tr><td> Gaji Bersih </td><td> : $gaji_bersih </td></tr>";
            echo "</table>";
            echo "</td></tr>";
            echo "</table>";
            echo "</center>";
        }
    }

    $cetak = new Gaji();
    $cetak->gaji_guru($no, $nama, $unit, $tanggal, $jabatan, $lamakerja, $status, $bpjs, $pinjaman, $cicilan, $infaq);
    ?>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
