<?php
if (isset($_POST['input_filepath'])) {
	shell_exec("validate-spreadsheet.exe $_POST['input_filepath'] $POST_['standard'] $POST_['archivalrequirements']");
}

$target_dir = "software/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Bekalger, din fil var for stor";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "xlam" && $imageFileType != "xlsm" && $imageFileType != "xlsx" && $imageFileType != "xltm"
&& $imageFileType != "xltx" ) {
  echo "Beklager, kun Office Open XML regnearksfilformater er tilladte";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Bkleager, din fil blev ikke uploaded.";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " er blevet uploaded.";
  } else {
    echo "Beklager, der var en fejl ved upload af din fil.";
  }
}
?>

<?php $pagetitle = "Tjenester"; $menu = true; ?>
<!DOCTYPE html>
<html lang="da">
<?php include('templates/head.php') ?>
<body>
  	<div class="arc-fullpage">
		<?php include('templates/header.php') ?>
        <div class="arc-page">
          <?php include('templates/sidebar.php') ?>
          <div class="arc-content">
            <h2>Valider regneark</h2>
            <p>Valider OOXML regneark.</p>
          </div>
        </div>
		<?php include('templates/footer.php') ?>
    </div>
<script>
</script>
</body>
</html>