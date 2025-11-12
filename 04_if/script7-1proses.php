<html>
<head>
    <title>Mencari Bilangan Terbesar dari 3 Bilangan</title>
</head>
<body>
    <h1>Mencari Bilangan Terbesar dari 3 Bilangan</h1>

    <?php
    $bilangan1 = $_POST['bil1']; // membaca input bilangan pertama
    $bilangan2 = $_POST['bil2']; // membaca input bilangan kedua
    $bilangan3 = $_POST['bil3']; // membaca input bilangan ketiga

    // cara ke - 1
    // idenya adalah mencari bilangan x yang terbesar dari bil 1 dan bil2. lalu x dibandingkan dengan
    // bilangan ke-3. Jika x > dari bil 3, maka x adalah max dari semua bilangan. Jika tidak, maka bil 3 sbg max nya

    echo "<h3>Cara ke-1: Menggunakan Variabel Sementara</h3>";
    if ($bilangan1 > $bilangan2) {
        $maxSementara = $bilangan1;
    } else {
        $maxSementara = $bilangan2;
    }
    if ($bilangan3 > $maxSementara) {
        $maxAkhir = $bilangan3;
    } else {
        $maxAkhir = $maxSementara;
    }

    echo "<p>Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah: ".$maxAkhir.".</p>";
    
    // cara ke - 2
    // idenya adalah langsung membandingkan masing-masing bilangan dengan bilangan yang lain.
    // misal: jika bil 1 > bil2 dan bil 1 > bil 3, maka max adalah bil 1.

    echo "<h3>Cara ke-2: Perbandingan Langsung dengan if-elseif-else</h3>";
    if (($bilangan1 > $bilangan2) && ($bilangan1 > $bilangan3)) {
        $maxAkhir = $bilangan1;
    } elseif (($bilangan2 > $bilangan1) && ($bilangan2 > $bilangan3)) {
        $maxAkhir = $bilangan2;
    } else {
        // Asumsi: jika bil 1 bukan yang terbesar dan bil 2 bukan yang terbesar,
        // maka bil 3 adalah yang terbesar (atau salah satu dari bil yang sama besarnya)
        $maxAkhir = $bilangan3;
    }
    
    echo "<p>Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah: ".$maxAkhir.".</p>";

    // cara ke - 3
    // idenya hampir sama dengan cara ke-1, tapi tidak dengan mencari max sementara.
    
    echo "<h3>Cara ke-3: Pengujian Bertingkat (Nested if)</h3>";
    if ($bilangan1 > $bilangan2) {
        if ($bilangan1 > $bilangan3) {
            $maxAkhir = $bilangan1;
        } else {
            $maxAkhir = $bilangan3;
        }
    } else {
        if ($bilangan2 > $bilangan3) {
            $maxAkhir = $bilangan2;
        } else {
            $maxAkhir = $bilangan3;
        }
    }

    echo "<p>Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah: ".$maxAkhir.".</p>";
?>
</body>
</html>