<?php


$image = imagecreatefromjpeg("img/certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

// Imagem referencia, tamanho da fonta, angulo da fonte, margin left, right, cor, caminho da fonte, string
imagettftext($image, 32, 0, 320, 250,  $titleColor, "fonts/Bevan/Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 345, 350,  $titleColor, "fonts/Playball/Playball-Regular.ttf", "Luan de Carvalho");

// Imagem referencia, tamanho da fonta, margin left, right, string, cor
imagestring($image, 3, 390, 375, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);


header("Content-Type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>