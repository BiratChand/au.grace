<?php
include "database.php";

// Define variables and set to empty values
$nameErr = $emailErr = $numberErr = $messageErr = "";
$name = $email = $number = $message = "";
$formSubmitted = false;
$mailSent = false;
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validation logic remains the same
    if (empty($_POST['name'])) {
        $nameErr = "Please enter your name";
    } else {
        $name = test_input($_POST['name']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST['email'])) {
        $emailErr = "Please enter your email";
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST['number'])) {
        $numberErr = "Please enter your phone number";
    } else {
        $number = test_input($_POST['number']);
        if (!preg_match("/^[0-9\-\(\)\/\+\s]*$/", $number)) {
            $numberErr = "Invalid phone number format";
        }
    }

    if (empty($_POST['message'])) {
        $messageErr = "Please enter your message";
    } else {
        $message = test_input($_POST['message']);
    }

    // Process the form if no errors
    if (empty($nameErr) && empty($emailErr) && empty($numberErr) && empty($messageErr)) {
        $formSubmitted = true;
        
        // Store in database
        $sql = "INSERT INTO students(name, email, number, message) 
                VALUES('$name', '$email', '$number', '$message')";
        
        if (mysqli_query($max, $sql)) {
            // Email sending logic remains the same
            $to = "info@graceinternational.com";
            $subject = "New Contact Form Submission";
            
            $emailBody = "You have received a new message from the contact form on your website.\n\n";
            $emailBody .= "Name: $name\n";
            $emailBody .= "Email: $email\n";
            $emailBody .= "Phone: $number\n";
            $emailBody .= "Message:\n$message\n";
            
            $headers = "From: website@graceinternational.com\r\n";
            $headers .= "Reply-To: $email\r\n";
            
            if (mail($to, $subject, $emailBody, $headers)) {
                $mailSent = true;
                
                $userSubject = "Thank you for contacting Grace International";
                $userMessage = "Dear $name,\n\n";
                $userMessage .= "Thank you for reaching out to Grace International. We have received your message and will get back to you shortly.\n\n";
                $userMessage .= "Here's a copy of your message:\n\n";
                $userMessage .= "Message: $message\n\n";
                $userMessage .= "Best regards,\nThe Grace International Team";
                
                $userHeaders = "From: info@graceinternational.com\r\n";
                mail($email, $userSubject, $userMessage, $userHeaders);
            } else {
                $errorMessage = "Email could not be sent. Please try again later.";
            }
        } else {
            $errorMessage = "There was an error saving your message. Please try again.";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!-- Modern Contact Section with Integrated Image and Form -->
<div class="container-fluid py-5 glossy-bg">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h4 class="text-primary">Contact Us</h4>
            <h1 class="display-5 mb-3 gradient-text">Speak to our Team</h1>
            <p class="mb-0">Fill out the form below for a free consultation with our expert team.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="glossy-card wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <div style="background: url('img/form.jpg'); background-size: cover; background-position: center; height: 100%; min-height: 300px; border-radius: 15px 0 0 15px;"></div>
                        </div>
                        <div class="col-md-7">
                            <div class="p-4 p-md-5">
                                <?php if ($formSubmitted && empty($errorMessage)): ?>
                                    <div class="alert alert-success">
                                        <h4><i class="fas fa-check-circle me-2"></i> Thank You!</h4>
                                        <p>Your message has been sent successfully. We will get back to you as soon as possible.</p>
            </div>
                                <?php elseif (!empty($errorMessage)): ?>
                                    <div class="alert alert-danger">
                                        <h4><i class="fas fa-exclamation-circle me-2"></i> Error!</h4>
                                        <p><?php echo $errorMessage; ?></p>
                </div>
                                <?php endif; ?>

                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control <?php echo (!empty($nameErr)) ? 'is-invalid' : ''; ?>" 
                                               id="name" name="name" placeholder="Full Name" value="<?php echo $name; ?>">
                                        <label for="name">Full Name</label>
                                        <?php if (!empty($nameErr)): ?>
                                            <div class="invalid-feedback"><?php echo $nameErr; ?></div>
                                        <?php endif; ?>
                </div>
                                    
                                    <div class="form-floating mb-4">
                                        <input type="email" class="form-control <?php echo (!empty($emailErr)) ? 'is-invalid' : ''; ?>" 
                                               id="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>">
                                        <label for="email">Email Address</label>
                                        <?php if (!empty($emailErr)): ?>
                                            <div class="invalid-feedback"><?php echo $emailErr; ?></div>
                                        <?php endif; ?>
                </div>
                                    
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control <?php echo (!empty($numberErr)) ? 'is-invalid' : ''; ?>" 
                                               id="number" name="number" placeholder="Phone Number" value="<?php echo $number; ?>">
                                        <label for="number">Phone Number</label>
                                        <?php if (!empty($numberErr)): ?>
                                            <div class="invalid-feedback"><?php echo $numberErr; ?></div>
                                        <?php endif; ?>
                </div>

                                    <div class="form-floating mb-4">
                                        <textarea class="form-control <?php echo (!empty($messageErr)) ? 'is-invalid' : ''; ?>" 
                                                  id="message" name="message" placeholder="Message" style="height: 150px;"><?php echo $message; ?></textarea>
                                        <label for="message">Message</label>
                                        <?php if (!empty($messageErr)): ?>
                                            <div class="invalid-feedback"><?php echo $messageErr; ?></div>
                                        <?php endif; ?>
                </div>

                                    <div class="text-center">
                                        <button type="submit" class="glossy-button">
                                            <i class="fas fa-paper-plane me-2"></i> Send Message
                                        </button>
                </div>
            </form>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
mysqli_close($max);
?>