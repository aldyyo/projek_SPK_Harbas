<?php
if (isset($_POST['action'])) {
    select();
}

function select() {
    include("connection.php");
    include("topsis.php");

    // run query
    $query = "SELECT * FROM data_mentah";
    $hasil = mysqli_query($con, $query);

    $ranking = array();

    // look through query
    while ($row = mysqli_fetch_array($hasil)) {
        //add each row returned into an array
        $ranking[] = [
            $row['id'],
            $row['nama'],
            $row['sekolah'],
            $row['tanggungan'],
            $row['penghasilan'],
            $row['status']
        ];
    }

    $result = array();

    //Hitung
    $result = topsis($ranking);

    $counter = 1;
    foreach ($result as $row) {
        $nama = $row[0];
        $score = $row[1];
        $id = 'KEL4' . sprintf("%02d", $counter) . strtoupper(substr($nama, 0, 3));
        $counter++;
        // Masukkin ke database
        $sql = "INSERT INTO rank_tb (id, nama, score) VALUES ('$id', '$nama', '$score')";
        mysqli_query($con, $sql);
    }

    mysqli_close($con);
    exit;
}
?>