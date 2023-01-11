<html>
    <head>
        <title>cart</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">
        <h2>Cart</h2>
        <h4>Keranjang Anda Terisi :</h4>
        </div>
        <div class="card-body">
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>ID Buku</th>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
        </tr>

        <?php

        include '../koneksi.php';
        $id_buku = $_GET['id_buku'];
        $data = mysqli_query($koneksi, "select * from buku where id_buku = '$id_buku'");

        foreach ($data as $buku)
            echo "<tr>";
            echo "<td>".$buku['id_buku']."</td>";
            echo "<td>".$buku['id_katalog']."</td>";
            echo "<td>".$buku['judul_buku']."</td>";
            echo "<td>".$buku['pengarang']."</td>";
            echo "<td>".$buku['thn_terbit']."</td>";
            echo "<td>".$buku['penerbit']."</td>";
        ?>
        </table>
        </div>
        </div>
        </div>
        </div>
    </div>
    </body>
</html>