<?php
// Data barang
$barang = array(
    array("Minyak Telon", 1, 20, 30000),
    array("Diapers", 2, 15, 51000),
    array("Baby Oil", 3, 10, 16000),
    array("Shampo Baby", 4, 18, 20000),
    array("Bedak", 5, 15, 15000),
    array("Baju Bayi", 6, 20, 35500),
    array("Jumper", 7, 25, 50000)
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
