<html>
    <head>
        <title>Kalkulator Biasa</title>
    </head>
    <body>
        <form> <!-- Bersifat GET secara Default tanpa harus method -->
            <input type="number" name="angka1">
            <select name="operator">
                <option selected disabled>pilih operator</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/<option>
            </select>
            <input type="number" name="angka2">
            <div style="margin-top:  10px;">
                <button type="reset">Clear</button>
                <button type="submit">Hitung</button>
            </div>
            <!-- logika Kalkulator Biasa -->
            <?php 
            if ($_GET):
                $angka1 = (double) @$_GET ['angka1'];
                $angka2 = (double) @$_GET['angka2'];
                $operator = @$_GET['operator'];
                // Buat Logika untuk penjumlahan
                switch ($operator) {
                    case '+':
                    $hasil = $angka1 + $angka2;
                    break;
                    case '-':
                    $hasil = $angka1 - $angka2;
                    break;
                    case '*':
                    $hasil = $angka1 * $angka2;
                    break;
                    case '/':
                    $hasil = $angka1 / $angka2;
                    break;
                }
            ?>
            <div style="margin-top:10px;">
                HASIL : <strong><?php echo $hasil; ?></strong>
            </div>
            <?php
            endif; ?>
            <!-- End Logika -->
        </form>
    </body>
</html>