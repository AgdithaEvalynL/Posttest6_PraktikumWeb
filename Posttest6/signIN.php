<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signIN.css" >
    <title>Document</title>

<?php
session_start();
$username = 'user';
$password = 'user';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        $_SESSION["username"] = $username; 
        echo "Anda Berhasil Login $username";
        /*Jika Ingin Pindah Ke Halaman Lain*/
        header("Location: postest4.php"); 
    } else {
        // Tampilkan Pesan Error
        display_login_form();
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
}    
else { 
    display_login_form();
}


        function display_login_form(){ ?>
        <div class="container">
            <div align="center" class="box" >
                <h1>LOGIN AS USER</div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
                    <label for="username"><br>username<br></label>
                    <input type="text" name="username" id="username">
                    <label for="password"><br><br>password<br></label>
                    <input type="password" name="password" id="password">
                    <br><br>
                    <button type ="submit" name="submit" value="submit">Submit</button>
                </form>    
        </div>     
        <?php } ?>


</body>
</html>