<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
        <center> <h3>Halaman Admin</h3> </center>

        <!-- Cek halaman apakah sudah Login atau Belum -->
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:../login_admin.php?pesan=belum_login');
        }

        include '../koneksi.php';
        // Ambil data semua table Buku
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");

        // Jumlahkan Data yang ada di Table
        $jumlah_buku = mysqli_num_rows($buku);
        $jumlah_anggota = mysqli_num_rows($anggota);

        ?>

        <!-- END -->
        <center> <h4>Welcome <?php echo $_SESSION['admin']?> anda telah Login</h4> </center>

        <!-- Data Buku -->
        <body>
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <marquee direction="right"><h2>BUKU YANG TERSEDIA</h2></marquee>
            <div class="card-body">
            <marquee direction="left"><h4> TOTAL BUKU TERSEDIA : <?php echo $jumlah_buku ?></h4></marquee>
            <!-- menampilkan data buku -->
        <a href="add.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
        <a href="../logout.php" class="btn btn-danger" style="margin-bottom: 10px">LOGOUT</a>
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>ID Buku</th>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Aksi</th>
        </tr>

        <!-- menampilkan data buku -->
        <?php 
        include '../koneksi.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id_buku = $row['id_buku']."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            ?>
            <td> 
            <a href="update.php?id_buku=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-primary">UPDATE</a>  
            <a href="proses-delete.php?id_buku=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
            </td>
            <?php 
            echo "</tr>";
        }
        ?>
        
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>

            <hr>

        <!-- Data Anggota -->
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-12">
        <div class="card">
        <div class="header">
            <marquee direction="right"><h2>DATA ANGGOTA YANG TERSEDIA</h2></marquee>
        </div>
        <div class="card-body">
        <marquee direction="left"><h4> TOTAL ANGGOTA TERSEDIA : <?php echo $jumlah_anggota ?></h4></marquee>
        <!-- menampilkan data buku -->
        <a href="add_anggota.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH ANGGOTA</a>
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>No. Telepon</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        <!-- menampilkan data buku -->
        <?php 
        include '../koneksi_buku.php';
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
        foreach ($anggota as $rou){
            echo "<tr>";
            echo "<td>". $id_anggota = $rou['id_anggota']."</td>";
            echo "<td>". $nama = $rou['nama']."</td>";
            echo "<td>". $no_telp = $rou['no_telp']."</td>";
            echo "<td>". $alamat = $rou['alamat']."</td>";
            echo "<td>". $email = $rou['email']."</td>";
            echo "<td>". $password = $rou['password']."</td>";
            ?>
            <td> 
            <a href="update.php?id_buku=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-primary">UPDATE</a>  
            <a href="proses-delete.php?id_buku=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
            </td>
            <?php 
            echo "</tr>";
        }
        ?>
        
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>

        </body>
</html>