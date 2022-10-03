<?php 
 print_r($_GET);
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Element Form - HTML 5</title>
     </head>
     <body>
         <h2>Membuat Form</h2>
     </body>
     </html>
     <form name="fmhs" method="GET" action="proses.php">
        <table width="60">                   
     <tr>
        <td>Nim</td>
        <td><input type="number,text" name="fnim" ><br></td>
     </tr>b
     <tr>
        <td>Nama</td>
        <td><input type="text" name="fnama" ><br></td>
    </tr>    
    <tr>
        <td>Tempat.Tgl.Lahir</td>
        <td><input type="text" name="fnama" ><br></td>
    </tr>    
    <tr>
        <td>Jenis Kelamin</td>
        <td><input type="radio" name="jk" value="laki-laki" checked>laki-laki
        <input type="radio" name="jk" value="Perempuan">perempuan</td>
    </tr>    
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="falamat" ><br></td>
    </tr>    
    <tr>
        <td>Email Mahasiswa</td>
        <td><input type="email" name="femailmhs" ><br></td>
    </tr>    
    <tr>
        <td>Agama :</td>
        <td> 
        <select>
          <option>Pilih</option>
          <option>Islam</option>
          <option>Kristen</option>
          <option>Katolik</option>
          <option>Hindhu</option>
          <option>Budha</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>Hobi</td>
        <td><input type="text" name="fhobi" ><br></td>
    </tr>    
    <tr>
        <td>No Telepon</td>
        <td><input type="number" name="fnotlpn"><br></td>
    </tr>    
    <tr>
        <td>Status Pernikahan</td>
        <td><input type="text" name="fsp" ><br></td>
    </tr>    
    <tr>
        <td>Tinggi Badan</td>
        <td><input type="number,text" name="ftb" ><br></td>
    </tr>    
    <tr>
        <td>Berat Badan</td>
        <td><input type="number,text" name="fbb" ><br></td>
    </tr>    
    <tr>
        <td>Fakultas :</td>
    <td> <select>
    <br>
        <option>Pilih</option>
        <option>Ilmu Komputer</option>
        <option>Ekonomi dan Bisnis</option>
        <option>Ilmu Budaya</option>
        <option>Teknik</option>
        <br>
        </td>
    </tr>    
    <tr>
            <td>Program Studi :</td>
        <td><select>
        <option>Pilih</option>
        <option>S1  - Teknik Informatika</option>
        <option>S1  - Sistem Informasi</option>
        <option>S1  - Desain Komunikasi Visual</option>
        <option>SST - Film dan Televisi</option>
        <option>D3  - Teknik Informatika</option>
        <option>SST - Animasi</option>
        <option>S1  - Ilmu Komunikasi</option>
        </select>
    </td>
    <tr>
        <td> Kota Asal :</td>
   <td><select>
    <option>Pilih</option>
      <option>Grobogan</option>
      <option>Surabaya</option>
      <option>Semarang</option>
      <option>Jakarta</option>
      <option>Bandung</option>
    </select></td>
    </tr>
    <tr>
        <td>Bidang Minat</td>
        <td>
          <input type="checkbox"><label>Web Programming</label><br>
          <input type="checkbox"><label>Mobile Programming</label><br>
          <input type="checkbox"><label>Data Science</label><br>
<tr>
    <td>Berkas CV :</td>
    <td><input type="file"><br>
</tr>
<tr>
        <td><input type="submit"></td>
        <td><input type="reset"></td>
</tr>
</table>
</form>
</body>
</html>