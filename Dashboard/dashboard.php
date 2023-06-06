
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Kegiatan Seminar</title>
    <link rel="stylesheet" href="dashboard4.css"/>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>

</head>

<body>
    <nav class="navbar bg-dark " data-bs-theme="dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">Daftar Kegiatan</a>
            <div class="logo-log">
                <button class="btn btn-danger">
                    <a href="/UTS3/index.php" data-toggle="tooltip" class="log">Log Out <i class="bx bx-exit"></i></a>
                </button>
            </div>
        </div>
    </nav>

    <section class="overlay"></section>
    <section class="sec">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kegiatan</th>
                    <th scope="col">Pilihan</th>

            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td colspan="">Seminar A</td>
                    <td>
                        <button class="btn btn-primary">
                            <a href=" /UTS3/Lihat_Data/tabel_a.php" data-toggle="tooltip" class="data"><i class="material-icons">&#xE417;</i> Lihat Daftar</a>
                        </button>
                        <button class="btn btn-success">
                            <a href="/UTS3/Registrasi/regis_a.php" data-toggle="tooltip" class="regis"><i class="material-icons">&#xE254;</i> Registrasi</a>
                        </button>

                    </td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Seminar B</td>
                    <td>
                        <button class="btn btn-primary">
                            <a href=" /UTS3/Lihat_Data/tabel_b.php" data-toggle="tooltip" class="data"><i class="material-icons">&#xE417;</i> Lihat Daftar</a>
                        </button>
                        <button class="btn btn-success">
                            <a href="/UTS3/Registrasi/regis_b.php" data-toggle="tooltip" class="regis"><i class="material-icons">&#xE254;</i> Registrasi</a>
                        </button>
                    </td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Seminar C</td>
                    <td>
                        <button class="btn btn-primary">
                            <a href=" /UTS3/Lihat_Data/tabel_c.php" data-toggle="tooltip" class="data"><i class="material-icons">&#xE417;</i> Lihat Daftar</a>
                        </button>
                        <button class="btn btn-success">
                            <a href="/UTS3/Registrasi/regis_c.php" data-toggle="tooltip" class="regis"><i class="material-icons">&#xE254;</i> Registrasi</a>
                        </button>
                    </td>

                </tr>
            </tbody>
        </table>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>

</html>