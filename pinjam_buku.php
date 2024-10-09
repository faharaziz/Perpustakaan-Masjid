<?php
require 'koneksi.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Id_buku = $_POST['Id_buku'];
    $nama_peminjam = $_POST['nama_peminjam'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];

    $stmt = $pdo->prepare('INSERT INTO tb_peminjaman (Id_buku, nama_peminjam, tanggal_pinjam) VALUES (?, ?, ?)');
    $stmt->execute([$Id_buku, $nama_peminjam, $tanggal_pinjam]);

    header('Location: index.php');
}

$sql = "SELECT * FROM tb_buku";
$buku = $pdo->query($sql)->fetchAll();
?>

<h2>Peminjaman Buku</h2>
<form method="post">
    <br>
    <label for="Id_buku">JUDUL:</label>
    <select id="Id_buku" name="Id_buku" required>
        <?php foreach ($buku as $b): ?>
            <option value="<?php echo htmlspecialchars($b['Id_buku']); ?>"><?php echo htmlspecialchars($b['judul']); ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <label for="nama_peminjam">NAMA PEMINJAM:</label>
    <input type="text" id="nama_peminjam" name="nama_peminjam" required>
    <br>
    <label for="tanggal_pinjam">TANGGAL PINJAM:</label>
    <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" required>
    <br>
    <button type="submit">PINJAM</button>
</form>
