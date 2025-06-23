<?php
include "database.php";
include "header.php";
include "navbar.php";
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Form</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active text-primary">Form</li>
        </ol>
    </div>
</div>
<!-- Header End -->
<br><br>
<div class="container form">
    <div class="content">
        <div class="image-box">
            <img src="img/form.jpg">
        </div>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <div class="topic">
                <h1 class="display-4">Speak to our Team</h1>
                <p><i>Fill out the form for a free consultation</i></p>
            </div>
            <div class="input-box">
                <input type="text" id="name" name="name" required>
                <label>Enter your name</label>
            </div>
            <div class="input-box">
                <input type="email" id="email" name="email" required>
                <label>Enter your email</label>
            </div>
            <div class="input-box">
                <input type="text" id="number" name="number" required>
                <label>Enter your number</label>
            </div>

            <div class="message-box">
                <textarea id="message" name="message"> </textarea>
                <label>Enter your message</label>
            </div>
            <div class="input-box">
                <button type="submit" class="btn" onclick="openPopup()">Send Message</button>

            </div>
        </form>
    </div>
</div>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    if (empty($name)) {
        echo "Please enter your name";
    } elseif (empty($email)) {
        echo "Please enter your email";
    } elseif (empty($number)) {
        echo "Please enter your number";
    } else {
        $sql = "INSERT INTO students(name, email, number, message) 
        value('$name','$email','$number','$message')";
        mysqli_query($max, $sql); ?>
        <div class="popup" id="popup">
            <img src="img/404-tick.png">
            <h2>Thank You!</h2>
            <p>Your details has been sucessfully submitted. Thanks!</p>
            <button type="button" onclick="closePopup()">OK</button>
        </div>
<?php
    }
}


mysqli_close($max);
include 'footer.php';
?>