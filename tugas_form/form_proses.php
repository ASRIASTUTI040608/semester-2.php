<?php
if (isset($_POST['submit'])) {
    echo "Nama saya " . $_POST['namaDepan'] . " " . $_POST['namaBelakang'];
    echo " Jenis Kelamin saya " . $_POST['jk'];
    echo " Tingkat saya " . $_POST['tingkat'];
    if (!empty($_POST['hobby'])) {
        echo " Hobby saya " . implode(", ", $_POST['hobby']);
    } else {
        echo "Hobby: Tidak ada<br>";
    }
    echo "<hr>";
}
?>