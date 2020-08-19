<?php
    function endsWith( $str, $sub ) {
        return ( substr( $str, strlen( $str ) - strlen( $sub ) ) == $sub );
    }
    if(!endsWith($_GET['domain'], "gomagcaddy.rzv.me") && !endsWith($_GET['domain'], "gomagcaddylb.rzv.me") && !endsWith($_GET['domain'], 'gomagcaddynewlb.rzv.me'])) {
        header('HTTP/1.0 403 Forbidden');
        echo 'You are forbidden!';
    }
    echo 'OK';
