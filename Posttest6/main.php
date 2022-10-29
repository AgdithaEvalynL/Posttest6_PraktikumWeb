<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li{
            display: inline-block;
            border radius:30px;
        }

        h2{
            font-size: 50px;
            background-color:brown;
        }

        button{
            background-color: pink;
            
        }
    </style>
</head>
<body>
    <h2 align="center"> MAMBA NIH BOUS</h2>
    <li><img src="https://i.pinimg.com/736x/47/00/c4/4700c4fed9718251285fa4fce3afe06e.jpg" height="400px" width="300px"></li>
    <li><img src="https://i.pinimg.com/564x/2c/1b/15/2c1b15bbfbef000cf9d0f8e5e3cca1de.jpg" height="400px" width="300px"></li>
    <li><img src="https://i.pinimg.com/564x/08/0a/6b/080a6b701833d020c7252757f19f2371.jpg" height="400px" width="300px"></li>
    <li><img src="https://i.pinimg.com/564x/5b/be/d8/5bbed8f3ead9d94cb3fe3004a4d63d81.jpg" height="400px" width="300px"></li>
    <h2 align="center">EARTH TONE</h2>
    <li><img src="https://i.pinimg.com/564x/b6/77/e4/b677e4c61f835750fe0be7fce103e298.jpg" height="400px" width="300px"></li>
    <li><img src="https://i.pinimg.com/564x/80/77/2f/80772f9f9fb5f3db4c6c42b43ca2ce64.jpg" height="400px" width="300px"></li>
    <li><img src="https://i.pinimg.com/564x/87/f8/80/87f88022b0b8ba780c5fb9b1f200be69.jpg" height="400px" width="300px"></li>
    <li><img src="https://i.pinimg.com/564x/da/33/0e/da330e4fe09b9d9e03e4626b68c369c6.jpg" height="400px" width="300px"></li>
    <?php
            require 'koneksi.php';
            $result = $conn->query("SELECT * FROM konten");
            $i=1;
            while($row = mysqli_fetch_array($result)){
    ?>        
    <li>
        <img src="gambar/<?=$row['gambar']?>" alt=""  height="400px" width="300px">
    
    </li>
    <button><a href="updateMain.php?id=<?=$row['id']?>">Edit</a></button>
    <button><a href="deleteMain.php?id=<?=$row['id']?>">Hapus</a></button>
    <?php
    
            $i++ ; }
    ?>


   <button><a href="createMain.php" >TAMBAH GAMBAR</a></button>
</body>
</html>



