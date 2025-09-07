<?php
function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function uriIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorization($condition, $status = Response::FORBIDDEN) {
    if (!$condition) {
        abort($status);
    }
}