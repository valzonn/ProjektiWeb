<?php
  session_start();
  $hide="";
  if(!isset($_SESSION['username']))
    header("location:login.php");
  else{
    if($_SESSION['role'] == "admin")
      $hide = "";
    else
      $hide = "hide";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Centrum Lounge</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='responsive.css'>
    <script src='main.js'></script>
</head>

<body>

    <header id="header">
        <a href="#"><img id="logo" src="Centrum Logo.jpg" alt="Foto nuk mund te hapet"></a>
        <div>
            <a href="dashboard.php" class="<?php echo $hide?>" id="dashboard-link" >Dashboard</a>
            <a class="nav-links" href="index.php">Home</a>
            <a class="nav-links" href="menu.php">Menu</a>
            <a class="nav-links" href="contact.php">Contact</a>
            <a class="nav-links" href="login.php">Log In</a>
            <a class="nav-links" href="logout.php">Log Out</a>
        </div>
    </header>

    <section>
        <div class="main">
            <h1>Welcome to <br> Centrum Lounge</h1>
        </div>

        <div class="main">
            <h1 id="our_story">Our<br> Story</h1>
            <p>"Centrum Lounge" është një Lounge Bar i njohur për shërbimin e tij të shkëlqyeshëm, ambientin e veçantë
                dhe ofertën e pasur të produkteve. Lokali ynë ka shërbyer si një pikë takimi kulturore dhe sociale për
                banorët dhe vizitorët e Kosovës, duke krijuar një atmosferë të ngrohtë dhe mikpritëse që çon në një
                përvojë unike për të gjithë. <br>

                Krijimi i "Centrum Lounge" ka filluar në vitin 2010, dhe që nga ajo kohë, kemi kultivuar një reputacion
                të shkëlqyeshëm në treg për cilësinë e shërbimeve tona dhe përvojën e jashtëzakonshme të klientëve.
                Ndryshe nga vendet e tjera, ne kemi vendosur një theks të veçantë në detajet e dizajnit të ambientit
                tonë, duke krijuar një atmosferë elegante dhe modere. <br>

                Oferta jonë e pijeve dhe ushqimit është e pasur dhe e diversifikuar, duke përfshirë pije inovative,
                koktejle kreativë dhe kuzhinë me shije të jashtëzakonshme. Ne jemi kujdesur të ofrojmë një gamë të gjerë
                të produkteve për të plotësuar preferencat e çdo vizitori. <br>

                Për të përmirësuar edhe më tej eksperiencën e vizitorëve tanë, kemi përdorur teknologjinë dhe mediat
                sociale për të qenë në kontakt të vazhdueshëm me klientët tanë dhe për t'i informuar ata mbi ngjarjet e
                ardhshme dhe ofertat e veçanta.
            </p>
        </div>
    </section>

    <div id="slider-main">
        <header>
            <h2>Our Interior</h2>
            <img id="slider" />
        </header>
        <button id="next-button" onclick="changeImg()">Next</button>
    </div>

    
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <img id="logo-footer" src="Centrum Logo.jpg" alt="Foto nuk mund te hapet">
            </div>
            <div class="footer-section contact">
                <h2>Contact Us</h2>
                <p>Email: info@centrumloungebar.com</p>
                <p>Telefon: +383 49-123-123</p>
                <p>Adresa: Fehmi Agani, Prishtina</p>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a class="quick-links" href="index.php">Home</a></li>
                    <li><a class="quick-links" href="menu.php">Menu</a></li>
                    <li><a class="quick-links" href="contact.php">Contact</a></li>
                    <li><a class="quick-links" href="login.php">Log In</a></li>
                </ul>
            </div>
            <div class="footer-section social">
                <h2>Follow Us</h2>
                <a href="https://www.facebook.com" target="_blank"><img src="facebook-icon.png" alt="Facebook"></a>
                <a href="https://www.twitter.com" target="_blank"><img src="twitter-icon.png" alt="Twitter"></a>
                <a href="https://www.instagram.com" target="_blank"><img src="instagram-icon.png" alt="Instagram"></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Centrum Lounge Bar | | All rights reserved.</p>
        </div>
    </footer>

    <script>
        let i = 0;
        let imgArray = ['Interior1.jpg', 'Interior2.jpg', 'Interior3.jpg', 'Interior4.jpg', 'Interior5.jpg'];

        function changeImg() {
            document.getElementById('slider').src = imgArray[i];

            if (i < imgArray.length - 1) {
                i++;
            }
            else {
                i = 0;
            }
            //setTimeout("changeImg()", 2600);
        }
        document.addEventListener(onload, changeImg());
    </script>
</body>

</html>
<?php
  }
?>