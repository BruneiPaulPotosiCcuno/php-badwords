<?php
$paragrafo= $_GET['paragraph'];
$censura = $_GET['censure'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paragraph</title>
</head>
<body>
     
    <p>
        <b><?php echo $paragrafo; ?></b>   <?php echo strlen($paragrafo); ?>           
    </p>
    
    <p>
        <b><?php echo str_replace($censura, '***', $paragrafo); ?></b> <?php echo strlen($paragrafo); ?>
    </p>
</body>
</html>