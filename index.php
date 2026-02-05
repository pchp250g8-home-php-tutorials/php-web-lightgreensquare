<?php
    $image1 = imagecreate(300,300);
    $redColor = imagecolorallocate($image1,0,255,0);
    imagefill($image1,0,0, $redColor);
    header("Content-type:image/png");
    imagepng($image1);
    imagedestroy($image1);
?>
