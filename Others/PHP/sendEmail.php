<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $message = $_POST['message'];

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
        $mail->setFrom($email, $name);
        $mail->addAddress("ashokkumarkaleeswaran003@gmail.com"); //enter you email address
        $mail->Subject = ("Customer Name: ".$name);
        $mail->Body = ("<h3><b><u>Contact Details</u></b></h3> <br>"."Name: ".$name."<br>"."Email: ".$email."<br>"."Mobile No: ".$mobile."<br>"."Message: ".$message."<br><br>"."<b>Thank You</b>");
        
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
