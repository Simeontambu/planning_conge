<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="<?php echo cssroot; ?>/css/index.css?v=<?php echo time(); ?>">
</head>
<body>

    <?=$content;?>
<script src="<?php echo jsroot; ?>/js/index.js"></script>
</body>
</html>