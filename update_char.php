<!-- update -->
<?php
    require "koneksi.php";

    $id = $_GET['id'];

    //$result = mysqli_query($conn, "SELECT * FROM characters WHERE id=$id");

    // $char = [];

    // while ($row = mysqli_fetch_assoc($result)){
    //     $char[] = $char;
    // }

    //$char = $char[0];

    if (isset($_POST['update'])){
        $nama = $_POST['nama'];
        $damage = $_POST['damage'];
        $health = $_POST['health'];
        $rank = $_POST['rank'];
        $promotion = $_POST['promotion'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $waktu_upload = date('Y-m-d',strtotime("today"));

        $format_file = $_FILES['gambar']['name'];
        $tmp_name = $_FILES['gambar']['tmp_name'];
        $size = $_FILES['gambar']['size'];
        $type = explode('.',$format_file);
        $type2 = $type[1];
        $rename = "$nama.$type2";
        $format_foto = array('jpg', 'png', 'jpeg');
        $max_size = 3000000;

        if($size < $max_size){
            move_uploaded_file($tmp_name, 'gambar/'.$rename);
            $sql = "UPDATE characters  SET nama='$nama', damage='$damage', health='$health', rank='$rank', promotion='$promotion', price='$price', description='$description', gambar='$rename', waktu_upload='$waktu_upload' WHERE id=$id";
            $result = mysqli_query($conn, $sql);

        if ($result){
            echo "
            <script> 
                alert ('data berhasil diupdate');
                document.location.href = 'character.php';
            </script>";
        } else {
            echo "
            <script> 
                alert ('gagal diupdate');
                document.location.href = 'update_char.php';
            </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characters | Update Character</title>
    <link rel="stylesheet" href="index2.css">
    <style>
        <?php include('index2.css'); ?>
    </style>

</head>
<body>
    <div class="content">
    <h1>Update Character</h1>
    <br><hr><br>
    <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Character Name</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Damage</td>
                    <td>:</td>
                    <td><input type="number" name="damage"></td>
                </tr>
                <tr>
                    <td>Health</td>
                    <td>:</td>
                    <td><input type="number" name="health"></td>
                </tr>
                <tr>           
                    <td>Rank</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="rank" value="gold"> Gold
                        <input type="radio" name="rank" value="silver"> Silver
                        <input type="radio" name="rank" value="bronze"> Bronze
                    </td>
                </tr>
                <tr>
                    <td>Promotion</td>
                    <td>:</td>
                    <td>
                        <select name="promotion">
                            <option value="none">none</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                            <option value="VII">VII</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>:</td>
                    <td><input type="number" name="price"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td><textarea name="description" id="" cols="20" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td>Character Leak</td>
                    <td>:</td>
                    <td><input type="file" name="gambar"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button id="myBtn" type="submit" name="update">Update</button>
                        <button id="myBtn" type="reset" name="reset">Reset</button>
                    </td>    
                </tr>
            </table>
        </form>
        </div>
</body>
</html>