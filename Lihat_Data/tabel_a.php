<?php
        $db = new mysqli("localhost","root","","uts");
        $result = $db->query("SELECT * FROM seminar_a");
        $db->close();
?>
    <head>
    <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div class="logo">
            <span class="logo-name">Seminar A</span>
        </div>

        <a href="/UTS/Dashboard/dashboard.php" class="btn-kembali">Kembali</a>

    <div id="TabelDataPendaftaran">
        <table class="tabel">
            <tr bgcolor="white" style="text-align: center;">
                <th rowspan="2">Nama</th>
                <th colspan="2">Lahir</th>
                <th rowspan="2">No Hp</th>
                <th rowspan="2">Jenis Kelamin</th>
                <th rowspan="2">Email</th>
                <th rowspan="2">Foto</th>
            </tr>
            <tr bgcolor="white" style="text-align: center;">
                <th>Tempat</th>
                <th>Tanggal</th>
            </tr>

            <?php foreach($result as $row) { ?>
                <tr class="teks" style="text-align: center;"> 
                    <td><?php echo $row["nama"]?></td>
                    <td><?php echo $row["tempatlahir"]?></td>
                    <td><?php echo $row["tanggallahir"]?></td>
                    <td><?php echo $row["nohp"]?></td>
                    <td><?php echo $row["jeniskelamin"]?></td>
                    <td><?php echo $row["email"]?></td>
                    <td><img src="/UTS/Registrasi/file/<?php echo $row["foto"];?>"width="100" height="90"></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    </body>
   