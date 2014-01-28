<?php
    header('Content-type: text/css');
    ob_start("compress");
    function compress($Buffer) {
    $Buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $Buffer);
    $Buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $Buffer);
    return $Buffer;
    }
//Main styles
require_once($_SERVER['DOCUMENT_ROOT']."/assets/css/style.css");
require_once($_SERVER['DOCUMENT_ROOT']."/assets/css/jquery/owl.carousel.css");
require_once($_SERVER['DOCUMENT_ROOT']."/assets/css/jquery/owl.theme.css");

//Other style
/*if($php_variable) {
    require_once($_SERVER['DOCUMENT_ROOT']."/templates/style/other.css");
}*/

ob_end_flush();
?>