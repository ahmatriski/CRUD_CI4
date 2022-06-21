<html>
<head>
</head>
<body>

<h2>BIODATA MAHASISWA</h2>
<form action="vw_biodata.php" method="get">
<table>
    <tr>
       <td>NPM :</td>
       <td><input type="text" name="NPM" placeholder="masukan NPM"></td>
    </tr>
    <tr>
       <td>Nama :</td>
       <td><input type="text" name="nama" placeholder="masukan Nama"></td>
    </tr>
    <tr>
       <td>Email :</td>
       <td><input type="text" name="Email" placeholder="masukan Email"></td>
    </tr>
    <tr>
       <td>Jenis kelamin</td>
       <td>
          <input type="radio" name="jenis_kelamin" value="pria">Pria
          <input type="radio" name="jenis_kelamin" value="wanita">Wanita
       </td>
    </tr>
   <tr>
     <td>Agama</td>
     <td>
       <select name="Agama">
       <option value="Islam">Islam</option>
       <option value="Kristen">Kristen</option>
       <option value="Hindu">Hindu</option>
       <option value="Budha">Budha</option>
       </select>
    </td>
   </tr>
   <tr>
     <td>Alamat anda</td>
     <td><textarea name="alamat"></textarea></td>
   </tr>
   <tr>
      <td></td><td><button type="submit">Simpan</button></td>
   </tr>
</table>
</form>
</body>
</html>