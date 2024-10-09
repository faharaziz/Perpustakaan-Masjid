<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Masjid Al-Ikhlas</title>
    <link rel="stylesheet" href="csss/style.css">
</head>
<body>

     <div class="container">

          <header>
               <img src="images/headerperpustakaan.jpg" alt="">
          </header>

          <nav>
               <ul>
                    <li>
                         <a href="dashboard.php">Home</a>
                    </li>
                    <li>
                         <a href="dashboard.php?page=buku_index">Buku</a>
                    </li>
                    <li>
                         <a href="dashboard.php?page=pinjam_buku">Peminjaman</a>
                    </li>
                    <li>
                         <a href="dashboard.php?page=order_buku">Penjualan</a>
                    </li>
                    <li>
                         <a href="dashboard.php?page=about_index">About</a>
                    </li>
                    <li>
                         <a href="index.php">Logout</a>
                    </li>
               </ul>
          </nav>

          <section>

               <?php

               include "koneksi.php";

          
               if (isset($_GET['page'])) {
                    include $_GET['page'] . ".php";
               } else {
                    include "login_main.php";
               }

               ?>

          </section>

          <footer>
               Copyright &copy; 2024. Fahar Abdul Aziz - UIN Sumatera Utara.
          </footer>

     </div>

</body>

</html>