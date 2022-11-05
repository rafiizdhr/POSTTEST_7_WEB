<?php
    require "koneksi.php";
    $characters = [];
    $result = mysqli_query($conn,"SELECT * FROM characters");
    while($row = mysqli_fetch_assoc($result)){
        $characters[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characters List</title>
    <link rel="stylesheet" href="index2.css">
    <style>
        <?php include('index2.css'); ?>
    </style>
</head>
<body>
    <div class="content">
        <h1>Injustice Characters</h1>
        <h3 style="text-align:center;">LIST CHARACTERS</h3>
        <a class="home-button" href="index.php">back to home</a>
        <br><hr><br>
    <table border="1" width=60% align="center">
        <tr>
            <th>ID</th>
            <th>Character Name</th>
            <th>Damage</th>
            <th>Health</th>
            <th>Rank</th>
            <th>Promotion</th>
            <th>Price</th>
            <th>Description</th>
            <th>Picture</th>
            <th>Time Upload</th>
            <th>ACTION</th>
        </tr>
        <?php if(isset($characters)){foreach($characters as $char):?>
        <tr>
            <td><?php echo $char['id']; ?></td>
            <td><?php echo $char['nama']; ?></td>
            <td><?php echo $char['damage'];?></td>
            <td><?php echo $char['health']; ?></td>
            <td><?php echo $char['rank']; ?></td>
            <td><?php echo $char['promotion']; ?></td>
            <td><?php echo $char['price']; ?></td>
            <td><?php echo $char['description']; ?></td>
            <td><img width ="100px" src="gambar/<?php echo $char['gambar']; ?>" alt=""></td>
            <td><?php echo $char['waktu_upload'];?></td>
            <td align="center">
                <a href="update_char.php?id=<?php echo $char['id'];?>"><button>UPDATE</button></a>
                <a href="del_char.php?id=<?php echo $char['id'];?>"><button>DELETE</button></a>
            </td>
        </tr>
        <?php endforeach; }?>
    </table>
    <a href="add_char.php" class="tambahdata"><button align="center">TAMBAH DATA</button></a>
    </div>
</body>
</html>
