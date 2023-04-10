<?php
    $koneksi = new mysql("localhost", "root", "", "db_kelasti");
    if($koneksi -> connect_error){
        trigger_error('Koneksi ke database gagal: ' .$koneksi->connect_error, E_USER_ROOT);
    }
?>