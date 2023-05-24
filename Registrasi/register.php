<html>
<head>
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="title">Formulir Registrasi</div>
        <div class="content">
            <form action="post.php" method="post" enctype="multipart/form-data">
                <div class="input-inbox">
                    <span class="details">Pilih Kegiatan</span>
                    <select name="kegiatan">
                        <option value="Seminar A">Seminar A</option>
                        <option value="Seminar B">Seminar B</option>
                        <option value="Seminar C">Seminar C</option>
                    </select>
                </div>
                <div class="input-inbox">
                    <span class="details">Nama Lengkap</span>
                    <input type="text" name="nama">
                </div>
                <div class="input-inbox">
                    <span class="details">Tempat Lahir</span>
                    <input type="text" name="tempatlahir">
                </div>
                <div class="input-inbox">
                    <span class="details">Tanggal Lahir</span>
                    <input type="date" name="tanggallahir">
                </div>
                <div class="input-inbox">
                    <span class="details">No HP</span>
                    <input type="number" name="nohp">
                </div>
                <div class="jeniskelamin">
                    <span class="details">Jenis Kelamin</span>
                    <input type="radio" name="jkelamin" value="Laki-Laki">Pria
                    <input type="radio" name="jkelamin" value="Perempuan">Wanita
                </div>
                <div class="input-inbox">
                    <span class="details">Email</span>
                    <input type="text" name="email" placeholder="Masukkan Email">
                </div>
                <div class="input-inbox">
                    <span class="details">Foto</span>
                    <input type="file" name="foto" placeholder="Masukkan Foto">
                </div>
                <div class="daftar">
                    <input type="submit" onclick="" name="regis" value="Daftar">
                </div>
                <div class="kembali">
                    <a href="/UTS/Dashboard/manajemen.php">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>