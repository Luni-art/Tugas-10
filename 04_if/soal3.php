<!DOCTYPE html>
<html>
<head>
    <title>Hitung Upah Berdasarkan Golongan</title>
</head>
<body>
    <h2>Hitung Upah Karyawan Berdasarkan Golongan</h2>

    <form method="post">
        <label>Golongan:</label>
        <select name="golongan" required>
            <option value="">-- Pilih Golongan --</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
        <br><br>

        <label>Jumlah Jam Kerja per Minggu:</label>
        <input type="number" name="jam" required>
        <br><br>

        <input type="submit" value="Hitung Upah">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $golongan = $_POST['golongan'];
        $jam = $_POST['jam'];
        $upah_lembur = 3000;

        // Menentukan upah per jam berdasarkan golongan
        switch ($golongan) {
            case "A": $upah_per_jam = 4000; break;
            case "B": $upah_per_jam = 5000; break;
            case "C": $upah_per_jam = 6000; break;
            case "D": $upah_per_jam = 7500; break;
            default: $upah_per_jam = 0; break;
        }

        // Hitung total upah
        if ($jam <= 48) {
            $total_upah = $jam * $upah_per_jam;
        } else {
            $lembur = $jam - 48;
            $total_upah = (48 * $upah_per_jam) + ($lembur * $upah_lembur);
        }

        echo "<h3>Golongan: $golongan</h3>";
        echo "<h3>Jam Kerja: $jam jam</h3>";
        echo "<h3>Total Upah: Rp " . number_format($total_upah, 0, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>
