<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SPK Kelompok 4</title>

    <!-- Custom font untuk web-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/6dd0d33a7f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Script untuk bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Script DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <!-- Link untuk membuat Rumus menggunakan MathJax-->
    <script>
        MathJax = {
            tex: {
                inlineMath: [
                    ['$', '$'],
                    ['\\(', '\\)']
                ]
            },
            svg: {
                fontCache: 'global'
            }
        };
    </script>
    <script type="text/javascript" src="path-to-MathJax/MathJax.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
    </script>
</head>

<body id="page-top">

    <!-- Script untuk bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Wrapper -->
    <div class="maincontent-wrapper d-flex">
        <!-- Sidebart Wrapper -->
        <div class="sidebar" id="side_nav">
            <div class="header-box px-3 pt-4 pb-4">
                <h1 class="fs-4" id="fs-4">
                    <span class="bg-white text-dark rounded shadow px-2">SPK</span>
                    <span class="text-white">Bantuan Yatim Piatu</span>
                </h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-white">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
            </div>
            <ul class="list-unstyled px-2">
                <li class=""><a href="index.php" class="text-decoration-none px-3 py-2 d-block">Home</a></li>
                <li class=""><a href="data.php" class="text-decoration-none px-3 py-2 d-block">Data</a></li>
                <li class=""><a href="halaman_rumus/normalisasi.php" class="text-decoration-none px-3 py-2 d-block">Rumus</a></li>
                <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block">Ranking</a></li>
                <!-- <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block">Menu3</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block">Menu4</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block">Menu5</a></li> -->
            </ul>

            <hr class="h-color mx-3">
            <!-- <ul class="list-unstyled px-2">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block">Settings</a></li>
            </ul> -->
        </div>

        <!-- Begin Wrapper Konten Utama Web -->
        <div class="content" style="margin: 20px;">

            <!-- Topbar default bootstrap -->
            <nav class="navbar bg-dark shadow p-3 mb-5 bg-white rounded" id="navbar">
                <a style="font-size: 2rem;">Ranking</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </button>
                <!-- Collapse Topbar Bootstrap -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Rumus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ranking</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Isi Konten Web-->
            <div class="container-fluid">
                <h3>Bantuan Yatim Piatu</h3>
                <p style="text-align: justify;">Dari data anak yatim atau piatu yang telah diperoleh lalu dilakukan konversi agar dapat diseleksi dengan 
                    menggunakan sistem pendukung keputusan berbasis web ini, yang mana hasil akhir dari data tersebut berupa 
                    tabel perangkingan sebagai rekomendasi untuk para calon penerima bantuan, sehingga dapat dipilih dari 3 
                    teratas pada tabel perangkingan untuk calon anggota yang menerima bantuan.</p>
                <!-- Content Row -->
                <div class="row" style="margin: 20px;">
                    <h4>Berikut adalah tabel Perangkingan :</h4>
                    <!-- Buat Table dengan Datatable  -->
                    <table class="table table-striped p-5">
                        <thead>
                            <tr>
                                <th scope="col">Ranking</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Ambil data dari database -->
                            <?php
                            include("connection.php");

                            // Tampilin data
                            $query = "SELECT * FROM rank_tb";
                            $hasil = mysqli_query($con, $query);

                            $i = 1;
                            if (mysqli_num_rows($hasil) > 0) {

                                // query return setidaknya 1 row
                                // Loop result dan proses row nya
                                while ($row = mysqli_fetch_array($hasil)) {
                                    $id = $row['id'];
                                    $nama = $row['nama'];
                                    echo "<tr><td>" . $i++ . "</td>";
                                    echo "<td>" . $id . "</td>";
                                    echo "<td>" . $nama . "</td>";
                                }
                            } else {
                                // Tidak menemukan rows / tidak ada data.
                                echo 'No matching rows found';
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- Button Refresh -->
                    <input type="submit" class="button" name="update" value="Refresh" />
                </div>
                <!-- End of Main Content -->

                <h3>Kesimpulan</h3>
                <p style="text-align: justify;">
                Dengan dikembangkannya sistem ini harapannya dapat menentukan pemilihan bantuan untuk anak yatim 
                atau piatu yang tepat sasaran sehingga tidak adalagi oknum-oknum yang dapat melakukan kecurangan.</p>
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

</body>

</html>

<!-- Script Data DataTable Dengan ajax -->
<script>
    $(document).ready(function() {
        $('.button').click(function() {
            var clickBtnValue = $(this).val();
            var ajaxurl = 'ajax.php',
                data = {
                    'action': clickBtnValue
                };
            $.post(ajaxurl, data, function(response) {
                // Response div goes here.
                alert("Berhasil Terupdate");
                location.reload()
            });
        });
    });
</script>