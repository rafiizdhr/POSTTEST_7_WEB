<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Injustice Wiki | INJUSTICE</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #more {display: none;}
    </style>
    <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> -->
</head>
<body>

    <!-- <script>
        alert("Selamat datang di INJUSTICE WIKI");
    </script> -->



<!-- navigation bar -->
<nav>
    <div class="nav-wrapper container">
        <div class="logo"><a href="#">Injustice</a></div>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="character.php">Character</a></li>
            <li><a href="#about" >About Me</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <!-- <div>
            <ion-icon name="moon-outline" class="switch"></ion-icon>
        </div> -->
    </div>
</nav>

<!-- Hero section -->
<section class="hero-section">
    <div class="container hero-wrapper">
        <div>
            <h1>Injustice Wiki</h1>
            <p>
            </p>
            <p>Build an epic roster of DC superheroes and villains<span id="dots">...</span><span id="more">and get ready for battle! INJUSTICE: GODS AMONG US is a free-to-play collectible card game where you build a roster of characters, moves, powers, and gear and enter the arena in touch-based 3-on-3 action combat.</span></p>
            <button onclick="myFunction()" id="myBtn" class="btn">Read more</button>    
            <div>
                <br><br>
                <p>Make ur roster of characters below or click Character on above</p>
                <div class="content_heroes"><a href="character.php">Character</a></div>
            </div>
            <script>
                function myFunction() {
                    var dots = document.getElementById("dots");
                    var moreText = document.getElementById("more");
                    var btnText = document.getElementById("myBtn");

                    if (dots.style.display === "none") {
                        dots.style.display = "inline";
                        btnText.innerHTML = "Read more"; 
                        moreText.style.display = "none";
                    } else {
                        dots.style.display = "none";
                        btnText.innerHTML = "Read less"; 
                        moreText.style.display = "inline";
                    }
                }
                
            </script>    

        </div>
        <div>
            <img id="gambar" src="injustice.jpg" alt="gambar injustice">
        </div>
    </div>
</section>



<!-- about me -->
<section class="row">
    <div class = "aboutinf" id="about">
        <h1 class="abouth1" style="text-align: left;">About Me</h1>
    </div>
    <div class="aboutinf2">
        <a class="linkgit" href="https://github.com/rafiizdhr/RafiIzdihaar.github.io">Rafi Izdihaar (klik disini untuk masuk ke akun git saya)</a>
        <p class="linkgit">2109106053</p>
        <p class="linkgit">Informatika A'21</p>
    </div>
</section>


<!-- copyright -->
<section class="copyright">
    <p>Copyright©Rafi Izdihaar, 2022</p>
</section>


<!-- light-mode/dark-mode -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(".switch").click(function(){
        $("body").toggleClass("dark-mode");
        if($("body").hasClass("dark-mode")){
            $(".switch").attr("name", "sunny-outline");
        } else{
            $(".switch").attr("name", "moon-outline");
        }
    });
</script>




</body>
</html>