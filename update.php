<?php
require_once('connection.php');
//php tidak menyediakan fitur PUT jadi pakai parse
parse_str(file_get_contents('php://input'), $value);


$id = $value['id'];
$nama = $value['nama'];
$model = $value['model'];
$harga = $value['harga'];



//customers ialah nama tabel 
$sql = "UPDATE product SET nama='$nama', model='$model', harga='$harga' WHERE id ='$id'"; //where untuk mendeklarasikan identitas 
$query = mysqli_query($connection, $sql);

if ($query) {
    echo json_encode(array(
        'took' => 0.26000,
        'code' => 204,
        'status' => 'ubah data sukses!'
    ));
} else {
    echo json_encode(array(
        'took' => 0.0676,
        'code' => 509,
        'status' => 'gagal!'
    ));
}
