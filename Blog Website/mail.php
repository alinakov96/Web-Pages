<?php 

if (isset($_POST['email']) 
    && isset($_POST['subject']) 
    && isset($_POST['message'])) {
        if (strlen($_POST['email']) > 5 
        && strlen($_POST['message']) > 30) {
            $mail_from = $_POST['email'];
            $to_email = "info@blogsite.com";
            $subject = $_POST['subject'];
            $name = $_POST['name'];
            $message = $_POST['message'];
            $headers = "Content-type: text/plain; charset=UTF-8" . "\r\n" . 
                        "From: " . $mail_from . "\r\n" . 
                        "Reply-to: " . $mail_from . "\r\n" . 
                        "X-Mailer: PHP/" . phpversion();
        if(mail($to_email, $subject, $message, $headers)) {
            header("Location: http://localhost/Blog Website/done");
            }
            else {
                header("Location: http://localhost/Blog Website/error");
            }
        } 
    else {
        header("Location: http://localhost/Blog Website/error");
    }

} else {
    header("Location: http://localhost/Blog Website/error");
}




?>