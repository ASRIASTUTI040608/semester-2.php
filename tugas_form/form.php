<!DOCTYPE html>
<html>
<head>
    <title>Form Input Sederhana</title>
</head>
<body>


<form action="form_proses.php" method="POST">
  Nama Depan: <input type="text" name="namaDepan"><br>
  Nama Belakang: <input type="text" name="namaBelakang"><br>
  
  Jenis Kelamin: 
  <input type="radio" name="jk" value="laki-laki">Pria
  <input type="radio" name="jk" value="perempuan">Wanita<br>
  
  Tingkat: 
  <select name="tingkat">
    <option>SD</option>
    <option>SMP</option>
    <option>SMA</option>
    <option>SMK</option>
    <option>Kuliah</option>
  </select><br>
  
  Hobby: 
  <input type="checkbox" name="hobby[]" value="Membaca">Membaca
  <input type="checkbox" name="hobby[]" value="Menulis">Menulis
  <input type="checkbox" name="hobby[]" value="Olahraga">Olahraga<br>
  
  <input type="submit" name="submit" value="Kirim">
</form>

</body>
</html>