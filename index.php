<?php
    $name = 'Alessandro, come stai ?';
    $lastname = 'Piscino';
    $text = str_replace('Alessandro', '***', $name);
    $list = ['pane', 'latte', 'uova'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ciao a tutti mi chiamo <?php echo $name; ?> <?php echo $lastname; ?></h1>
    <h3>Lunghezza testo: <?php echo strlen($name); ?></h3>
    <h1> <?php echo $text; ?> </h1>
    <h3> <?php var_dump($list); ?></h3>
</body>
</html>