<?php
include "koneksi.php";
        error_reporting(0);
       
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

            $con = mysqli_connect("localhost","root","","uts");

            $query = "INSERT INTO seminar_a (nama, tempatlahir, tanggallahir, nohp, jeniskelamin, email, foto) 
                    VALUES ('$nama', '$tempatlahir', '$tanggallahir', '$nohp', '$jeniskelamin', '$email', '$foto')";
            mysqli_query($con,$query);
            echo "<script> alert ('Sukses Memasukkan Data')</script>";
            
        }
?>