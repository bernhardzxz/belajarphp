<?php
session_start();
include 'config.php';
$username = "";
$password = "";
if(isset($_POST["username"]) && isset($_POST["password"])){
    $un = $koneksi->real_escape_string($_POST["username"]);
    $pw = md5($koneksi->real_escape_string($_POST["password"]));
    $sql = "select * from tb_user where (username= '$un') and (password= '$pw')";
    $result = $koneksi->query($sql);
    if ($result->num_rows == 1){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_post["password"];
?>
        <script language = "JavaScript">
            document.location = "dashboard.php";
        </script>
    <?php
    } else {
    ?>
        <script language="JavaScript">
            alert("Terjadi Kesalahan pada username dan password")
            document.location = "index.php";
        </script>
    <?php
    }
}
?>