<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if($_POST['name'] != NULL && $_POST['message'] != NULL && !ctype_space($_POST['name']) && !ctype_space($_POST['message'])){

        //Load composer's autoloader
        require 'vendor/autoload.php';

        $mail = new PHPMailer(true);  

        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output

        // $mail->isSMTP();
        // $mail->Host = 'localhost';
        // $mail->SMTPAuth = false;
        // $mail->SMTPAutoTLS = false; 
        // $mail->Port = 25; 

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com;smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->Username = 'js3696538@gmail.com';                 // SMTP username
        $mail->Password = 'ABCdef123';    

        //Recipients
        $mail->setFrom('js3696538@gmail.com', 'Contact Form');
        $mail->addAddress('helousam915@gmail.com', 'Sam');     // Add a recipient

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Contact Form';
        $mail->Body    =    'Person name: ' . $_POST['name'] . '<br><br>' .
                            'Person email: ' . $_POST['email'] . '<br><br>' .
                            'Person message: ' . $_POST['message'];
        $mail->AltBody = 'If you are reading this message Sam, the contact form had an error, Contact me imediately.<br> - Alex';

        if($mail->send()){
            echo "IT WENT";
        }else{
            echo "DIDNT GO";
        }           

        header("Location: ./index.html");
        die();

    }else{
        header("Location: ./feedback.html");
        die();
    }

?>

<html>

    <head>
        <title>Sam Parking Lot</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>

    <body class="body">

    </body>
</html>