<?php

define('UPLOAD_DIR', dirname(__FILE__) . '\uploads');
define('ALLOWED_EXTENSION', ['png', 'jpg', 'jpeg', 'pdf']);

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$profilePicture = 'https://www.gravatar.com/avatar/' . md5(generateRandomString(16));

if (isset($_FILES['photo'])) {
	$file = $_FILES['photo'];

	if ($file['error'] == UPLOAD_ERR_OK) {
		$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
		$ext = strtolower($ext);

		if (!in_array($ext, ALLOWED_EXTENSION)) {
			echo "File not alllowed";

			exit;
		}

		$name = generateRandomString(16);

		$path = 'uploads' . '/' . date('Y-m-d');

		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}

		$path = sprintf('%s/%s.%s', $path, $name, $ext);

		move_uploaded_file($file['tmp_name'], $path);

		$profilePicture = $path;
	}
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-top">
        <img src="<?php echo $profilePicture ?>">
        <?php if (!empty($_POST['name'])): ?>
        <h3><?php echo $_POST['name']; ?></h3>
        <?php else: ?>
	    <h3>Unknown</h3>
	    <?php endif;?>
        <?php if (!empty($_POST['lastName'])): ?>
        <h3><?php echo $_POST['lastName']; ?></h3>
        <?php else: ?>
	    <h3>Unknown</h3>
	    <?php endif;?>
    </div>
    <div class="container-info">
        <p class="bolder">Gimtasis miestas: <?php echo $_POST['cities']; ?></p>
        <?php if (!empty($_POST['lang'])): ?>
        <p class="bolder">Programavimo kalbos: <?php foreach ($_POST['lang'] as $key => $value) {echo '<br>' .  $value;}; ?></p>
        <?php else: ?>
        <p class="bolder">Ne programuotoja</p>
        <?php endif; ?>
    </div>
    <div class="container-comment">
        <?php if (strlen(trim($_POST['content'])) !== 0): ?>
        <p class="bolder"><?php echo 'Siektiek apie mane: ' . '<br>' . $_POST['content'] ?></p>
        <?php else: ?>
            <p class="bolder">Nieko nemegstu</p>
            <?php endif; ?>
    </div>

</body>
</html>



