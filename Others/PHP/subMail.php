<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['subsname']) && isset($_POST['subsemail'])) {
        $subsname = $_POST['subsname'];
        $subsemail = $_POST['subsemail'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "ashokkumarkaleeswaran003@gmail.com"; //enter you email address
        $mail->Password = 'igqwzgkojfdwjoes'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($subsemail, $subsname);
        $mail->addAddress("ashokkumarkaleeswaran003@gmail.com"); //enter you email address
        $mail->Subject = ("Subscriber Name: ".$subsname);
        $mail->Body = ("<h3><b><u>Newsletter for latest news and updates.</u></b></h3> <br>"."Name: ".$subsname."<br>"."Email: ".$subsemail."<br><br>"."<b>Thank you !</b>");
        
        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
