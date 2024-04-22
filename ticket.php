<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Ticket Generator</title>
    <link rel="stylesheet" type="text/css" href="ticket.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.php">
    <!-- <link rel="stylesheet" href="index.html"> -->
    <link rel="stylesheet" href="signup.css">
</head>
<body >
    <header>
    <nav>
        <div class="logo">
            <h1 id="h">VOYAGE</h1>
        </div>
        <div class="menu">
        <?php 
            if(isset($_SESSION['auth'])){
                echo '<a href="logout.php">Logout</a>';
            } else {
                echo '<a href="signup.php">Sign UP</a>';

            }
        ?>
            <a href="ticket.php">Ticket</a>
            <a href="contact.php">Contact Us</a>
        </div>
    </nav>
    <div class="container">

        
        
        <form method="post" id="ticket-form" class="input-group" >
            <h1>Ticket Generator</h1>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name"  required>

            <label for="pickup-point">Pickup Point:</label>
            <input type="text" id="pickup-point" name="pickup-point" required>

            <label for="dropping-point">Dropping Point:</label>
            <input type="text" id="dropping-point" name="dropping-point" required>

            <button name="sub" type="submit" value="Generate QR Code">Generate Ticket</button>

            <div id="ticket-display" class="pasenger details">
                
            <?php
            // if (isset($_POST["btnsubmit"])) {
            //     $name = $_POST["name"];
            //     $pickup = $_POST["pickup-point"];
            //     $drop = $_POST["dropping-point"];
            //     $t = time();
            //     date_default_timezone_set("Asia/Kolkata");
            //      $date = date("Y-m-d",$t);
            //      $time = date("h:i:sa");
            // }

            //     echo "<pre>";
            //     var_dump($_POST);
            //     echo "</pre>";

            // include("backend/phpqrcode/qrlib.php");
            

            // if (isset($_POST['sub'])){
            //     $PNG_TEMP_DIR = './img/';
            //     if (!file_exists($PNG_TEMP_DIR))
            //         mkdir($PNG_TEMP_DIR);

            //     $filename = $PNG_TEMP_DIR . 'test.png';


            //     $t = time();
            //     date_default_timezone_set("Asia/Kolkata");
            //     $date = date("Y-m-d",$t);
            //     $time = date("h:i:sa");
            //     $codeString = $_POST["name"] . "\n";
            //     $codeString .= $_POST["pickup-point"] . "\n";
            //     $codeString .= $_POST["dropping-point"] . "\n";
            //     $codeString .= $date . "\n";
            //     $codeString .= $time;

                // $codeString = "heloooooooo";



                // $filename = $PNG_TEMP_DIR . 'test' . md5($codeString) . '.png';

                // Qrcode::png($codeString, $filename);

				// echo '<img src="' . $PNG_TEMP_DIR . basename($filename) . '" /><hr/>';
            // }
            // }
            ?>

            </div>

        </form>

        
            
            

            
            
            <?php
            
            ?>
       
            <!-- The current date and time will be displayed here -->
            <script src="script.js"></script>
             </div>
            
    </div>
    
</header>
</body>
</html>
