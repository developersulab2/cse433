<!DOCTYPE HTML>

<html>
    <head>
        <title>Hostel Billing System</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
    <header id="header">
                <div class="inner">
                    <a href="index.php" class="logo"><strong>HostelBillingSystem</strong> by ULAB</a>
                    <nav id="nav">
                        <a href="index.php">Registration</a>
                        <a href="indext.php">About us</a>
                        <a href="login.php">Log in</a>
                        
                        <a href="indext.php">Contact us</a>

                    </nav>
                    <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
                </div>
            </header>

        <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <header>
                        <h1>Thanks for your feedback!</h1>
                    </header>
                </div>
            </section>
            <div class="copyright" align="center">
                        &copy; Department of CSE, <a href="https://sse.ulab.edu.bd/cse/">ULAB</a>. Images: <a href="https://google.com"> Google</a>.
                    </div>
         </body>
         </html>






<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "hostelpayment");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO contact (name, email, message) VALUES ('$_POST[name]','$_POST[email]', '$_POST[message]')";
if(mysqli_query($link, $sql)){
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection

?>

