<?php
require_once('connection.php');

$nama = $_POST['nama'];
$model = $_POST['model'];
$harga = $_POST['harga'];


$sql = "INSERT INTO product(nama,model,harga) VALUES ('$nama','$model','$harga')";
$query = mysqli_query($connection, $sql);

if ($query) {
    echo json_encode(array(
        'took' => 0.21900,
        'code' => 202,
        'status' => 'Posting data sukses'
    ));
} else {
    echo json_encode(array(
        'took' => 0.273600,
        'code' => 505,
        'status' => 'gagal posting data'
    ));
}
