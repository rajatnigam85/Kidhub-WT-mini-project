<?php
function sanitize($data){
    return mysql_real_escape_string($data);
}

function output_errors($errors){
    return '<ul style="list-style-type: none;"><li>'.implode('<li></li>',$errors).'</li></ul>';
}
function array_sanitize (&$item) {
    $item = sanitize($item);
}