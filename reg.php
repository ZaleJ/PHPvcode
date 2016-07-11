<?php 
/*
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";*/

    session_start();

    $code=strtolower($_POST['vcode']);
    $vstr=strtolower($_SESSION['vstr']);
    //echo $code;

/*
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";*/

    if($code==$vstr){
        echo "<script>location='http://github.com/ZaleJ/'</script>";
    }else{
        echo "<script>alert('input wrong!')</script>";
        echo "<script>location='http://jzl0123.gotoip1.com/'</script>";
    }
?>
