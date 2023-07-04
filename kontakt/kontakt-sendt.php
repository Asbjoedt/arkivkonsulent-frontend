<?php $pagetitle = "Kontakt"; $menu = true; ?>

<?php
$email_to = "mail@arkivkonsulent.dk";
$email_subject = "Arkivkonsulent besked";
  
$email_message .= "Fra: " . $_POST['navn'] . "\n";
$email_message .= "Mailadresse: " . $_POST['mailadresse'] . "\n";
$email_message .= "\n" . $_POST['besked'] . "\n";

$headers = 'Fra: ' . $email . "\r\n" .
           'Svar-til: ' . $email . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!DOCTYPE html>
<html lang="da">
<?php include('templates/head.php') ?>
<body>
  	<div class="arc-fullpage">
		<?php include('templates/header.php') ?>
        <div class="arc-page">
          <div class="arc-content">
            <p>Tak fordi du kontaktede os. Vi vil være i kontakt snart.</p>
          </div>
        </div>
		<?php include('templates/footer.php') ?>
    </div>
<script>
</script>
</body>
</html>