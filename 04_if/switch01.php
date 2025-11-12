<?php
$angkaBln = date("n");
switch($angkaBln)
{
    case 1 : $nameBln = "Januari";
        break;
    case 2 : $nameBln = "Febuari";
        break;
    case 3 : $nameBln = "Maret";
        break;
    case 4 : $nameBln = "April";
        break;
    case 5 : $nameBln = "Mei";
        break;
    case 6 : $nameBln = "Juni";
        break;
    case 7 : $nameBln = "Juli";
        break;
    case 8 : $nameBln = "Agustus";
        break;
    case 9 : $nameBln = "September";
        break;
    case 10 : $nameBln = "Oktober";
        break;
    case 11 : $nameBln = "November";
        break;
    case 12 : $nameBln = "Desember";
        break;
}
echo "Nama bulan sekarang adalah : ".$nameBln;
?>