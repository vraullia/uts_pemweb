<?php
        $db = new mysqli("localhost","root","","uts");
        $result = $db->query("SELECT * FROM seminar_b");
        $db->close();
?>
    <head>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar bg-dark " data-bs-theme="dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">Seminar B</a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> -->
            <!-- <span class="navbar-toggler-icon"></span> -->
            <div class="logo-log">
                <button class="btn btn-warning">
                    <a class="kembali" style="color:black;" href="/UTS3/Dashboard/dashboard.php" data-toggle="tooltip" class="log">Kembali<i class="bx bx-exit"></i></a>
                </button>
            </div>
            </div>
    </nav>

    <div id="TabelDataPendaftaran">
    <table  class="table table-bordered table-light">
            <tr bgcolor="white" style="text-align: center;">
                <th rowspan="2" class="table-secondary">Nama</th>
                <th colspan="2" class="table-secondary">Lahir</th>
                <th rowspan="2" class="table-secondary">No Hp</th>
                <th rowspan="2" class="table-secondary">Jenis Kelamin</th>
                <th rowspan="2" class="table-secondary">Email</th>
                <th rowspan="2" class="table-secondary">Foto</th>
            </tr>
            <tr bgcolor="white" style="text-align: center;">
                <th class="table-secondary">Tempat</th>
                <th class="table-secondary">Tanggal</th>
            </tr>

            <?php foreach($result as $row) { ?>
                <tr class="teks" style="text-align: center;"> 
                    <td><?php echo $row["nama"]?></td>
                    <td><?php echo $row["tempatlahir"]?></td>
                    <td><?php echo $row["tanggallahir"]?></td>
                    <td><?php echo $row["nohp"]?></td>
                    <td><?php echo $row["jeniskelamin"]?></td>
                    <td><?php echo $row["email"]?></td>
                    <td><img src="/UTS3/Registrasi/file/<?php echo $row["foto"];?>"width="100" height="90"></td>
                </tr>
            <?php } ?>

            <!-- <a href="/UTS3/Dashboard/dashboard.php">Kembali</a> -->
        </table>
    </div>