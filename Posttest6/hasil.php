<?php
require 'koneksi.php';
$result = mysqli_query($conn,"SELECT * FROM postest5");
$feedback = [];
while($row = mysqli_fetch_assoc($result)){
    $feedback[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hasil.css?v2" >
    <title>Document</title>
</head>
<body>

<h1 align="center">FEEDBACK </h1>
<?php
    $i = 1;
    foreach($feedback as $kmn):
?>
        <div class="container">
            <div class="date">
            Tanggal  : <?php echo $kmn["tanggal"]?><br>
            </div>
            <div class="daftar">
                Nama Akun    :    <?php echo $kmn["nama"]?> <br>
                Email        :    <?php echo $kmn["email"]?>
                <div class="posisi">
                    Message     : <?php echo $kmn["pesan"] ?><br>
                </div>
                <button><a href="update.php?id=<?=$kmn['id']?>">Edit</a></button>
                <button><a href="delete.php?id=<?=$kmn['id']?>">Hapus</a></button>               
            </div>
        </div>
<?php $i++; endforeach; ?>
<div align="center">
<button><a href="postest4.php">Tambah</a></button>
</div>
</body>
</html>