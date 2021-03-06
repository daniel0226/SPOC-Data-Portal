<?php include("../html/top.html"); ?>
    <?php

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require_once('../php/Mailer/src/PHPMailer.php');
        require_once('../php/Mailer/src/Exception.php');
        require_once('../php/Mailer/src/SMTP.php');
        
        $name = $_POST['FullName'];
        $email = $_POST['Email'];

        $subject = "$name requests SPOC raw data";
        $headers = "From: $email\n";
        $message = "A visitor requests raw data @ $email";

        // YOU MAY TO HAVE TO UPDATE PERMISSIONS.

        //Email information.
        $AdminEmail = "";
        $AdminPassword = "";

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = "465";
        $mail->isHTML();
        
        //Who we are sending email from
        $mail->Username = $AdminEmail;
        $mail->Password = $AdminPassword;

        $mail->SetFrom("no-reply@SPOCUGA.org");
        $mail->Subject = $subject;
        $mail->Body = $message;

        //Who we are sending it to.
        $mail->AddAddress($AdminEmail);

        $mail->Send();
    ?>

    
    <div class = "request">
        <div class="row">
            <h1><strong>Your request was sent to an admin.</strong></h1>
        </div>
    </div>
<?php include("../html/bottom.html"); ?>