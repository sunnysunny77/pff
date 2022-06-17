<!DOCTYPE html>
<html>
<body>
<style>
    body {
        background-color:  dimgray;
        min-height: 100vh;
        margin: 0;
    }
    p {
        color: white;
        padding-top: 50vh;
        text-align: center;
        font-size: 35px;
        margin: auto;
        font-family: "Trebuchet MS";
    }
</style>
<?php
$res;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $text = $_REQUEST["text"];
    $to_email = "shlooby07@gmail.com";
    $subject = "New Contact Message";
    
    $contactus = "
    
    Name: ".$name."
    Phone: ".$phone."
    Email: ".$email."
    Message: ".$text;

    $contactus  = wordwrap($contactus ,70);

    $mail = mail($to_email,$subject,$contactus);
    if (!$mail) {
      $res = print_r(error_get_last()['message']);
    } else {
      $res = "Thanks email sent, redirecting in 5 seconds..";
    }
}
?>

    <p> <?php echo $res; ?></p> 
    <?php header( "Refresh:5; url=https://pff.sunnyhome.site", true, 303); ?>
</body>
</html>
