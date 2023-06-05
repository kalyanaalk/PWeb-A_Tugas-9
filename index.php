<html>
<head>
  <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
  <style>
    body {
      background-color: #f5efe7;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    
    h1 {
      text-align: center;
      color: #213555;
      margin: 20px;
    }
    
    a {
      display: block;
      text-align: center;
      margin: 20px 0;
      color: #4f709c;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border: 1px solid #4f709c;
      text-align: center;
    }
    
    th {
      background-color: #213555;
      color: #d8c4b6;
    }

    td {
      background-color: #d8c4b6;
      color: #213555;
    }
    
    img {
      max-width: 100px;
      max-height: 100px;
    }
    
    @media (max-width: 600px) {
      table {
        font-size: 12px;
      }
      
      img {
        max-width: 50px;
        max-height: 50px;
      }
    }
  </style>
</head>
<body>
  <h1>Data Siswa</h1>
  <table>
    <tr>
      <th>Foto</th>
      <th>NIS</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Telepon</th>
      <th>Alamat</th>
      <th colspan="2">Aksi</th>
    </tr>
    <?php
    // Load file koneksi.php
    include "koneksi.php";
    // Buat query untuk menampilkan semua data siswa
    $sql = $pdo->prepare("SELECT * FROM siswa");
    $sql->execute(); // Eksekusi querynya
    while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
      echo "<tr>";
      echo "<td><img src='images/".$data['foto']."' width='90' height='120'></td>";
      echo "<td>".$data['nis']."</td>";
      echo "<td>".$data['nama']."</td>";
      echo "<td>".$data['jenis_kelamin']."</td>";
      echo "<td>".$data['telp']."</td>";
      echo "<td>".$data['alamat']."</td>";
      echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
      echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
      echo "</tr>";
    }
    ?>
  </table>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  
</body>
</html>
