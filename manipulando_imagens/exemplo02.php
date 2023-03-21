<?php


$image = imagecreatefromjpeg("img/certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

// Imagem referencia, tamanho da fonta, margin left, right, string, cor
imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Luan de Carvalho", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);


header("Content-Type: image/jpeg");

imagejpeg($image, "certificadoGerado.jpg");

imagedestroy($image);

?>