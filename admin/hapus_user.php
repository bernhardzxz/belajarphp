<?php
    include 'config.php';
    $id=$_GET["id"];
    $query=$koneksi->query($query);
    if ($hasil){
        ?>
            <script language="javascript"> 
                alert("Data Berhasil Dihapus !");
                document.location="dashboard.php?dashboard=data_user";
            </script>
        <?php
    }   
?>