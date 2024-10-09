<?php

// panggil koneksi
require_once "koneksi.php";

// ambil id dari data mhsw
$id = $_GET['id'];

// query
$sql = "SELECT * FROM tb_buku WHERE Id_buku=:Id_buku";

// prepare
$stmt = $pdo->prepare($sql);

//set param
$stmt->bindParam(":Id_buku", $id);

// execute
$stmt->execute();

// row array
$row = $stmt->fetch();
?>

<h2>Edit Informasi Buku</h2>

<form action="buku_proses.php" method="post">
     <input type="hidden" name="Id_buku" value="<?php echo $row['Id_buku']; ?>">
     <table>
          <tr>
               <td>JUDUL</td>
               <td><input type="text" name="judul" value="<?php echo $row['judul']; ?>"></td>
          </tr>
          <tr>
               <td>PENULIS</td>
               <td><input type="text" name="penulis" value="<?php echo $row['penulis']; ?>"></td>
          </tr>
          <tr>
               <td></td>
               <td><input type="submit" value="UPDATE" name="b_update"></td>
          </tr>
     </table>
</form>