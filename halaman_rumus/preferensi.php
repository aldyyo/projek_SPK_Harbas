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

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/style.css">

    <!-- Script untuk bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


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
    <!-- bootstrap data table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <!-- Page Wrapper -->
    <div class="maincontent-wrapper d-flex">
        <!-- Sidebar -->
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
        <!-- Div Konten Utama Web -->
        <div class="content" style="margin: 20px;">

            <!-- Topbar default bootstrap -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="normalisasi.php">Normalisasi</a>
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
                    <a class="nav-link active" aria-current="page" href="preferensi.php">Preferensi</a>
                </li>
            </ul>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <!-- Content 1 -->
            <div class="shadow p-3 mb-5 bg-white rounded">
                <h2><b>Penyelesaian masalah dengan TOPSIS:</b></h2>
                <h4>
                    <ol type="1">
                        <li>Membuat matriks keputusan yang ternormalisasi.</li>
                        <li>Membuat matriks keputusan yang ternormalisasi terbobot.</li>
                        <li>Menentukan matriks solusi ideal positif & matriks solusi ideal negatif.</li>
                        <li>Menentukan jarak antara nilai setiap alternatif dengan matriks solusi ideal positif &
                            matriks solusi ideal negatif.</li>
                        <b>
                            <li>Menentukan nilai preferensi untuk setiap alternatif.</li>
                        </b>
                    </ol>
                </h4>
            </div>

            <!-- Content 2 -->
            <div id="sip-wrapper" class="shadow p-3 mb-5 bg-white rounded" style="background-color: grey;">
                <h1 style="text-align: center;">Nilai Preferensi</h1>
                <p>Nilai preferensi adalah nilai yang akan menjadi penentu dalam menentukan
                    peringkat siswa. Nilai preferensi dilambangkan dengan V. Nilai V didapat dari
                    perbandingan antara jarak terhadap solusi ideal negatif dengan jumlah jarak
                    terhadap solusi ideal positif dan negatif.</p>
                <div class="row" style="margin: 20px;">
                    <div id="formula-normalisasi" style="overflow-x:auto;">
                        Rumus untuk Nilai Preferensi : $$ {V_{t}=\frac{D_i^-}{D_i^-+{D_i^+}}}$$
                    </div>
                    <div>
                        <ul>
                            <li>𝑉𝑡 = Nilai Preferensi</li>
                            <li>𝐷𝑖− = Jarak terhadap solusi ideal negatif.</li>
                            <li>𝐷𝑖 += Jarak terhadap solusi ideal positif.</li>
                        </ul>
                    </div>
                    <div style="padding-left: 20px;">
                    </div>
                </div>

                Maka matriks Preferensi adalah sebagai berikut :

                <div class="row" style="margin: 20px;">
                    <div class="column">
                        $$ {
                        V_{t} = (V_{1},V_{2},V_{3},V_{4},V_{n})
                        } $$
                    </div>
                </div>
                <a href="../perangkingan.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Ranking</a>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
</body>

</html>