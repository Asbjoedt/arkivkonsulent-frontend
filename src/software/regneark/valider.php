<?php $pagetitle = "Tjenester"; $menu = true; ?>
<!DOCTYPE html>
<html lang="da">
<?php include('../templates/head.php') ?>
<body>
  	<div class="arc-fullpage">
		<?php include('../templates/header.php') ?>
        <div class="arc-page">
          <?php include('../templates/sidebar.php') ?>
          <div class="arc-content">
            <h2>Valider regneark</h2>
            <h3>Office Open XML regneark</h3>
            <div class="arc-form">
				<p>Vælg regneark med filendelser: <i>xlam, .xlsm, xlsx, xltm, .xltx</i>
				<form name="valider-ooxml-regneark" action="valider-resultat.php" method="post" enctype="multipart/form-data">
            	<input type="file" name="fileToUpload" id="fileToUpload"><br>
            	<input type="submit" value="Valider fil" name="submit">
				<div class="arc-content-subtext">Følgende applikation anvendes: <a href="https://github.com/Asbjoedt/validate-spreadsheet" target="_blank">Github repositorie</a>.</div>
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