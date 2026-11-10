# Lab7Web_PHP — Pemrograman Server-Side dengan PHP

## Tujuan

Memahami pemrosesan server-side, sintaks PHP (variabel, percabangan, perulangan, function), pemrosesan form GET/POST, serta validasi dan sanitasi input.

## Isi File dalam Folder Lab7Web_PHP

| `index.php` |
| `latihan2.php` |
| `latihan3.php` |
| `latihan4.php` |
| `latihan5_get.php` |
| `latihan6_post.php` |
| `latihan7_transaksi.php` |
| `mini_project.php` |
| `eksperimen.php` |
| `style.css` |

## Uji Mini Project

**Valid**

1. Nama: Elisia Putri Sarmelinda, NIM: 312510456, Prodi: Teknik Informatika, Semester: 3, Email: elisiaputri550@gmail.com → ringkasan data tampil.

**Tidak valid**

1. Semua kolom kosong → muncul seluruh pesan kesalahan.
2. NIM `abc123`, Semester `15`, Email `elisi@` → pesan: NIM tidak valid, semester di luar 1–14, email tidak valid.

## Screenshot

## Screenshot

### Latihan 1

<img src="screenshots/Screenshot%20LAT%201.png" width="600">

### Latihan 2

<img src="screenshots/Screenshot%20LAT%202.png" width="600">

### Latihan 3

<img src="screenshots/Screenshot%20LAT%203.png" width="600">

### Latihan 4

<img src="screenshots/Screenshot%20LAT%204.png" width="600">

### Latihan 5

<img src="screenshots/Screenshot%20LAT%205.png" width="600">

### Latihan 6

<img src="screenshots/Screenshot%20LAT%206(1).png" width="600">
<img src="screenshots/Screenshot%20LAT%206(2).png" width="600">

### Latihan 7

<img src="screenshots/Screenshot%20LAT%207.png" width="600">

### Mini Project

<img src="screenshots/Screenshot%20MINI%20PROJECT.png" width="600">
Penjelasan: Semua kolom terisi, NIM hanya berisi angka, semester 3 berada di rentang 1–14, dan format email valid.
<img src="screenshots/Screenshot%20MINI%20PROJECT(2).png" width="600">
Penjelasan: Validasi server-side memeriksa kolom wajib isi, sehingga data kosong ditolak dan tidak ditampilkan sebagai ringkasan.
<img src="screenshots/Screenshot%20MINI%20PROJECT(3).png" width="600">
Penjelasan: NIM mengandung huruf dan terlalu pendek, semester di luar rentang, dan email tidak memenuhi format yang valid (filter_var FILTER_VALIDATE_EMAIL). Data tidak diproses.

## Jawaban Pertanyaan Evaluasi

1. **Client-side vs server-side:** client-side dijalankan di browser pengguna (HTML, CSS, JavaScript); server-side dijalankan di server (PHP), yang memproses permintaan dan mengirim hasil (HTML) ke browser.
2. **Mengapa lewat web server:** PHP perlu interpreter yang dijalankan server. Jika dibuka dengan klik ganda (`file://`), browser hanya menampilkan teks kode, bukan menjalankannya.
3. **Tanda `$`:** penanda bahwa identifier tersebut adalah variabel.
4. **GET vs POST:** GET mengirim data lewat URL (terlihat, cocok untuk pencarian/permintaan yang tidak mengubah data); POST mengirim data di body request (tidak tampil di URL, lazim untuk form). Keduanya bukan enkripsi; gunakan HTTPS.
5. **Validasi server-side:** validasi di browser (atribut `required`, dll.) mudah dilewati; server harus memastikan data benar dan aman.
6. **`htmlspecialchars()`:** mengubah karakter khusus HTML (`<`, `>`, `"`, `&`) menjadi entitas sehingga input tidak dieksekusi sebagai HTML/script (mencegah XSS).
7. **Manfaat function:** kode dapat digunakan ulang, lebih rapi dan terstruktur, mudah diuji dan dipelihara, serta mengurangi duplikasi.
