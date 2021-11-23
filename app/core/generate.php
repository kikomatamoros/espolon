<?php
    $srcurl = 'http://localhost/bookstore';
    $tempfilename = $_SERVER['DOCUMENT_ROOT'].'/bookstore/public/tempindex.html';
    $targetfilename = $_SERVER['DOCUMENT_ROOT'].'/bookstore/public/index.html';

    if(file_exists($tempfilename)){
        unlink($tempfilename);
    }

    $html = file_get_contents($srcurl);
    if(!$html){
        $error = "Unable to load $srcurl. Static page update aborted!";
        exit();
    }
    if(!file_put_contents($tempfilename, $html)){
        $error ="Unable to write $templfilename. Static page update aborted!";
        exit();
    }
    copy($tempfilename, $targetfilename);
    unlink($tempfilename);
    echo "Home page generated succesfully!";
?>