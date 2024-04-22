<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOYAGE|Contact</title>
    <link rel="stylesheet" href="./contact.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" type="text/css" />
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1 id="h">VOYAGE  </h1>
            </div>
            <div class="menu">
            <?php 
                if(isset($_SESSION['auth'])){
                    echo '<a href="logout.php">Logout</a>';
                    echo '<a href="ticket.php">Ticket</a>';
                } else {
                    echo '<a href="signup.php">Sign UP</a>';

                }
            ?>
                <a href="contact.php">Contact Us</a>
            </div>
        </nav>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                <p>We love hearing from you, our Voyage customer please contact us about anything at all. <br>
                    Didn't find what you're looking for? we'd love to hear from you , Fill out the form below we'll get
                    back to you soon.</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="text">
                            <h3>Adress</h3>
                            <p>Nirmalam Kunj, opposite to samarth residency,Near kakashree residency Raisoni College
                                road wagholi -412207</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+91 1234567890</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-sharp fa-solid fa-envelope"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>shrushtimahajan26@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactform">
                    <form>
                        <h2>Send Message</h2>
                        <div class="a">
                            <input type="text" required="requried">
                            <span>Full name</span>
                        </div>
                        <div class="a">
                            <input type="email" required="requried">
                            <span>Email</span>
                        </div>
                        <div class="a">
                            <textarea required="required"></textarea>
                            <span>Type your Message..</span>
                        </div>
                        <div class="a">
                            <input type="submit" name="" value="send">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </header>
</body>

</html>