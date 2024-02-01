<?php
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body
<img src="assets/bayi dan ibu.jpg" alt="poltekkes"  weidht="100%" height="200" border-radius="100%" >
        <div class="logo">
        &nbsp;<img src="assets/kemenkes.jpg" alt="kemenkes"  weidht="20%" height="55"> &nbsp; &nbsp;
            <img src="assets/poltekkes.png" alt="poltekkes"  weidht="20%" height="55">
        </div>
        <div class="login">
        <form method="post">
        <table align="center">
    <tr>
    <td><h1 align="center">Login</h1></td>
    </tr>
        <table border="0" align="center" width="30%"  class="reg">
         <tr>
         <td rowspan="8"><img src="assets/bayi dan ibu.jpg" alt="poltekkes"  weidht="100%" height="200" ><p>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;bayi sehat ibu tenang</p></td> &nbsp;
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
                   <input type="text" name="username" value="username" placeholder="User">
                </td>
            </tr>
            <tr>
                <td><img src="assets/password.png" alt="user" weidht="20%" height="25"></td>
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
               <button type="submit" name="login" class="buttonlog">login</button>
               </td>
            </pre>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>
    </form>
</div>
    <p align="right">Don't have a account? <a href="http://localhost/project_poltekkes/register.php">register</p>
</body>
</html>