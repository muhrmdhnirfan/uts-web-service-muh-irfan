<?php
//syntax untuk m
require_once('connection.php');

parse_str(file_get_contents('php://input'), $value);

$id = $value['id'];

//customers ialah nama tabel 
$sql = "DELETE FROM product WHERE id ='$id'"; //where untuk mendeklarasikan identitas 
$query = mysqli_query($connection, $sql);

if ($query) {
    echo json_encode(array(
        'took' => 0.987300,
        'code' => 209,
        'status' => 'data sukses dihapus'
    ));
} else {
    echo json_encode(array(
        'took' => 0.02699,
        'code' => 505,
        'status' => 'data gagal dihapus'
    ));
}
