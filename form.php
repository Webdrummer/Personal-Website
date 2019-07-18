<?php
    if (isset($_POST['your-name']) && isset($_POST['your-mail']) && isset($_POST['your-message'])) {
        $name = htmlspecialchars($_POST['your-name']);
        $mail = htmlspecialchars($_POST['your-mail']);
        $message = htmlspecialchars(nl2br($_POST['your-message']));
        $to = "office@florian-drums.com";
        $from = $mail;
        $subject = "Kontaktanfrage von florian-drums.com";
        $message = '<b>Name:</b> '.$name.' <br><b>Email:</b> '.$mail.' <p>'.$message.'</p>';
        $headers = "From: $from\n";
        $headers .= "MIME_Version: 1.0\n";
        $headers .= "Content-type: text/html; charset = UTF-8\n";

        // Validation
        if (!empty($name) && !empty($mail) && !empty($message)) {
            if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
                echo "failed email";
                } else {
                    if (mail($to, $subject, $message, $headers)) {
                    echo "success";
                    }
                } 
        } else echo "no text";
    }
?>