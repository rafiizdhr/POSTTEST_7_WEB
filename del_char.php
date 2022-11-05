<!-- delete -->
<?php
    require "koneksi.php";

    $id = $_GET['id'];

    $kim = mysqli_query($conn, "SELECT gambar from characters WHERE id=$id");
    $kun = mysqli_fetch_assoc($kim);
    unlink('gambar/'.$kun['gambar']);

    $result = mysqli_query($conn, "DELETE from characters WHERE id=$id");

    if ($result){
        echo "
        <script> 
            alert ('data berhasil dihapus');
            document.location.href = 'character.php';
        </script>";
    } else {
        echo "
        <script> 
            alert ('data gagal dihapus');
            document.location.href = 'del_char.php';
        </script>";
    }
?>