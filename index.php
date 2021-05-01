<?php

    $nombre = "ruber";
    $apellidos = "rodriguez";

    $resultado = $nombre." ".$apellidos;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código QR</title>
</head>
<body>
    
    <div id="placeHolder"></div>

    <script type="text/javascript" src="qrcode.js"></script>
    <script type="text/javascript">
        var typeNumber = 4;
        var errorCorrectionLevel = 'L';
        var qr = qrcode(typeNumber, errorCorrectionLevel);
        qr.addData("<?php echo $resultado ?>");
        qr.make();
        document.getElementById('placeHolder').innerHTML = qr.createImgTag();
    </script>

</body>
</html>