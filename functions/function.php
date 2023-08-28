<?php
function dd($valu)
{
    echo"<pre>";
    var_dump($valu);
    echo"</pre>";
    die();
}
function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}
