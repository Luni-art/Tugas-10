<!DOCTYPE html>
<html>
<head>
    <title>Hitung Upah Karyawan</title>
</head>
<body>
    <h2>Hitung Upah Karyawan Honorer</h2>
    <form method="post">
        Masukkan Jumlah Jam Kerja per Minggu: 
        <input type="number" name="jam" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam = $_POST['jam'];
        $upah_normal = 2000;
        $upah_lembur = 3000;

        if ($jam <= 48) {
            $total = $jam * $upah_normal;
        } else {
            $lembur = $jam - 48;
            $total = (48 * $upah_normal) + ($lembur * $upah_lembur);
        }

        echo "<h3>Total upah yang diterima: Rp " . number_format($total, 0, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>
