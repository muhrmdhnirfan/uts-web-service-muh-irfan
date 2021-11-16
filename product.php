<?php
//koneksi database
require_once('connection.php');

//method GET & GET by id menggunakan kondisi if else
if (empty($_GET)) {
    $sql = "SELECT * FROM product";
    $query = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($query)) {


        //tampung dalam data array 
        $item[] = array(
            'nama' => $row["nama"],
            'model' => $row["model"],
            'harga' => $row["harga"],
            'id' => $row["id"],
            'Links' => [
                "product : http://localhost/learnapi/karyawan.php"
            ]

        );
    }
    $response = array(
        'took' => 1.982,
        'status' => 200,
        'data' => $item,

    );
    //membuat bentuk reponse dalam bentuk format json 
    echo json_encode($response);
} else {
    $sql = "SELECT * FROM product WHERE id=" . $_GET["id"];
    $query = mysqli_query($connection, $sql);
    //mengambil baris hasil sebagai array asosiatif (case -sensitive)
    while ($row = $query->fetch_assoc()) {


        //tampung dalam data array 
        $item[] = array(
            'nama' => $row["nama"],
            'model' => $row["model"],
            'harga' => $row["harga"],
            'id' => $row["id"],
            'Links' => [
                "product : http://localhost/learnapi/karyawan.php"
            ]
        );
    }
    $result = array(
        'took' => 0.231,
        'status' => 202,
        'data' => $item

    );
    echo json_encode($result);
}
