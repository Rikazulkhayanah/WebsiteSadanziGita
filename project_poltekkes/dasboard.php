<?php
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>
    <link rel="stylesheet" href="assets\style1.css">
</head>
<body>
<div class="logo">
        <nav align="right">
        <div>
        &nbsp;<img src="assets\kemenkes.jpg" alt="kemenkes"  weidht="20%" height="55"> &nbsp; &nbsp;
            <img src="assets\poltekkes.png" alt="poltekkes"  weidht="20%" height="55">
        </div>
        &nbsp; &nbsp;<marquee scrolldelay="150" width="600"><h1 align="center" style="margin-left:15%;margin-top:5%">Selamat Datang di website Sehat dengan Asupan gizi</h1></marquee>
        <br><br>
        </div>
        <span class="toggle-btn">&#9776;</span>
        <div class="nav-links">
            <a href="http://localhost/project_poltekkes/imd.php">imd</a>
            <a href="http://localhost/project_poltekkes/asi.php">Asi</a>
            <a href="http://localhost/project_poltekkes/mpasi.php">Mp-Asi</a>
            <a href="http://localhost/project_poltekkes/statusgizi.php">Status gizi</a>
        </div>
    </nav>
<marquee>
<img src="assets\imd.jpg" alt="poltekkes"  weidht="20%" height="175">imd<a href="http://localhost/project_poltekkes/imd.php
">&nbsp; &nbsp;
<img src="assets\Asi.jpeg" alt="poltekkes"  weidht="20%" height="175">ASi<a href="http://localhost/project_poltekkes/asi.php
">&nbsp; &nbsp;
<img src="assets\mpasi.jpeg" alt="poltekkes"  weidht="20%" height="170">Mp-Asi<a href="http://localhost/project_poltekkes/mpasi.php
">&nbsp; &nbsp;
<img src="assets\status gizi bayi.jpg" alt="poltekkes"  weidht="20%" height="175">Status Gizi<a href="http://localhost/project_poltekkes/statusgizi.php
">&nbsp; &nbsp;
</marquee>
<!-- <marquee>
    <table>
        <tr>
            <td weidht="20%" height="175">imd&nbsp; &nbsp;</td>
            <td>Asi&nbsp; &nbsp;&nbsp; &nbsp;</td>
            <td>Mp-Asi&nbsp; &nbsp;&nbsp; &nbsp;</td>
            <td>Status Gizi</td>
            <td weidht="20%" height="175">imd&nbsp; &nbsp;</td>
            <td>Asi&nbsp; &nbsp;&nbsp; &nbsp;</td>
            <td>Mp-Asi&nbsp; &nbsp;&nbsp; &nbsp;</td>
            <td>Status Gizi</td>
        </tr>
    </table> -->
    <!-- <p>imd</p>Asi
    Mp-Asi
    <p>Status Gizi</p> -->
</marquee>
    </body>
</html>