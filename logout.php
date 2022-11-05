<?php 
    session_start();
    session_unset();
    session_destroy();

    echo"<script>
            alert('anda telah logout');
            document.location.href = 'login.php'
        </script>";
    // header("Location:login.php");
?>