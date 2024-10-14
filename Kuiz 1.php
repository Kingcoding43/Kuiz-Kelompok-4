<?php

function hitung_diskon($jumlah_bayar) {
    if ($jumlah_bayar >= 500000) {
        $diskon = 50;
    } elseif ($jumlah_bayar >= 100000) {
        $diskon = 10;
    } elseif ($jumlah_bayar >= 50000) {
        $diskon = 5;
    } else {
        $diskon = 0;
    }

    $total_diskon = ($jumlah_bayar * $diskon) / 100;
    $total_bayar = $jumlah_bayar - $total_diskon;

    return array('diskon' => $diskon, 'total_bayar' => $total_bayar);
}

$jumlah_bayar =500000;
$hasil = hitung_diskon($jumlah_bayar);

echo "Diskon: " . $hasil['diskon'] . "%\n";
echo "Total yang harus dibayar: Rp " . $hasil['total_bayar'] . "\n";
?>