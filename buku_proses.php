<?php

// panggil file koneksi.php
require_once "koneksi.php";

// jika tombol b_save diklik
if (isset($_POST['b_save'])) {

     $judul = $_POST['judul'];
     $penulis = $_POST['penulis'];

     // query
     $sql = "INSERT INTO tb_buku SET
     judul=:judul, penulis=:penulis";

     // prepare
     $stmt = $pdo->prepare($sql);

     //set param
     $stmt->bindParam(":judul", $judul);
     $stmt->bindParam(":penulis", $penulis);

     $stmt->execute();

     header("location:index.php?page=buku_index");
}

if (isset($_POST['b_update'])) {

     $judul = $_POST['judul'];
     $penulis = $_POST['penulis'];
     $Id_buku = $_POST['Id_buku'];


     $sql = "UPDATE tb_buku SET
     judul=:judul, penulis=:penulis
     WHERE Id_buku=:Id_buku";

     // prepare
     $stmt = $pdo->prepare($sql);

     //set param
     $stmt->bindParam(":judul", $judul);
     $stmt->bindParam(":penulis", $penulis);
     $stmt->bindParam(":Id_buku", $Id_buku);


     $stmt->execute();

     header("location:index.php?page=buku_index");
}
