CREATE DATABASE dbperpustakaan;

USE dbperpustakaan;

CREATE TABLE tb_buku (
    Id_buku INT(11) AUTO_INCREMENT,
    judul CREATE VARCHAR(25) NOT NULL,
    penulis VARCHAR(25) NOT NULL,
    PRIMARY KEY (ID_buku)
);


CREATE TABLE tb_peminjaman (
    id_peminjaman INT AUTO_INCREMENT PRIMARY KEY,
    Id_buku INT,
    nama_peminjam VARCHAR(100) NOT NULL,
    tanggal_pinjam DATE,
    FOREIGN KEY (Id_buku) REFERENCES tb_buku(Id_buku)
);

CREATE TABLE tb_order (
    id_order INT AUTO_INCREMENT PRIMARY KEY,
    Id_buku INT,
    nama_pembeli VARCHAR(100) NOT NULL,
    tanggal_beli DATE,
    FOREIGN KEY (Id_buku) REFERENCES tb_buku(Id_buku)
);

CREATE TABLE tb_user (
     user_id INT(11) NOT NULL AUTO_INCREMENT,
     user_name VARCHAR(100) NOT NULL,
     user_password VARCHAR(255) NOT NULL,
     PRIMARY KEY(user_id)
);

INSERT INTO tb_user VALUES (NULL, "admin" , "12345");
