<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Define variables and set to empty values
$nameErr = $emailErr = $numberErr = $messageErr = "";
$name = $email = $number = $message = "";
$formSubmitted = false;
$mailSent = false;
$errorMessage = "";

// Get the current city's email from city_content.json
include_once 'includes/location_handler.php';
$cityContent = getCityContent();
$cityEmail = isset($cityContent['contact_info']['email']) ? $cityContent['contact_info']['email'] : 'info@graceinternational.com.au';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simple validation
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST['name'];
    }

    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['number'])) {
        $numberErr = "Phone number is required";
    } else {
        $number = $_POST['number'];
    }

    if (empty($_POST['message'])) {
        $messageErr = "Message is required";
    } else {
        $message = $_POST['message'];
    }

    // Process the form if no errors
    if (empty($nameErr) && empty($emailErr) && empty($numberErr) && empty($messageErr)) {
        $formSubmitted = true;
        
        $to = "bcrypt81@gmail.com"; // Backup email
        $cityName = getCurrentUserCity(); // Get the current city name
        $subject = "Contact Form Submission from " . $cityName;
            
        $emailBody = '
                        <div style="font-family:Arial,sans-serif;font-size:15px;line-height:1.6;color:#333;">
                            <h2 style="color:#2d89ef;">New Contact Form Submission from ' . $cityName . '</h2>
                            <table cellpadding="8" style="border-collapse:collapse;">
                                <tr>
                                    <td style="font-weight:bold;">Name:</td>
                                    <td>' . htmlspecialchars($name) . '</td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold;">Email:</td>
                                    <td><a href="mailto:' . htmlspecialchars($email) . '">' . htmlspecialchars($email) . '</a></td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold;">Phone:</td>
                                    <td>' . htmlspecialchars($number) . '</td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold;vertical-align:top;">Message:</td>
                                    <td>' . nl2br(htmlspecialchars($message)) . '</td>
                                </tr>
                            </table>
                            <p style="font-size:12px;color:#888;">This message was sent from your website contact form.</p>
                        </div>
                    ';

        $mail = new PHPMailer(true);

        try {
            // SMTP configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'data@learnatgrace.com';
            $mail->Password = '=6iaYZzT'; // your Hostinger mailbox password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            
            $mail->setFrom('data@learnatgrace.com', 'Grace Support');
            $mail->addReplyTo($email, $name);
            
            // Add city-specific email address as recipient
            $mail->addAddress($cityEmail); 
            
            // Also add backup email if different
            if ($cityEmail != $to) {
                $mail->addCC($to);
            }

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $emailBody;
            $mail->AltBody = strip_tags(str_replace('<br>', "\n", $emailBody));

            if ($mail->send()) {
                $mailSent = true;
            } else {
                $errorMessage = "Mailer Error: " . $mail->ErrorInfo;
            }
        } catch (Exception $e) {
            $errorMessage = "Mailer Error: " . $mail->ErrorInfo;
        }
    }
}
?>

<!-- Simple Contact Form -->
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
                                <?php if ($formSubmitted && $mailSent): ?>
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