<?php
require 'koneksi.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];
    $result = mysqli_query($conn, "INSERT INTO postest5 (tanggal, nama, email, pesan) VALUES ('$tanggal','$nama','$email','$pesan')");
    if($result){
        echo
        "
            <script>
                alert('Data Berhasil Ditambahkan!'); 
                document.location.href = 'hasil.php' ;
            </script>
        ";

    }
    else{
        echo
        "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'postest4.php';
            </script>
        ";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pt4.css?v6" >
    <title>Document</title>
</head>
<body>
<div class="container">
    <div align="center">
            <div class="box" align="center">
                <h1>give your feedback about our website</h1>
                    <form action="" method="post">
                        <label  for=""><br>Tanggal    : <br></label>
                        <input  type="date" name="tanggal" required><br>
                        <label for=""><br>Nama      :<br> </label>
                        <input type="text" name="nama" required><br>
                        <label  for=""><br>Email        :<br> </label>
                        <input  type="email" name="email" required> <br><br>
                        <label for="">Message          :<br><br> </label>
                        <input type="text" name="pesan"  required> <br>
                        <br><br>
                        <button type="submit" name="submit" value="submit" >Submit</button>
                    </form>
            </div>
    </div>
</div>
</body>
</html>
