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
                         <a href="index.php">Home</a>
                    </li>
                    <li>
                         <a href="index.php?page=login">Login</a>
                    </li>
               </ul>
          </nav>

          <section>

               <?php

               include "koneksi.php";

               if (isset($_GET['page'])) {
                    include $_GET['page'] . ".php";
               } else {
                    include "main.php";
               }

               ?>

          </section>

          <footer>
               Copyright &copy; 2024. Fahar Abdul Aziz
          </footer>

     </div>
</div>

</body>
</html>