<?php

if (!function_exists('latestJs')) {
    function latestJs($filepath)
    {
        $time = filemtime(public_path($filepath));
        return "<script src='$filepath?$time'></script>";
    }
}

if (!function_exists('latestCss')) {
    function latestCss($filepath)
    {
        $time = filemtime(public_path($filepath));
        return "<link rel='stylesheet' href='$filepath?$time' />";
    }
}