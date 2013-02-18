<?php
$ytUrl = $input;
if(isset($ytUrl) && !empty($ytUrl)){
    $pattern = '#^(?:https?://)?(?:www\.)?(?:youtu\.be/|youtube\.com(?:/embed/|/v/|/watch\?v=|/watch\?.+&v=))([\w-]{11})(?:.+)?$#x';
    preg_match($pattern, $ytUrl, $matches);
    return (isset($matches[1])) ? $matches[1] : false;
}