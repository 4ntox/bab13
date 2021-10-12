<?php

require_once ("koneksi.php");
$query = "SELECT `id_barang`, `nama_barang`, `jenis`, `satuan`, `stok` FROM `barang`";
$result = mysqli_query ($mysqli, $query);



// foreach ( $result as $data) {

    //     var_dump($data);
    //     echo "<br>" ."<br>"."barang : " .$data['nama_barang'];
    // }
    

?>


