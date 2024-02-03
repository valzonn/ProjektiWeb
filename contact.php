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

    <div id="contact-container">
        <form id="contact-form">
            <h2>Contact Us</h2>
            <label class="label-form" for="emri">Emri:</label>
            <input type="text" id="emri" name="emri" required>

            <label class="label-form" for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label class="label-form" for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button id="contact-button" type="submit">Submit</button>
        </form>
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