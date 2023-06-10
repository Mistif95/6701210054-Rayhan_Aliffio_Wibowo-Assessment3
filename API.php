<?php
header('Content-Type: application/json; charset=utf8');

$koneksi = mysqli_connect("localhost", "root", "", "pakpatrick");

if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
    $sql = "SELECT * FROM villa";
    $query = mysqli_query($koneksi, $sql);
    $array_data = array();
    while ($data = mysqli_fetch_assoc($query)) {
        $array_data[] = $data;
    }
    echo json_encode($array_data, JSON_PRETTY_PRINT);
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $id = $_POST['id']; 
    $nama_villa = $_POST['nama_villa']; 
    $harga = $_POST['harga'];
    $ketersediaan = $_POST['ketersediaan'];
    $deskripsi = $_POST['deskripsi'];
    $sql = "INSERT INTO villa (id,nama_villa,harga,ketersediaan,deskripsi) VALUES('$id','$nama_villa','$harga','$ketersediaan','$deskripsi')";
    $cek = mysqli_query($koneksi, $sql);

    if ($cek) {
        $data = [
            'status' => "ヾ(≧▽≦*)o YAY"
        ];
        echo json_encode([$data], JSON_PRETTY_PRINT);
    } else {
        $data = [
            'status' => "(っ °Д °;)っ NAY"
        ];
        echo json_encode([$data], JSON_PRETTY_PRINT);
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') { 
    $id = $_GET['id']; 
    $sql = "DELETE FROM villa WHERE id='$id'";
    $cek = mysqli_query($koneksi, $sql);

    if ($cek) {
        $data = [
            'status' => "ヾ(≧▽≦*)o YAY"
        ];
        echo json_encode([$data], JSON_PRETTY_PRINT);
    } else {
        $data = [
            'status' => "(っ °Д °;)っ NAY"
        ];
        echo json_encode([$data], JSON_PRETTY_PRINT);
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'PUT') { 
    $id = $_GET['id']; 
    $nama_villa = $_GET['nama_villa'];
    $harga = $_GET['harga'];
    $ketersediaan = $_GET['ketersediaan'];
    $deskripsi = $_GET['deskripsi'];

    $sql = "UPDATE villa SET nama_villa='$nama_villa', harga='$harga', ketersediaan='$ketersediaan', deskripsi='$deskripsi' WHERE id='$id'";
    $cek = mysqli_query($koneksi, $sql);

    if ($cek) {
        $data = [
            'status' => "ヾ(≧▽≦*)o YAY"
        ];
        echo json_encode([$data], JSON_PRETTY_PRINT);
    } else {
        $data = [
            'status' => "(っ °Д °;)っ NAY"
        ];
        echo json_encode([$data], JSON_PRETTY_PRINT);
    }
}
?>
