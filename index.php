<?php

require_once 'config.inc.php';
$excludeDir = ['.', '..'];
$content = array_diff(scandir(PATH_TO_IMG), $excludeDir);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Screenshoots Manager</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
    <link rel="stylesheet" href="ressources/app/milligram-1.1.0/dist/milligram.min.css">
    <link rel="stylesheet" href="ressources/app/lightbox2-master/dist/css/lightbox.min.css">
    <link rel="stylesheet" href="ressources/css/style.css">
</head>
<body>

    <h1 class="title">Gestion des screenshoots</h1>
    <h4 class="sub-title">pic.valentin.ovh</h4>
    <div class="flex-container">
        <?php foreach ($content as $item): ?>
        <div class="item">
            <a href="<?php echo BASE_URL . $item ?>" data-lightbox="image">
                <img src="<?php echo BASE_URL . $item ?>" data-lightbox="image" class="item">
            </a>
            <a class="copy" data-image="<?php echo $item ?>" href="#" data-clipboard-text="<?php echo BASE_URL . $item ?>">
                <span class="fa fa-clipboard"></span>
            </a>
            <a class="remove" data-image="<?php echo $item ?>" href="#">
                <span class="fa fa-remove"></span>
            </a>
        </div>
        <?php endforeach; ?>
    </div>

    <script src="https://use.fontawesome.com/f31b0b7742.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>
    <script src="ressources/app/lightbox2-master/dist/js/lightbox.min.js"></script>
    <script src="ressources/js/main.js"></script>
</body>
</html>