<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$name_error = "";
$email_error = "";
$msg_error = "";
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];

   $to = "yekuwilfred@gmail.com"; // <– replace with your address here
   $subject = "Bizness";
   $message = "Noms: \n". "Raison Social: \n"."Type de Souscription: \n". $msg. "\n";
   $from = $email;
   $headers = array("From:". $from,
    "Reply-To: ".$email,
    "X-Mailer: PHP/" . PHP_VERSION
);
$headers = implode("\r\n", $headers);
    if (isset($_POST['submit'])){
                if (!(empty($name))) {
                        if (!(empty($email))){
                            if (!(empty($message))){
                                mail($to,$subject,$message,$headers);
                                echo "<div class='container' style='margin-top:5%;'>
	<div class='row'>
        <div class='jumbotron' style='box-shadow: 2px 2px 4px #000000;'>
            <h2 class='text-center'>Thanks. I will contact you soon!</h2>
          <div class='btn-group center-block' style='margin-top:50px;'>
                <a href='#' class='btn btn-lg btn-primary center-block'>page d'accueil</a>
            </div>
        </div>
	</div>
</div>";
                            }else{
                               echo '<p>Fill your message please.</p>';
}
                        }else {
                            echo '<p>Fill your email please.</p>';
}
                }else{
                    echo '<p>Fill your name please.</p>';
}
    }else{
            echo '<p>Fill the form.</p>';
}


 ?>
