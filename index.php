<!DOCTYPE html>
<html>
<head>
    <title>Moja prvá PHP stránka</title>
</head>
<body>

<h1>Vitaj na mojej stránke</h1>

<?php
echo "Dnes je " . date("d.m.Y") . "<br>";
echo "Aktuálny čas je " . date("H:i:s");
?>

</body>
</html>