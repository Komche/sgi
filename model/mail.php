<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if ($_SESSION['etat']=="Oui") {//Send Mail to Candidat retenu
  $data = Manager::getData("candidat", "equipe", $_SESSION['equipe'], true)['data'];
  //Manager::showError($data);
  //die();
  if (is_array($data) || is_object($data)) {
    $temp = array_keys($data);
    $last_key = end($temp);
    foreach ($data as $key => $value) {

      $object = "Preselection au Hackathon";
      $message = "Félicitaion votre equipe a été présélection pour le Hackathon";

      // Instantiation and passing `true` enables exceptions
      $mail = new PHPMailer(true);

      try {
          //Server settings
          $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
          $mail->isSMTP();                                            // Send using SMTP
          $mail->Host       = 'mail41.lwspanel.com';                    // Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'hello@coronackathon.org';                     // SMTP username
          $mail->Password   = 'Hack@Covid19';                               // SMTP password
          $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
          $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
          //$mail->SMTPDebug   = 1;
          
          //Recipients
          $mail->setFrom('hello@coronackathon.org', 'Coronackathon');
          $mail->addAddress($value['email'], $value['nom']);     // Add a recipient
          //$mail->addAddress('ellen@example.com');               // Name is optional
          $mail->addReplyTo('hello@coronackathon.org', 'Présélection au Hackathon');
          // $mail->addCC('cc@example.com');
          // $mail->addBCC('bcc@example.com');

          // Attachments
          // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
          // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = $object;
          $mail->Body    = $message;
          $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

          $mail->send();
          if ($key = $last_key) {
            die("ok");
            header("Location:index.php?action=listeProjet");
          }
          if (count($data)==1) {
            die("ok");
            header("Location:index.php?action=listeProjet");
          }
      } catch (Exception $e) {
          //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
    }
  }
} elseif($_SESSION['etat']=="Non") {//Send Mail to Canditat non retenu
  $data = Manager::getData("candidat", "equipe", $_SESSION['equipe'], true)['data'];
  //Manager::showError($data);
  //die();
  if (is_array($data) || is_object($data)) {
    $temp = array_keys($data);
    $last_key = end($temp);
    foreach ($data as $key => $value) {

      $object = "Preselection au Hackathon";
      $message = "Désolé votre equipe n'est pas présélection pour le Hackathon";

      // Instantiation and passing `true` enables exceptions
      $mail = new PHPMailer(true);

      try {
          //Server settings
          $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
          $mail->isSMTP();                                            // Send using SMTP
          $mail->Host       = 'mail41.lwspanel.com';                    // Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'hello@coronackathon.org';                     // SMTP username
          $mail->Password   = 'Hack@Covid19';                               // SMTP password
          $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
          $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
          //$mail->SMTPDebug   = 1;
          
          //Recipients
          $mail->setFrom('hello@coronackathon.org', 'Coronackathon');
          $mail->addAddress($value['email'], $value['nom_candidat']);     // Add a recipient
          //$mail->addAddress('ellen@example.com');               // Name is optional
          $mail->addReplyTo('hello@coronackathon.org', 'Présélection au Hackathon');
          // $mail->addCC('cc@example.com');
          // $mail->addBCC('bcc@example.com');

          // Attachments
          // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
          // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

          // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = $object;
          $mail->Body    = $message;
          $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

          $mail->send();
          if ($key = $last_key) {
            die("ok");
            header("Location:index.php?action=listeProjet");
          }
          if (count($data)==1) {
            die("ok");
            header("Location:index.php?action=listeProjet");
          }
      } catch (Exception $e) {
          //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
    }
  }
}