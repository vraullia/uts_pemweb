
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar Menu | Side Navigation Bar</title>
    <link rel="stylesheet" href="manajemen.css"/>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>

<body>
    <nav>
        <div class="logo">
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name">Menu</span>
        </div>
        <div class="sidebar">
            <div class="logo">
                <i class="bx bx-menu menu-icon"></i>
                <span class="logo-name">Menu</span>
            </div>
            <div class="sidebar-content">
                <ul class="lists">
                    <li class="list">
                        <a href="manajemen.php" class="nav-link">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="link">Daftar Kegiatan</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="overlay"></section>

    <script>
        const navBar = document.querySelector("nav"),
            menuBtns = document.querySelectorAll(".menu-icon"),
            overlay = document.querySelector(".overlay");

        menuBtns.forEach((menuBtn) => {
            menuBtn.addEventListener("click", () => {
                navBar.classList.toggle("open");
            });
        });

        overlay.addEventListener("click", () => {
            navBar.classList.remove("open");
        });
    </script>

    <?php
        $db = new mysqli("localhost","root","","uts");
        $result = $db->query("SELECT * FROM seminar_a");
        $db->close();

    ?>

    <table class="tabel">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kegiatan <i></i></th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Seminar A</td>
                        <td>
                            <a href="/UTS/Lihat_Data/viewtabel.php" data-toggle="tooltip"><i class="material-icons">&#xE417;</i>Lihat Daftar</a>
                            <a href="/UTS/Registrasi/register.php" data-toggle="tooltip"><i class="material-icons">&#xE254;</i>Registrasi</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Seminar B</td>
                        <td>
                            <a href="#" data-toggle="tooltip"><i class="material-icons">&#xE417;</i>Lihat Daftar</a>
                            <a href="#" data-toggle="tooltip"><i class="material-icons">&#xE254;</i>Registrasi</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Seminar C</td>
                        <td>
                            <a href="#" data-toggle="tooltip"><i class="material-icons">&#xE417;</i>Lihat Daftar</a>
                            <a href="#" data-toggle="tooltip"><i class="material-icons">&#xE254;</i>Registrasi</a>
                        </td>
                    </tr>
                </tbody>
            </table>
    </div>
</body>

</html>