<?php
// index.php
// Menangani form submit dan menentukan tahun kabisat

$result = '';
$year_input = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil input, bersihkan dan konversi ke integer
    $year_input = trim($_POST['tahun'] ?? '');
    if ($year_input === '') {
        $result = 'Masukkan tahun terlebih dahulu.';
    } elseif (!preg_match('/^-?\d+$/', $year_input)) {
        $result = 'Input tidak valid. Masukkan angka bulat untuk tahun.';
    } else {
        $year = (int) $year_input;
        // Aturan tahun kabisat:
        // - Jika bisa dibagi 400 => kabisat
        // - Jika bisa dibagi 100 => bukan kabisat (kecuali di atas)
        // - Jika bisa dibagi 4 => kabisat
        // - Selain itu bukan kabisat
        if ($year % 400 === 0) {
            $result = "Tahun $year adalah TAHUN KABISAT (divisible by 400).";
        } elseif ($year % 100 === 0) {
            $result = "Tahun $year BUKAN tahun kabisat (habis dibagi 100 tapi tidak 400).";
        } elseif ($year % 4 === 0) {
            $result = "Tahun $year adalah TAHUN KABISAT (habis dibagi 4).";
        } else {
            $result = "Tahun $year BUKAN tahun kabisat.";
        }
    }
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Cek Tahun Kabisat</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial;padding:20px;background:#f7f7f7}
    .card{background:#fff;padding:18px;border-radius:10px;max-width:520px;margin:24px auto;box-shadow:0 6px 18px rgba(0,0,0,0.06)}
    label{display:block;margin-bottom:6px;font-weight:600}
    input[type="text"]{width:100%;padding:8px 10px;border:1px solid #ccc;border-radius:6px;margin-bottom:12px}
    button{padding:8px 14px;border:none;background:#0069d9;color:#fff;border-radius:8px;cursor:pointer}
    .result{margin-top:12px;padding:10px;border-radius:6px;background:#eef9ff;border:1px solid #cfeffd}
    .error{background:#fff3f3;border:1px solid #f1c0c0}
  </style>
</head>
<body>
  <div class="card">
    <h2>Form Cek Tahun Kabisat</h2>
    <form method="post" action="">
      <label for="tahun">Masukkan Tahun (contoh: 2024)</label>
      <input id="tahun" name="tahun" type="text" value="<?php echo htmlspecialchars($year_input); ?>" placeholder="Masukkan angka tahun">
      <button type="submit">Cek</button>
    </form>

    <?php if ($result !== ''): ?>
      <div class="result <?php echo (stripos($result, 'tidak') !== false || stripos($result, 'tidak valid') !== false || stripos($result, 'Masukkan') === 0) ? 'error' : ''; ?>">
        <?php echo htmlspecialchars($result); ?>
      </div>
    <?php endif; ?>
  </div>
</body>
</html>