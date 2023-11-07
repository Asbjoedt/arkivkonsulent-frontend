<?php $pagetitle = "Kontakt"; $menu = true; ?>
<!DOCTYPE html>
<html lang="da">
<?php include('../templates/head.php') ?>
<body>
  	<div class="arc-fullpage">
		<?php include('../templates/header.php') ?>
        <div class="arc-page">
          <div class="arc-content">
			      <div class="arc-form">
              <form name="sendpost" method="POST" action="contact-sent.php">
                <label for="navn"><strong>Dit navn</strong></label><br>
                <input type="text" name="navn" id="navn" autocomplete="on" minlength="2" placeholder="Skriv dit fulde navn..." required><br>
                <label for="mailadresse"><strong>Din mailadresse</strong></label><br>
                <input type="email" name="mailadresse" id="mailadresse" autocomplete="on" minlength="3" placeholder="Skriv din mailadresse..." required><br>
                <label for="besked"><strong>Din besked</strong></label><br>
                <textarea name="besked" id="besked"autocomplete="off" minlength="5" placeholder="Skriv besked..." required></textarea><br>
                <input type="submit" name="send" value="Send">
              </form>
            </div>
          </div>
        </div>
		  <?php include('../templates/footer.php') ?>
    </div>
<script>
</script>
</body>
</html>