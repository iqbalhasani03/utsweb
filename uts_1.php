<?php
// Data barang
$barang = array(
    array( 1,"Pebsodent", 30, 10000),
    array( 2,"Sunlight", 15, 11000),
    array( 3,"Baygon", 10, 16000),
    array( 4,"Dove", 20, 22000),
    array( 5,"Rinso", 20, 20000),
    array( 6,"Downy", 15, 12000),
    array( 7,"Le Minerale", 25, 5000)
);

// Fungsi untuk menghitung total jumlah
function hitungTotalJumlah($barang) {
    $totalJumlah = 0;
    foreach ($barang as $item) {
        $totalJumlah += $item[3];
    }
    return $totalJumlah;
}

// Hitung total jumlah
$totalJumlah = hitungTotalJumlah($barang);

$diskon = 0;
if ($totalJumlah >= 200000) {
    $diskon = 0.2; // 20%
} elseif ($totalJumlah >= 150000) {
    $diskon = 0.1; // 10%
}


$totalBayar = $totalJumlah - ($totalJumlah * $diskon);


echo "<table border='1'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";
foreach ($barang as $item) {
    echo "<tr>";
    echo "<td>" . $item[0] . "</td>";
    echo "<td>" . $item[1] . "</td>";
    echo "<td>" . $item[2] . "</td>";
    echo "<td>" . $item[3] . "</td>";
    echo "<td>" . $item[2] * $item[3] . "</td>";
    echo "</tr>";
}

    echo "</table>";

    echo "a. Total Jumlah: " . $totalJumlah . " Rupiah<br>";
    echo "b. Total Bayar (setelah diskon " . ($diskon * 100) . "%): " . $totalBayar . " Rupiah";
?>