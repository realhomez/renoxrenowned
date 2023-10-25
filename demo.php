if(isset($_POST['submit'])){
    $_SESSION["fname"] = $_POST['fname']; 
    $_SESSION["lname"] = $_POST['lname']; 
    $_SESSION["skypid"] = isset($_POST['skypid']) ? $_POST['skypid']: ''; 
    $_SESSION["email"] = $_POST['email']; 
    $_SESSION["mobile"] = $_POST['mobile']; 
    $_SESSION["city"] = $_POST['city']; 
    $_SESSION["region_state"] = $_POST['region_state']; 
    $_SESSION["street_address"] = $_POST['street_address']; 
    $_SESSION["country"] = $_POST['country']; 
    $_SESSION["zip_code"] = $_POST['zip_code']; 
    $_SESSION["company_name"] = $_POST['company_name']; 
    $_SESSION["currently_working"] = $_POST['currently_working']; 
    $_SESSION["cars"] = $_POST['cars']; 
    $_SESSION["off"] = $_POST['off']; 
    $_SESSION["looking"] = $_POST['looking']; 
    $_SESSION["Verticals"] = $_POST['Verticals']; 
    $_SESSION["Call_center_no"] = $_POST['Call_center_no'];   
    $_SESSION["Offshore"] = isset($_POST['Offshore']) ? $_POST['Offshore'] : ''; 
    $_SESSION["Onshore"] = isset($_POST['Onshore']) ? $_POST['Onshore'] : ''; 
    $_SESSION["Nearshore"] = isset($_POST['Offshore']) ? $_POST['Offshore'] : ''; 
    $_SESSION['source'] = isset($_POST['source']) ? $_POST['source']: '';
    $_SESSION['SEM'] = isset($_POST['SEM']) ? $_POST['SEM'] : '';
    $_SESSION['Paid'] = isset($_POST['Paid']) ? $_POST['Paid']: '';
    $_SESSION['SMM'] = isset($_POST['SMM']) ? $_POST['SMM']: '';
    $_SESSION['Call'] = isset($_POST['Call'])? $_POST['Call']: '';
    $_SESSION['SMS'] = isset($_POST['SMS']) ? $_POST['SMS']: '';
    $_SESSION['Emails'] = isset($_POST['Emails']) ? $_POST['Emails'] : '';
    $_SESSION["flexRadioDefault"] = $_POST['flexRadioDefault']; 
    // echo "hello";
    //header('location: send.php');
    
}
try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'sh004.bigrock.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'support@marketpaypercall.com';                     //SMTP username
    $mail->Password   = '+]I%lCn5BFY2';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;
  //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom('support@marketpaypercall.com', 'MarketPayPerCall');
    $mail->addAddress('support@marketpaypercall.com', 'MarketPayPerCall');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('happydigitalexpert@gmail.com');
    $mail->addBCC('rajivsraj78@gmail.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Publisher Query';
$mail->Body    = "
    <table>
    <thead>
    <center><h2>Publisher</h2></center>
      <tr>
        <th>Feature</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>First name</td>
        <td>".$_SESSION['fname']."</td>
      </tr>
      <tr>
        <td>Last name</td>
        <td>".$_SESSION['lname']."</td>
      </tr>
      <tr>
        <td>SkpeId</td>
        <td>".$_SESSION['skypid']."</td>
      </tr>
      <tr>
        <td>Email </td>
        <td>".$_SESSION['email']."</td>
      </tr>
      <tr>
        <td>Mobile Number</td>
        <td>".$_SESSION['mobile']."</td>
      </tr>
      <tr>
        <td>Street Address</td>
        <td>".$_SESSION['street_address']."</td>
      </tr>
      <tr>
        <td>City</td>
        <td>".$_SESSION['city']."</td>
      </tr>
      <tr>
        <td>State/Region</td>
        <td>".$_SESSION['region_state']."</td>
      </tr>
      <tr>
        <td>Country </td>
        <td>".$_SESSION['country']."</td>
      </tr>
      <tr>
        <td>Zip code</td>
        <td>".$_SESSION['zip_code']."</td>
      </tr>
      <tr>
        <td>Company Name</td>
        <td>".$_SESSION['company_name']."</td>
      </tr>
      <tr>
        <td>What vertical are you currently working </td>
        <td>".$_SESSION['currently_working']."</td>
      </tr>
        <tr>
            <td colspan='2'>
                <h3>What is your traffic source?</h3>
            </td>
        <tr>
      <tr>
        <td>Seo</td>
        <td>".$_SESSION['source']."</td>
      </tr>
      <tr>
        <td>SEM </td>
        <td>".$_SESSION['SEM']."</td>
      </tr>
      <tr>
        <td>Paid search/click to call</td>
        <td>".$_SESSION['Paid']."</td>
      </tr>
      <tr>
        <td>SMM </td>
        <td>".$_SESSION['SMM']."</td>
      </tr>
      <tr>
        <td>Call center transfer  </td>
        <td>".$_SESSION['Call']."</td>
      </tr>
      <tr>
        <td>SMS</td>
        <td>".$_SESSION['SMS']."</td>
      </tr>
      <tr>
        <td>Email marketing</td>
        <td>".$_SESSION['Emails']."</td>
      </tr>
      <tr>
        <td>Monthly Adspend</td>
        <td>".$_SESSION['cars']."</td>
      </tr>
      <tr>
        <td>What types of offers you need currently </td>
        <td>".$_SESSION['off']."</td>
      </tr>
      <tr>
        <td>Is there any offer you are currently looking for </td>
        <td>".$_SESSION['looking']."</td>
      </tr>
      <tr>
        <td>Verticals </td>
        <td>".$_SESSION['Verticals']."</td>
      </tr>
      <tr>
        <td>Are you a Call Center </td>
        <td>".$_SESSION['Call_center_no']."</td>
      </tr>
      <tr>
        <td colspan='2'>
          <h3>If Yes, What is the Call Center set up?</h3>
        </td>
      </tr>
      <tr>
        <td>Offshore Call Center </td>
        <td>".$_SESSION['Offshore']."</td>
      </tr>
      <tr>
        <td>Onshore Call Center </td>
        <td>".$_SESSION['Onshore']."</td>
      </tr>
      <tr>
        <td>Nearshore Call Center</td>
        <td>".$_SESSION['Nearshore']."</td>
      </tr>
      <tr>
        <td>Type</td>
        <td>".$_SESSION['flexRadioDefault']."</td>
      </tr>
    </tbody>
  </table>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    $_SESSION['success'] = 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}






?>
<script>
    window.location = "index.php";
</script>
<?php
 
//    header("Location: form3.php");

?>