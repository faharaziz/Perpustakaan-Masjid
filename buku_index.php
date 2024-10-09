<h2>Informasi Buku</h2>
<a href="index.php?page=buku_create">Input Data</a>

<?php

// panggil koneksi
require_once "koneksi.php";

// query
$sql = "SELECT * FROM tb_buku";

// prepare
$stmt = $pdo->prepare($sql);

// execute
$stmt->execute();

// rows array
$rows = $stmt->fetchAll();
?>

<table>
     <tr>
          <th>NO</th>
          <th>JUDUL</th>
          <th>PENULIS</th>
          <th>EDIT</th>
          <th>DELETE</th>
     </tr>

     <?php foreach ($rows as $r) { ?>

          <tr>
               <td><?php echo $r['Id_buku']; ?></td>
               <td><?php echo $r['judul']; ?></td>
               <td><?php echo $r['penulis']; ?></td>
               <td><a href="index.php?page=buku_edit&id=<?php echo $r['Id_buku']; ?>">Edit</a></td>
               <td><a href="index.php?page=buku_delete&id=<?php echo $r['Id_buku']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a></td>
          </tr>

     <?php } ?>

</table>