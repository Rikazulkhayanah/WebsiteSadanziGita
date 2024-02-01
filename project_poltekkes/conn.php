<?php
$host ="localhost";
$user ="root";
$pass ="";
$database ="db_poltekkes";



$conn=mysqli_connect($host, $user, $pass);
if($conn){
   $buka =mysqli_select_db($conn, $database);
   //echo "Succesfull"; 
   if (!$buka){
     echo "Databases Not connecting";
   }
}else{
    echo "MySql tidak terhubung";
       
}

//daftar
if(isset($_POST['registrasi'])){
  //jika tombol register di klik maka 

  $id_user     = $_POST['id_reg'];  
  $username    = $_POST['username'];
  $no          = $_POST['no_hp'];
  $alamat      = $_POST['alamat'];
  $password    = $_POST['password']; //pure inputan blm di enkripsi

  //fungsi enskripsi
  $epassword = password_hash($password, PASSWORD_BCRYPT);

  //insert to db
  $insert = mysqli_query($conn,"INSERT INTO tb_reg (id_reg,username,no_hp,alamat,password) values ('$id_user', '$username','$no','$alamat','$epassword')");

  if($insert){
    //jika berhasil
   header('location:login.php'); //redirect ke halaman login 
   //echo "berhasil";
  }else{
  //jika gagal
  echo 
 '<script> 
     alert("register gagal");
     window.location.href = "register.php";
  </script>';
}
}


//login
//harus dideskripsi dulu
if(isset($_POST['login'])){
  //jika tombol login di klik maka 

  $username = $_POST['username'];
  $password = $_POST['password']; //pure inputan user-blm diesnkripsi-
  

  //insert to db
  $cekdb = mysqli_query($conn, "SELECT * FROM tb_reg where username='$username'"); //warna merah menunjukkan tabel di localhost
  $hitung = mysqli_num_rows($cekdb);
  $pw = mysqli_fetch_array($cekdb);
  $passwordsekarang = $pw['password'];
  if($hitung>0){
    //jika ada
    //verifikasi password 
    if(!password_verify($password, $passwordsekarang)){ //redirect ke halaman home 
      //jika password nya benar 
      header('location:dasboard.php'); 
    }else{
     //Jika Password salah
echo 
'<script>
   alert("Password salah");
   window.location.href = "register.php";
</script>';
}
}else{
//jika gagal
echo 
'<script>
 alert("login gagal");
 window.location.href = "register.php";
</script>';
}
}  
?>

