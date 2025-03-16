
<html>
<head>
    
</head>
<body >
    <style>
    #heloo{
		
        height: 200px;
        height: 200px;
        background-color: red;
	}</style>

<div id= helloo >es tu</div>
</body>
<?php
$img2 = "<div id= hello >es tu</div>";
// Cria uma imagem 100*30
$im = imagecreate(100, 30);

// Fundo branco e texto azul
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 255);

// Desenha o texto no canto superior esquerdo
imagestring($im, 5, 0, 0, $img2, $textcolor);

// Mostra a imagem
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);
?>