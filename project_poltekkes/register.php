<?php
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets\style.css">
</head>
<body>
    <div id="card">
    <div class="logo">
        &nbsp;<img src="assets\kemenkes.jpg" alt="kemenkes"  weidht="20%" height="55"> &nbsp; &nbsp;
            <img src="assets\poltekkes.png" alt="poltekkes"  weidht="20%" height="55">
        </div>
        &nbsp; &nbsp;<marquee><h1 align="center" style="margin-left:15%;margin-top:5%">Registrasi</h1></marquee>
        <div style='float:left' class="image">
        <table border="0" style="margin-left:95%;margin-top:5%" >
       <tr>
        <td><img src="assets\bayi dan ibu.jpg" alt="poltekkes"  weidht="100%" height="200"</td>
       </tr> 
       <tr>
        <td>
            <p>&nbsp; &nbsp; &nbsp;bayi sehat ibu tenang</p></td>
       </tr>
        </table>
    </div>
       <div style='float:left'> 
       <form method="post">
          <table border="0" style="margin-left:80%;float:top;" width="30%" class="reg">
         <tr>
         <!-- <td rowspan="8"><img src="assets/bayi dan ibu.jpg" alt="poltekkes"  weidht="100%" height="200" ><p>bayi sehat ibu tenang</p></td> &nbsp; -->
         </tr>   
        <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><img src="assets/user.png" alt="user" weidht="20%" height="25"></td>
                <td>Username</td>
                <td> : </td>
                <td>
                    <input type="text" name="username"  size="35" placeholder="Masukkan Nama anda">
                </td>
            </tr>
            <tr>
                <td><img src="assets\handphone.png" alt="user" weidht="20%" height="25"></td>
                <td>No.hp</td>
                <td>:</td>
                <td>
                    <input type="text" name="no" size="35" placeholder="Masukkan Nomor hp anda">
                </td>
            </tr>
            <tr>
                <td><img src="assets\alamat.png" alt="user" weidht="20%" height="25"></td>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" size="35" placeholder="Masukkan Alamat anda">
                </td>
            </tr>
            <tr>
                <td><img src="assets\password.png" alt="user" weidht="20%" height="25"></td>
                <td>Password</td>
                <td>:</td>
                <td>
                    <input type="password" name="password" size="35" placeholder="Masukkan password anda">
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <pre>
                <td></td>
               <td align="center" colspan="4" >
               <button type="submit" name="registrasi" class="buttonreg">Registrasi</button>
               </td>
            </pre>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>
    </form>
       </div>  
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><div>
    <p align="right">have a account? <a href="http://localhost/project_poltekkes/login.php">login</p>
    </div>
</body>
</html>