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
    <script src='main.js'></script>
</head>

<body id="body_menu">

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
        <h3>Special menu offers.</h3>
        <h1 id="menu_tag">Bar Menu</h1>
    </section>


    <h2 class="topic">Coffee</h2><hr>
    <div class="flex-container">
        <div>
            <p>Coffee<span class="euro">1.00&euro;</span></p>
            <p>Milk<span class="euro">1.50&euro;</span></p>
            <p>Cappuccino<span class="euro">1.50&euro;</span></p>
            <p>Cocoa<span class="euro">2.00&euro;</span></p>
        </div>
        <div>
            <p>Coffee Latte<span class="euro">2.00&euro;</span></p>
            <p>Macchiato<span class="euro">1.50&euro;</span></p>
            <p>Hot Chocolate<span class="euro">2.50&euro;</span></p>
            <p>Nescafe<span class="euro">1.50&euro;</span></p>
        </div>
    </div>

    <h2 class="topic">Cocktails</h2><hr>
    <div class="flex-container">
        <div>
            <p>Margarita<span class="euro">8.50&euro;</span></p>
            <p>Pisco Sour<span class="euro">12.00&euro;</span></p>
            <p>Gin Fizz<span class="euro">6.00&euro;</span></p>
            <p>Passion Fruit<span class="euro">15.00&euro;</span></p>
            <p>Mojito<span class="euro">13.00&euro;</span></p>
        </div>
        <div>
            <p>Negroni<span class="euro">10.00&euro;</span></p>
            <p>Lust<span class="euro">8.00&euro;</span></p>
            <p>Manhattan<span class="euro">17.00&euro;</span></p>
            <p>Bloody Mary<span class="euro">20.00&euro;</span></p>
            <p>Apple Martini<span class="euro">14.00&euro;</span></p>
        </div>
    </div>

    <h2 class="topic">Foods</h2><hr>
    <div class="flex-container">
        <div>
            <p>Omelette<span class="euro">3.00&euro;</span></p>
            <p>Club Sandwich<span class="euro">2.50&euro;</span></p>
            <p>Pancakes<span class="euro">2.50&euro;</span></p>
            <p>Salad<span class="euro">4.50&euro;</span></p>
            <p>French Fries<span class="euro">3.50&euro;</span></p>
        </div>
        <div>
            <p>Pasta<span class="euro">6.50&euro;</span></p>
            <p>American Burger<span class="euro">5.50&euro;</span></p>
            <p>Chicken Burger<span class="euro">6.50&euro;</span></p>
            <p>Sushi<span class="euro">8.50&euro;</span></p>
            <p>Shrimp<span class="euro">10.50&euro;</span></p>
        </div>
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

</body>

</html>
<?php
  }
?>