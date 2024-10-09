<?php

// panggil koneksi
require_once "koneksi.php";

// ambil id dari data mhsw
$id = $_GET['id'];

// query
$sql = "DELETE FROM tb_buku WHERE Id_buku=:Id_buku";

// prepare
$stmt = $pdo->prepare($sql);

//set param
$stmt->bindParam(":Id_buku", $id);

// execute
$stmt->execute();

?>

<h2>Hapus Data Buku</h2>

<p>Data berhasil dihapus!</p>