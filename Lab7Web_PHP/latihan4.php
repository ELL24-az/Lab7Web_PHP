<?php
function hitungDiskon($harga, $persen) {
    $potongan = $harga * ($persen / 100);
    return $harga - $potongan;
}

// function tambahan
function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}

function tentukanKelulusan($nilai) {
    return $nilai >= 60 ? "Lulus" : "Tidak Lulus";
}

$hargaAkhir = hitungDiskon(150000, 10);
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Latihan 4</title><link rel="stylesheet" href="style.css"></head>
<body>
<nav><a href="index.php">&larr; Menu</a></nav>
<h1>Latihan 4 — Function</h1>
<?php
echo "<p>Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".") . "</p>";
echo "<p>Luas persegi panjang 8 x 4 = " . hitungLuasPersegiPanjang(8, 4) . "</p>";
echo "<p>Nilai 75: " . tentukanKelulusan(75) . "</p>";
echo "<p>Nilai 50: " . tentukanKelulusan(50) . "</p>";
?>
</body></html>
