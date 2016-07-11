<?php 
    // start session
    session_start();

    // prepare the canvas
    $im=imagecreatetruecolor(100, 50);

    // prepare the paint
    $white=imagecolorallocate($im, 255, 255, 255);
    $red=imagecolorallocate($im, 255, 0, 0);
    $grayred=imagecolorallocate($im, 255, 100, 100);
    $green=imagecolorallocate($im, 0, 255, 0);
    $blue=imagecolorallocate($im, 0, 0, 255);
    $gray=imagecolorallocate($im, 200, 200, 200);
    $black=imagecolorallocate($im, 0, 0, 0);

    // background filling
    imagefill($im, 0, 0, $gray);

    // text location
    $x=(100-20*4)/2;
    $y=(100-20)/2+20;

    // paint text
    @$strarr=array_merge(range(0, 9), range(a, z), range(A, Z));
    shuffle($strarr);
    $str=join('', array_slice($strarr, 0, 4));

    // put $str into session to use in all files.
    $_SESSION['vstr']=$str;

    $file="front/msyh.ttf";
    imagettftext($im, 20, 0, 5, 40, $black, $file, $str);

    $fw=imagefontwidth(20);
    $fh=imagefontheight(20);

    // output
    header("content-type:image/png");

    imagepng($im);
    imagedestroy($im);

?>
