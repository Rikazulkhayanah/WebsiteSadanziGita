<?php
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Gizi</title>
    <script>
        alert("Selamat datang admin semoga harimu diberkahi :)");
        function sayhello() {
            alert("hello");
        }
    </script>
    <style>
    .simpan{
    display: inline-block;
    width: 100px;
    background-color: rgba(23, 115, 168, 1);
    border-color: none;
    margin-right: 5px;
    text-align: center;
    text-decoration: none;
    border: 1px solid black;
    transition: all 0.5s;
    color:white;
  }
  .simpan:hover {
    color: rgba(23, 115, 168, 1);
    background-color: lightblue;
    cursor: pointer;
    scale: 1.1;
  }

  .reset{
    display: inline-block;
    width: 100px;
    background-color: rgba(23, 115, 168, 1);
    border-color: none;
    margin-right: 5px;
    text-align: center;
    text-decoration: none;
    border: 1px solid black;
    transition: all 0.5s;
    color:white;
  }
  .reset:hover {
    color: rgba(23, 115, 168, 1);
    background-color: lightblue;
    cursor: pointer;
    scale: 1.1;
  }

  .kembali{
    display: inline-block;
    width: 100px;
    background-color: rgba(23, 115, 168, 1);
    border-color: none;
    margin-right: 5px;
    text-align: center;
    text-decoration: none;
    border: 1px solid black;
    transition: all 0.5s;
    color:white;
  }
  .kembali:hover {
    color: rgba(23, 115, 168, 1);
    background-color: lightblue;
    cursor: pointer;
    scale: 1.1;
  }
  .simpan1{
    display: inline-block;
    width: 100px;
    background-color: rgba(255, 105, 180, 1 );
    border-color: none;
    margin-right: 5px;
    text-align: center;
    text-decoration: none;
    border: 1px solid black;
    transition: all 0.5s;
    color:white;
  }
  .simpan1:hover {
    color: rgba(255, 105, 180, 1 );
    background-color: lightpink;
    cursor: pointer;
    scale: 1.1;
  }

  .reset1{
    display: inline-block;
    width: 100px;
    background-color: rgba(255, 105, 180, 1 );
    border-color: none;
    margin-right: 5px;
    text-align: center;
    text-decoration: none;
    border: 1px solid black;
    transition: all 0.5s;
    color:white;
  }
  .reset1:hover {
    color: rgba(255, 105, 180, 1 );
    background-color: lightpink;
    cursor: pointer;
    scale: 1.1;
  }

  .kembali1{
    display: inline-block;
    width: 100px;
    background-color: rgba(255, 105, 180, 1 );
    border-color: none;
    margin-right: 5px;
    text-align: center;
    text-decoration: none;
    border: 1px solid black;
    transition: all 0.5s;
    color:white;
  }
  .kembali1:hover {
    color: rgba(23, 115, 168, 1);
    background-color: lightpink;
    cursor: pointer;
    scale: 1.1;
  }
    </style>
</head>

<body>
        <form action="simpandata_pagu.php" method="post"> 
        <table border="10" align="center" style="color: rgba(23, 115, 168, 1);" width="70%">
            <tr>
                <td width="100%" colspan="6">
                    <H2 align="center" style="color: rgba(23, 115, 168, 1);">Status gizi bayi laki-laki</H2>
                </td>
            </tr>
                <tr>
                <td>Nama</td>
                <td> : </td>
                <td>
                    <input name="nama" size="20">
                </td>
                <td>Jenis Kelamin</td>
                <td> : </td>
                <td>
                    <input name="pic" size="20">
                </td>
            </tr>
            <tr>
            <tr>
                <td>Berat badan</td>
                <td> : </td>
                <td>
                    <input name="brtbdn" size="20">
                </td>
                <td>Tinggi badan</td>
                <td> : </td>
                <td>
                    <input name="tinggi" size="20">
                </td>

        </table>
        </pre>
                       <p align="center"> <input type="Submit" name="simpan" value="Cek gizi" class="simpan"></a>
                    <input type="reset" value="Ulang" class="reset">
                    <input type="button" class="kembali" name="kembali" value="Kembali" onclick="self.history.back()">
                <td width="50%">
                
                    <pre>
         </tr> 
        </pre> 
        <table border="10" align="center" style="color: rgba(255, 20, 147, 1 );" width="70%">
            <tr>
                <td width="100%" colspan="6">
                    <H2 align="center" style="color: rgba(255, 20, 147, 1 );">Status gizi bayi perempuan</H2>
                </td>
            </tr>
                <tr>
                <td>Nama</td>
                <td> : </td>
                <td>
                    <input name="nama" size="20">
                </td>
                <td>Jenis Kelamin</td>
                <td> : </td>
                <td>
                    <input name="pic" size="20">
                </td>
            </tr>
            <tr>
            <tr>
                <td>Berat badan</td>
                <td> : </td>
                <td>
                    <input name="brtbdn" size="20">
                </td>
                <td>Tinggi badan</td>
                <td> : </td>
                <td>
                    <input name="tinggi" size="20">
                </td>

        </table>
        </pre>
                    <p align="center"> <input type="Submit" name="simpan" value="Cek gizi" class="simpan1"></a>
                    <input type="reset" value="Ulang" class="reset1">
                    <input type="button" class="kembali1" name="kembali" value="Kembali" onclick="self.history.back()">
                <td width="50%">
                
                    <pre>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        function sum() {
            var x = document.getElementById('x').value;
            var y = document.getElementById('y').value;


            var result = parseInt(x) - parseInt(y);
            if (!isNaN(result)) {
                document.getElementById('z').value = result;
            }
        }
    </script>

</body>
</html>