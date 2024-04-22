<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOYAGE | Signup</title>
    <link rel="stylesheet" href="ticket.html">
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <h1 id="h">VOYAGE</h1>
            </div>
            <div class="menu">
                <?php 
                    if(isset($_SESSION['auth'])){
                        echo '<a href="ticket.php">Ticket</a>';
                    } else {
                        echo '<a href="signup.php">Sign UP</a>';

                    }
                ?>
                <a href="contact.php">Contact Us</a>
            </div>
        </nav>

        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>

                </div>
                <form id="login" class="input-group" action="./backend/login.php" method="post">
                    <input type="text" class="input-field" placeholder="User Id" name="username" required>
                    <input type="password" class="input-field" placeholder="Enter PassWord" name="password" required>
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    <button type="submit" class="submit-btn">Log in</button>
                </form>
                <form id="signup" class="input-group" action="./backend/register.php" method="post">
                    <input type="text" class="input-field" placeholder="User Id" name="username" required>
                    <input type="password" class="input-field" placeholder="Enter password" name="password" required>
                    <input type="checkbox" class="check-box"><span> I agree to term & conditions</span>
                    <button type="submit" class="submit-btn">Sign Up</button>
                </form>
            </div>

        </div>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("signup");
            var z = document.getElementById("btn");

            function signup() {
                x.style.left = " -400px";
                y.style.left = " 50px";
                z.style.left = " 110px";
            }
            function login() {
                x.style.left = " 50px";
                y.style.left = " 450px";
                z.style.left = " 0px";
            }
        </script>
    </header>
</body>

</html>