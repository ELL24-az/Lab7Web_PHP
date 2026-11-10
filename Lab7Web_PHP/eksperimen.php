<?php
// 1. Rata-rata tiga komponen nilai
function rataRata(array $nilai) { return array_sum($nilai) / count($nilai); }

// 3. Format Rupiah
function formatRupiah($angka) { return "Rp" . number_format((float)$angka, 0, ",", "."); }

// 2. Pencarian nama dari array (GET)
$dataNama = ["Alya Putri", "Bima Santoso", "Citra Lestari", "Doni Pratama", "Alya Rahma"];
$kata = trim($_GET["q"] ?? "");
$hasil = [];
if ($kata !== "") {
    foreach ($dataNama as $n) {
        if (stripos($n, $kata) !== false) $hasil[] = $n;
    }
}
function e($t) { return htmlspecialchars((string)$t, ENT_QUOTES, "UTF-8"); }
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Eksperimen</title><link rel="stylesheet" href="style.css"></head>
<body>
<nav><a href="index.php">&larr; Menu</a></nav>
<h1>Eksperimen Mandiri</h1>

<h2>1. Rata-rata nilai</h2>
<?php $rata = rataRata([85, 78, 90]); ?>
<p>Nilai 85, 78, 90 → rata-rata <?= number_format($rata, 2) ?></p>

<h2>2. Cari nama (GET)</h2>
<form method="GET">
 <label for="q">Cari nama</label>
 <input id="q" name="q" value="<?= e($kata) ?>">
 <button type="submit">Cari</button>
</form>
<?php if ($kata !== ""): ?>
 <?php if ($hasil): ?>
  <ul><?php foreach ($hasil as $h): ?><li><?= e($h) ?></li><?php endforeach; ?></ul>
 <?php else: ?><p>Tidak ada hasil untuk "<?= e($kata) ?>".</p><?php endif; ?>
<?php endif; ?>

<h2>3. Format Rupiah</h2>
<p><?= formatRupiah(1500000) ?> | <?= formatRupiah(25000.5) ?></p>

<h2>4. Validasi NIM</h2>
<p>Sudah diterapkan di <a href="mini_project.php">mini_project.php</a>: NIM hanya angka, panjang 8–12 digit.</p>

<h2>5. Tombol reset vs. pemrosesan ulang server</h2>
<p><code>&lt;button type="reset"&gt;</code> hanya mengosongkan isian form di browser (client-side) tanpa mengirim request.
Sebaliknya, mengirim ulang/refresh membuat server memproses kembali permintaan, sehingga validasi dijalankan lagi
dan halaman dibuat ulang. Perlu dicatat: pada form yang diisi ulang dari nilai POST (seperti mini project),
tombol reset mengembalikan ke nilai awal atribut <code>value</code>, bukan mengosongkan seluruhnya.</p>
</body></html>
