<?php

require_once "koneksi.php";

if (isset($_POST['b_login'])) {

     $user_name = $_POST['user_name'];
     $user_password = $_POST['user_password'];

     $sql = "SELECT * FROM tb_user WHERE user_name=:user_name AND user_password=:user_password";

     $stmt = $pdo->prepare($sql);

     $stmt->bindParam(":user_name", $user_name);
     $stmt->bindParam(":user_password", $user_password);

     $stmt->execute();

     $row = $stmt->fetch();

     if (!empty($row)) {
          header("location:dashboard.php");
     } else {
          header("location:index.php?page=login_gagal");
     }
}
