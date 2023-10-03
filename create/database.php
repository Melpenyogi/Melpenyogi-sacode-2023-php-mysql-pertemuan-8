<?php

// variable database

$namaServer    = 'localhost';
$namaPengguna  = 'root';
$kataSandi     = '';

// koneksi ke database

$koneksi = new mysqli($namaServer, $namaPengguna, $kataSandi);

if ($koneksi->connect_error) {
    echo "Koneksi gagal";
} else {
    echo "Koneksi berasil";
}

// proses membuat database dengan printah SQL

$sql = 'CREATE DATABASE db_melpen';


// notifikasi jika database berasil / gagal dibuat

if ($koneksi->query($sql) === TRUE) {
    echo "<h1> Database berasil dibuat </h1>";
} else {
    echo "<h1> Database gagal dibuat </h1>";
}
