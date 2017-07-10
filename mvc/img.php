<?php
header("content-type:image/png;charset:utf-8;");
$re=imagecreatetruecolor (150 ,150 );
$background=imagecolorallocate($re, 255, 0, 0);
imagefill($re,0,0,$background);
$text_color=imagecolorallocate($re, 0, 0, 255);
$line_color=imagecolorallocate($re, 0, 255, 0);
//imagestring ( $re ,5 , 0 , 0 , "hello world" , $text_color );
imagettftext ( $re , 20 , 0, 0, 50, $text_color, "demo.ttf" , "hello world" );

for($i=0;$i<100;$i++){
    $r=mt_rand(0,255);
    $g=mt_rand(0,255);
    $b=mt_rand(0,255);
    $color=imagecolorallocate($re, $r, $g, $b);
    imagesetpixel($re,mt_rand(0,150),mt_rand(0,150),$color);
}

imageline ( $re, 0, 0 , 150, 150, $line_color);
imagepng($re);
?>

