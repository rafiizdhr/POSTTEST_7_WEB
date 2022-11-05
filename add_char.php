<!-- create -->

<?php
    require "koneksi.php";
    $characters = [];
    
    if (isset($_POST['tambah'])){
        $kul = "SELECT * FROM characters";
        $result = mysqli_query($conn, $kul);
        $characters = [];
        while($row = mysqli_fetch_assoc($result)){
            $characters[] = $row;
        }

        $id = count($characters)+1;
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
            $sql = "INSERT INTO characters VALUES ('$id','$nama','$damage','$health','$rank','$promotion','$price','$description','$rename','$waktu_upload')";
            $result = mysqli_query($conn, $sql);

        if ($result){
            echo "
            <script> 
                alert ('data berhasil ditambah');
                document.location.href = 'character.php';
            </script>";
        } else {
            echo "
            <script> 
                alert ('data gagal ditambah');
                document.location.href = 'add_char.php';
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
    <title>Characters | add</title>
    <link rel="stylesheet" href="index2.css">
    <style>
        <?php include('index2.css'); ?>
    </style>
</head>
<body>
    <div class="content">
        <h1>Injustice Characters</h1>
        <br>
        <p>Add ur powerfull Injustice Character</p><br><hr><br>
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
                        <button id="myBtn" type="submit" name="tambah">Kirim</button>
                        <button id="myBtn" type="reset" name="reset">Reset</button>
                    </td>    
                </tr>
            </table>
        </form>
    </div>
</body>
</html>