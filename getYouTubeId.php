<?php
/**
 * youTubeId
 * 
 * Created by Jason Carney (DashMedia.com.au) for use
 * as a simple output modifier for MODX, all credit for
 * RegEx String goes to the community at StackOverflow.com
 *
 * @package youTubeId
 */
/**
 * @var string $input   - youtube URL to video
 * 
 * @returns string      - youTube ID
 */
$ytUrl = $input;
if(isset($ytUrl) && !empty($ytUrl)){
    $pattern = '#^(?:https?://)?(?:www\.)?(?:youtu\.be/|youtube\.com(?:/embed/|/v/|/watch\?v=|/watch\?.+&v=))([\w-]{11})(?:.+)?$#x';
    preg_match($pattern, $ytUrl, $matches);
    return (isset($matches[1])) ? $matches[1] : false;
}
