<?php
include "database.php";

?>

<div class="fadeInUp">

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
?>