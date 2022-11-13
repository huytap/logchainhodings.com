<?php
if (!function_exists('jsonEncodeHasText')) {
    function jsonEncodeHasText($arr)
    {
        return json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
    }
}
