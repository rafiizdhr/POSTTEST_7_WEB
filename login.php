<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style2.css">
    <title>Injustice Wiki | Login</title>
    <style>
        <?php include('style2.css'); ?>
    </style>
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                
                <form action="" method="post">
                    <div class="input-field">
                        <input type="text" name="user" placeholder="User" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="psw" class="password" placeholder="Password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <!-- <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label> -->
                        </div>
                        
                        <!-- <a href="#" class="text">Forgot password?</a> -->
                    </div>
                    
                    <div class="input-field button">
                        <input type="button" name="login" value="login">
                    </div>
                </form>
                
                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Register Now</a>
                    </span>
                </div>
            </div>
            
            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>
                
                <form action="#">
                    <div class="input-field">
                        <input type="text" name="user" placeholder="User" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="psw" class="password" placeholder="Password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="confirmpsw" class="password" placeholder="Confirm a Password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    
                    <div class="checkbox-text">
                        <!-- <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div> -->
                    </div>

                    <div class="input-field button">
                        <input type="button" name="regis" value="signup">
                    </div>
                </form>
                
                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    
    <script src="javascript/javascript.js"></script>
</body>
</html>

<?php 
    //login
    require 'koneksi.php';

    if(isset($_POST['login'])){
        $username = $_POST['user'];
        $psw = $_POST['psw'];

        $query = "SELECT * FROM akun WHERE user=$username";
        $result = $db->query($query);
        $row = mysqli_fetch_array($result);
        $username = $row['user'];

        if(password_verify($psw,$row['psw'])){
            $_SESSION['login'] = true;

            echo "<script>
                        alert('selamat datang $username');
                        document.location.href = 'index.php';
                    </script>";
        }else{
            echo "<script>
                        alert('username dan password salah');
                </script>";
        }
    }
?>


<?php 
    // registrasi
    require 'koneksi.php';
    if(isset($_POST['regis'])){
        $username = $_POST['user'];
        $psw = $_POST['psw'];
        $confirmpsw = $_POST['confirmpsw'];

        //cek username telah digunakan atau belum
        $user = $db->query("SELECT * FROM akun WHERE user='$username'");

        if(mysqli_num_rows($user) > 0){
            echo "<script>
                        alert('registrasi berhasil');
                    </script>";
        }else {
            //konfirmasi password udh benar atau belumm
            if($psw == $confirmpsw){

                $psw = password_hash($psw,PASSWORD_DEFAULT);

                $query = "INSERT INTO akun (user,psw)
                            VALUES ('$username','$psw')";
                $result = $db->query($query);          
                
                if($result){
                    echo "<script>
                                alert('registrasi berhasil');
                            </script>";
                }else{
                    echo "<script>
                                alert('registrasi gagal');
                            </script";
                }

            }else{
                echo "<script>
                            alert('Konfirmasi password salah!');
                        </script>";
            }
        }
    }
?>