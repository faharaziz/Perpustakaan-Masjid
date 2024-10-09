<?php
require 'koneksi.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Id_buku = $_POST['Id_buku'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $tanggal_beli = $_POST['tanggal_beli'];

    $stmt = $pdo->prepare('INSERT INTO tb_order (Id_buku, nama_pembeli, tanggal_beli) VALUES (?, ?, ?)');
    $stmt->execute([$Id_buku, $nama_pembeli, $tanggal_beli]);

    header('Location: index.php');
}

$sql = "SELECT * FROM tb_buku";
$buku = $pdo->query($sql)->fetchAll();
?>

<h2>Pembelian Buku</h2>
<form method="post">
    <br>
    <label for="Id_buku">JUDUL:</label>
    <select id="Id_buku" name="Id_buku" required>
        <?php foreach ($buku as $b): ?>
            <option value="<?php echo htmlspecialchars($b['Id_buku']); ?>"><?php echo htmlspecialchars($b['judul']); ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <label for="nama_pembeli">NAMA PEMBELI:</label>
    <input type="text" id="nama_pembeli" name="nama_pembeli" required>
    <br>
    <label for="tanggal_beli">TANGGAL PEMBELIAN:</label>
    <input type="date" id="tanggal_beli" name="tanggal_beli" required>
    <br>
    <button type="submit">BELI</button>
</form>
