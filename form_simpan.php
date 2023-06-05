<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
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
    
    form {
      max-width: 600px;
      margin: 0 auto;
      background-color: #d8c4b6;
      padding: 20px;
      border-radius: 5px;
    }
    
    table {
      width: 100%;
    }
    
    td {
      padding: 8px;
    }
    
    input[type="text"],
    textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #4f709c;
      border-radius: 3px;
    }
    
    input[type="radio"] {
      margin-right: 5px;
    }
    
    input[type="file"] {
      padding: 5px;
      border: none;
      background-color: transparent;
    }
    
    input[type="submit"],
    input[type="button"] {
      padding: 8px 16px;
      border: none;
      background-color: #4f709c;
      color: #f5efe7;
      text-decoration: none;
      border-radius: 3px;
      cursor: pointer;
    }
    
    input[type="submit"]:hover,
    input[type="button"]:hover {
      background-color: #213555;
    }
    
    a {
      text-decoration: none;
    }
    
    @media (max-width: 600px) {
      form {
        padding: 10px;
      }
      
      input[type="text"],
      textarea {
        padding: 6px;
      }
      
      input[type="submit"],
      input[type="button"] {
        padding: 6px 12px;
      }
    }
  </style>
</head>
<body>
  <h1>Tambah Data Siswa</h1>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>NIS</td>
    <td><input type="text" name="nis"></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>
    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
    </td>
  </tr>
  <tr>
    <td>Telepon</td>
    <td><input type="text" name="telp"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="alamat"></textarea></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="foto"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>