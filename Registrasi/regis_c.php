<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Formulir Registrasi Seminar </title>
    <link rel="stylesheet" href="stylereg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Formulir Registrasi</div>
    <div class="content">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nama Lengkap</span>
            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" required>
          </div>
          <div class="input-box">
            <span class="details">Tempat Lahir</span>
            <input type="text" name="tempatlahir" placeholder="Masukkan Tempat Lahir" required>
          </div>
          <div class="input-box">
            <span class="details">Tanggal Lahir</span>
            <input type="date" name="tanggallahir" placeholder="Masukkan Tanggal Lahir" required>
          </div>
          <div class="input-box">
            <span class="details">No HP</span>
            <input type="number" name="nohp" placeholder="Masukkan Nomor HP" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Masukkan Email" required>
          </div>
          <div class="input-box">
            <span class="details">Foto</span>
            <input type="file" name="foto" placeholder="Masukkan Foto" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="jkelamin" value="Laki-Laki" id="dot-1" placeholder="Pilih Jenis Kelamin" required>
          <input type="radio" name="jkelamin" value="Perempuan" id="dot-2" placeholder="Pilih Jenis Kelamin" required>
          <span class="gender-title">Jenis Kelamin</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Laki-Laki</span>
            </label>

            <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Perempuan</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="register" value="Daftar" >
        </div>
        <div class="button">
          <a href="/UTS3/Dashboard/dashboard.php">
            <input type="button" name="kembali" value="Kembali">  
          </a>
        </div>
      </form>
    </div>
  </div>

  <?php

        error_reporting(0);
        $con = mysqli_connect("localhost","root","","uts");
       
        if(isset($_POST["register"])){
            $nama = $_POST["nama"];
            $tempatlahir = $_POST["tempatlahir"];
            $tanggallahir = $_POST["tanggallahir"];
            $nohp = $_POST["nohp"];
            $jeniskelamin = $_POST["jkelamin"];
            $email = $_POST["email"];
            $foto = $_POST["foto"];
            $foto = $_FILES["foto"]["name"];
            $tempname = $_FILES["foto"]["tmp_name"];
            $folder = "file/".$foto;
            move_uploaded_file($tempname, $folder);

            $select = " SELECT email FROM seminar_c WHERE email = '$email' ";
            $result = mysqli_query($con, $select);

            if (mysqli_num_rows($result) > 0){

                echo "<script>alert('Email Sudah Terdaftar')</script>";

            }else{
              $insert = "INSERT INTO seminar_c (nama, tempatlahir, tanggallahir, nohp, jeniskelamin, email, foto) 
                    VALUES ('$nama', '$tempatlahir', '$tanggallahir', '$nohp', '$jeniskelamin', '$email', '$foto') ";
              mysqli_query($con, $insert);
              header('location: /UTS3/Dashboard/dashboard.php');
            }
        }
?>

</body>
</html>