<?php
  if(isset($_POST['loginbtn'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
      echo "Please fill the required fields!";
    }else{
        //validate
        $username = $_POST['username'];
        $password = $_POST['password'];

        include_once 'users.php';
        $i=0;
        
        foreach($users as $user){
          if($user['username'] == $username && $user['password'] == $password){
            session_start();
      
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = $user['role'];
            $_SESSION['loginTime'] = date("H:i:s");
            header("location:index.php");
            exit();
          }else{
            $i++;
            if($i == sizeof($users)) {
              echo "Incorrect Username or Password!";
              exit();
            }
          }
        }
    }
  }
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
        <!-- <div>
            <a class="nav-links" href="index.php">Home</a>
            <a class="nav-links" href="menu.php">Menu</a>
            <a class="nav-links" href="contact.php">Contact</a> -->
            <a class="nav-links" href="login.php">Log In</a>
        </div>
    </header>

    <div id="forms">
    <div>
        <form id="register-form">
            <label for="emri">Emri:</label>
            <input type="text" name="emri" id="emri">
            <div class="error" id="emriError"></div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <div class="error" id="usernameError"></div>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
            <div class="error" id="emailError"></div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <div class="error" id="passwordError"></div>

            <button id="register-button" type="button" onclick="validateForm()">Regjistrohu</button>
        </form>
    </div>

    <div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="login-form">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username-login">
            <div class="error" id="usernameError-login"></div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password-login">
            <div class="error" id="passwordError-login"></div>

            <button name="loginbtn" id="login-button" type="submit" onclick="validateLoginForm()">Log In</button>
        </form>
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

    <script>
        let emriRegex = /^[a-zA-Z/s]{2,20}$/;
        let usernameRegex = /^[a-zA-Z/s]{2,20}$/;
        let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
        let passwordRegex = /^[a-zA-Z]{8,20}$/;

        function validateForm() {

            let emriInput = document.getElementById('emri');
            let usernameInput = document.getElementById('username');
            let emailInput = document.getElementById('email');
            let passwordInput = document.getElementById('password');
            let emriError = document.getElementById('emriError');
            let usernameError = document.getElementById('usernameError');
            let emailError = document.getElementById('emailError');
            let passwordError = document.getElementById('passwordError');

            emriError.innerText = '';
            usernameError.innerText = '';
            emailError.innerText = '';
            passwordError.innerText = '';

            if (!emriRegex.test(emriInput.value)) {
                emriError.innerText = 'Emri eshte Invalid';
                return;
            }

            if (!usernameRegex.test(usernameInput.value)) {
                usernameError.innerText = 'Username eshte Invalid';
                return;
            }

            if (!emailRegex.test(emailInput.value)) {
                emailError.innerText = 'Email eshte Invalid';
                return;
            }

            if (!passwordRegex.test(passwordInput.value)) {
                passwordError.innerText = 'Password eshte Invalid';
                return;
            }

        }

        function validateLoginForm() {

            let usernameInput = document.getElementById('username-login');
            let passwordInput = document.getElementById('password-login');
            let usernameError = document.getElementById('usernameError-login');
            let passwordError = document.getElementById('passwordError-login');

            usernameError.innerText = '';
            passwordError.innerText = '';

            if (!usernameRegex.test(usernameInput.value)) {
                usernameError.innerText = 'Username eshte Invalid';
                return;
            }

            if (!passwordRegex.test(passwordInput.value)) {
                passwordError.innerText = 'Password eshte Invalid';
                return;
            }

        }

    </script>

</body>

</html>