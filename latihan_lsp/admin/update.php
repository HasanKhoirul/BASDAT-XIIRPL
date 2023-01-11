<html>
    <head>
        <title>Update Data</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
            <h3>MERUBAH DATA BUKU</h3>
            </div>

            <!-- Metode Get Untuk mengambil ID Buku-->
            <?php
            include '../koneksi_buku.php';
            $id_buku = $_GET ['id_buku'];
            $data = mysqli_query($koneksi, "select * from buku where id_buku = '$id_buku'");
            // Data yang sudah di cocokan denga id_buku, di MELEDAK menggunakan fect array ssehingga bisa di taruh satu kelas di Form
            while($meledak = mysqli_fetch_array($data)){
            ?>

            <div class="card-body">
            <form action="proses-update.php" method="post">
                <!-- ID Buku -->
                <input type="hidden" name="id_buku" value="<?php echo $meledak ['id_buku']; ?>">

            <!-- Form -->
            <div class="form-group">
                <label>Masukan Id Katalog</label>
                <input type="number" name="id_katalog" placeholder="Masukkan ID Katalog" 
                class="form-control" value="<?php echo $meledak ['id_katalog']; ?>">
            </div>

            <div class="form-group">
                <label>Masukan Judul Buku</label>
                <input type="text" name="judul_buku" placeholder="Masukkan Judul Buku" 
                class="form-control" value="<?php echo $meledak ['judul_buku']; ?>">
            </div>
            
            <div class="form-group">
                <label>Masukan pengarang</label>
                <input type="text" name="pengarang" placeholder="Masukkan Nama Pengarang" 
                class="form-control" value="<?php echo $meledak ['pengarang']; ?>">
            </div>
            
            <div class="form-group">
                <label>Masukan Tahun Terbit</label>
                <input type="date" name="thn_terbit" placeholder="Masukkan Tahun Terbit" 
                class="form-control" value="<?php echo $meledak ['thn_terbit']; ?>">
            </div>
            
            <div class="form-group">
                <label>Masukan penerbit</label>
                <input type="text" name="penerbit" placeholder="Masukkan Penerbit" 
                class="form-control" value="<?php echo $meledak ['penerbit']; ?>">
            </div>

            <div class="form-group">
                <label>Masukan Harga</label>
                <input type="text" name="harga" placeholder="Masukkan Penerbit" 
                class="form-control" value="<?php echo $meledak ['harga']; ?>">
            </div>
            
            <button type="submit" class="btn btn-success">GASS</button>
            <button type="reset" class="btn btn-warning">LOM</button>
            <a href="../admin/index.php" class="btn btn-danger">KEMBALI</a>
            
            </form>
            <?php
            }
            ?>
            </div>
        </div>
        </div>
        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>