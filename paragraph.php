<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph Processing</title>
</head>
<body>

<?php
// otteniamo i dati con GET
$paragraph = $_GET['paragraph'] ?? '';
$censorWord = $_GET['censure'] ?? '';

// STAMPIAMO CON ECHO I PARAGRAFI
echo "<p>Paragrafo: $paragraph</p>";
echo "<p>Lunghezza: " . strlen($paragraph) . "</p>";

// SOSTITUIAMO LE PAROLE CENSURATE CON ***
$censoredParagraph = str_ireplace($censorWord, '***', $paragraph);

// STAMPIAMO DI NUOVO IL PARAGRAFH CON LA SUA LUNGHEZZA E LE PAROLE CENSURATE E LA SUA LUNGHEZZA
echo "<p>Paragrafo Censurato: $censoredParagraph</p>";
echo "<p>Lunghezza: " . strlen($censoredParagraph) . "</p>";
?>

</body>
</html>
