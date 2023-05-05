<?php

function topsis($nilai) {

    $nama_nilai = array();
    foreach($nilai as $row) {
        $nama_nilai[] = $row[1];
    }// print_r($nama_nilai);
    
    // Bobot
    $bobot_nilai = array(0.1, 0.2, 0.4, 0.3);
    
    // Alternatif yg dihitung
    $alternatif = [];
    foreach ($nilai as $row) {
        // 0. Sekolah
        // 1. Tanggungan
        // 2. Penghasilan
        // 3. Status
        $alternatif[] = [$row[2], $row[3], $row[4], $row[5]];
    }

    foreach ($alternatif as $i => $alt) {
        $alternatif[$i] = array_slice($alt, 0, 4);
    }// print_r($alternatif);
    
    // Hitung Normalisasi
    $normalisasi = [];

    foreach ($alternatif as $i => $alt) {

        foreach ($alt as $j => $val) {

            $columnSum = 0;

            foreach (array_column($alternatif, $j) as $columnVal) {
                $columnSum += $columnVal;
            }
            
            $normalisasi[$i][$j] = 0;

            if ($val != 0) {
                $normalisasi[$i][$j] = $val / sqrt(pow($columnSum, 2));
            }
        }
    }// print_r($normalisasi);
    

    // Hitung dengan bobot
    $normalisasi_bobot = [];
    foreach($normalisasi as $i => $alt) {
        foreach($alt as $j => $value) {
            $normalisasi_bobot[$i][$j] = $value * $bobot_nilai[$j];
        }
    }// print_r($normalisasi_bobot);

    // Hitung ideal positif
    $positiveIdeal = [];
    for ($i = 0; $i < 4; $i++) {
        $positiveIdeal[$i] = max(array_column($normalisasi_bobot, $i));
    }

    // Hitung ideal negatif
    $negativeIdeal = [];
    for ($i = 0; $i < 4; $i++) {
        $negativeIdeal[$i] = min(array_column($normalisasi_bobot, $i));
    }

    // Hitung solusi ideal
    $solusi_ideal = [];
    foreach ($normalisasi_bobot as $i => $row) {
        $sp = 0;
        $sn = 0;
        foreach ($row as $j => $val) {
            $sp += sqrt(pow($val - $positiveIdeal[$j], 2));
            $sn += sqrt(pow($val - $negativeIdeal[$j], 2));
        }
        $solusi_ideal[] = [$sp, $sn];
    }// print_r($solusi_ideal);

    // Pembulatan Nilai
    $solusi_ideal = array_map(function($innerArray) {
        return array_map(function($number) {
            return number_format($number, 10);
        }, $innerArray);
    }, $solusi_ideal);
    // print_r($solusi_ideal);

    // Hitung nilai alternatif dan gabung dengan namanya
    $result = array_map(function($innerArray, $nama) {
        return [$nama, $innerArray[1] / array_sum($innerArray)];
    }, $solusi_ideal, $nama_nilai);
    // print_r($result);
    
    // Sorting Data
    usort($result, function($a, $b) {
        return $b[1] <=> $a[1];
    });
    
    return $result;
}
?>