<!DOCTYPE html>
<html>
<head>
    <title>Jumlah Hari dalam Bulan</title>
</head>
<body>
    <h2>Menentukan Jumlah Hari dalam Bulan Saat Ini</h2>

    <?php
    $bulan = date('n'); // Ambil bulan sekarang (1–12)
    $tahun = date('Y'); // Ambil tahun sekarang

    switch ($bulan) {
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            $hari = 31;
            break;
        case 4: case 6: case 9: case 11:
            $hari = 30;
            break;
        case 2:
            // Februari → cek tahun kabisat
            if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
                $hari = 29;
            } else {
                $hari = 28;
            }
            break;
        default:
            $hari = "Tidak valid";
    }

    // Tampilkan hasil
    $nama_bulan = date('F'); // Nama bulan dalam bahasa Inggris
    echo "<h3>Bulan Sekarang: $nama_bulan ($bulan)</h3>";
    echo "<h3>Tahun: $tahun</h3>";
    echo "<h3>Jumlah Hari: $hari hari</h3>";
    ?>
</body>
</html>
