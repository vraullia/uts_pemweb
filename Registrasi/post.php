<?php
        error_reporting(0);
       
        if(isset($_POST["regis"])){
            $kegiatan = $_POST["kegiatan"];
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

            $query = "INSERT INTO seminar_a (kegiatan, nama, tempatlahir, tanggallahir, nohp, jeniskelamin, email, foto) 
                    VALUES ('$kegiatan', '$nama', '$tempatlahir', '$tanggallahir', '$nohp', '$jeniskelamin', '$email', '$foto')";
            mysqli_query($con,$query);
            echo "<script> alert ('Sukses Memasukkan Data')</script>";
            
        }
?>