<?php
// Variabel untuk status koneksi, misalnya true berarti wifi terhubung
$koneksi = true; // Ganti jadi false untuk simulasi wifi tidak terhubung

// Ternary operator untuk menentukan status wifi
// Jika $koneksi bernilai true ➜ "Wifi terhubung"
// Jika $koneksi bernilai false ➜ "Tidak ada koneksi"
echo ($koneksi) ? "Wifi terhubung" : "Tidak ada koneksi";
?>
