<?php
include("../connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="../tabel.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPK Kelompok 4</title>

    <!-- Custom font untuk web-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/6dd0d33a7f.js" crossorigin="anonymous"></script>

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <!-- Script untuk bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Link untuk membuat Rumus menggunakan MathJax-->
    <script>
        MathJax = {
            tex: {
                inlineMath: [['$', '$'], ['\\(', '\\)']]
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
    <!-- bootstrap data table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <!-- Page Wrapper -->
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
                <li class=""><a href="../index.php" class="text-decoration-none px-3 py-2 d-block">Home</a></li>
                <li class=""><a href="../data.php" class="text-decoration-none px-3 py-2 d-block">Data</a></li>
                <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block">Rumus</a></li>
                <li class=""><a href="../perangkingan.php" class="text-decoration-none px-3 py-2 d-block">Ranking</a></li>
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
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Normalisasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ternormalisasi.php">Ternormalisasi Terbobot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="solusi_ideal.php">Solusi Ideal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jarak.php">Jarak Solusi Ideal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="preferensi.php">Preferensi</a>
                </li>
            </ul>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <!-- Content 1 -->
            <div class="shadow p-3 mb-5 bg-white rounded">
                <h2><b>Penyelesaian masalah dengan TOPSIS:</b></h2>
                <h4>
                    <ol type="1">
                        <b>
                            <li>Membuat matriks keputusan yang ternormalisasi.</li>
                        </b>
                        <li>Membuat matriks keputusan yang ternormalisasi terbobot.</li>
                        <li>Menentukan matriks solusi ideal positif & matriks solusi ideal negatif.</li>
                        <li>Menentukan jarak antara nilai setiap alternatif dengan matriks solusi ideal positif &
                            matriks solusi ideal negatif.</li>
                        <li>Menentukan nilai preferensi untuk setiap alternatif.</li>
                    </ol>
                </h4>
            </div>

            <!-- Content 2 -->
            <div id="normalisasi-wrapper" class="shadow p-3 mb-5 bg-white rounded" style="background-color: grey;">
                <h1 style="text-align: center;">Normalisasi</h1>
                <p>Normalisai dilakukan pada setiap atribut matriks tersebut. Normalisasi pada
                    setiap atribut matriks keputusan dilakukan dengan cara membandingkan
                    setiap atribut pada suatu alternatif dengan akar jumlah kuadrat setiap elemen
                    pada kriteria yang sama pada semua alternatif. Berikut adalah persamaan
                    untuk melakukan normalisai pada setiap atribut matriks keputusan</p>
                <div class="row" style="margin: 20px;">
                    <!-- Rumus normalisasi dengan MathJax -->
                    <!-- <h2>Rumus untuk Normalisasi = </h2> -->
                    <div id="formula-normalisasi" style="overflow-x:auto;">
                        Rumus untuk Normalisasi : $$ {r_{ij} = \frac{x_{ij}}{\sqrt{\sum_{i_{=1}}^m}x_{ij}^2}}$$
                    </div>
                    <div>
                        <ul>
                            <li>r = Atribut yang telah ternormalisasi</li>
                            <li>i = 1,2,...m</li>
                            <li>j = 1,2,...n</li>
                            <li>x = Alternatif</li>
                            <li>m = Banyak Siswa</li>
                        </ul>
                    </div>
                    <div style="padding-left: 20px;">
                    </div>
                    <!-- /.container-fluid -->
                </div>
                Maka matriks Normalisasi adalah sebagai berikut :
                <div class="row" style="margin: 20px;">
                    <div class="column">
                        $$ {
                        r = \left(\begin{array}{c}
                        r_{1,1} & r_{1,2} & r_{1,3} & r_{...}& r_{1,j} & r_{1,n}\\
                        r_{2,1} & r_{2,2} & r_{2,3} & r_{...}& r_{2,j} & r_{2,n}\\
                        r_{1...} & r_{...} & r_{...} & r_{...}& r_{...} & r_{...}\\
                        r_{i,1} & r_{i,2} & r_{i,3} & r_{...}& r_{i,j} & r_{i,n}\\
                        r_{m,1} & r_{m,1} & r_{m,1} & r_{...}& r_{m,j} & r_{m,n}
                        \end{array}\right)
                        } $$
                    </div>
                </div>
                <h4>Berikut adalah Tabel Normalisasi :</h4>
                <!-- Manggil Datatable dari js -->
                <table id="tabel_normalisasi" class="display hover" width="100%"></table>
                <script>
                    js_normalisasi();
                </script>
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

        <!-- Script Data DataTable -->
        <script>
            $(document).ready(function () {
                $('#table-data-normalisasi').DataTable();
            });
        </script>
</body>

</html>