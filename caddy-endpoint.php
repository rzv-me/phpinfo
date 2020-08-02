<?php
    function endsWith( $str, $sub ) {
        return ( substr( $str, strlen( $str ) - strlen( $sub ) ) == $sub );
    }
    if(endsWith($_GET['domain'], "gomagcaddy.rzv.me")) {
        http_response_code(204)
    }
    http_response_code(404);
