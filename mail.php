<?php
session_start();

use PHPmailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
$mail = new PHPMailer(true);


// if () {
//   // Get the data sent via POST
//   $name = $_POST['name'];
//   $email = $_POST['email'];
//   $phone = $_POST['phone'];

//   // Perform email sending using PHPMailer or another email library
//   // Include the necessary email sending code here (as shown in previous responses)

//   // Send a response back to the client
//   echo "Email sent successfully"; // You can customize this response
// } else {
//   // Handle non-POST requests or direct access to the PHP file
//   echo "Invalid request";
// }

if(isset($_POST['submit']) || $_SERVER['REQUEST_METHOD'] === 'POST'){
    $_SESSION["name"] = $_POST['name']; 
    $_SESSION["email"] = $_POST['email']; 
    $_SESSION["number"] = $_POST['number'];
    $_SESSION['email_sent'] = "Your Msg Has Been Send";
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
}
try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rahulsambhajimarathe@gmail.com';                     //SMTP username
                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('rahulsambhajimarathe@gmail.com', 'Mailer');
    $mail->addAddress('ashifanwer2@gmail.com', 'From Rahul Marathe');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Lead Form';
    $mail->Body = "
    <table>
    <thead>
    <center><h2>From Lead Query</h2></center>
    </thead>
    <tbody>
      <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Mobile number</td>
      </tr>
      <tr>
        <td>".$_SESSION['name']."</td>
        <td>".$_SESSION['email']."</td>
        <td>".$_SESSION['number']."</td>
      </tr>
          </tbody>
  </table>";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
if(isset($_POST['currentUrl'])) {
    header("Location: " . $_POST['currentUrl']);
    exit;
}

?>
<!-- <script>
    window.location = "index.php";
</script> -->