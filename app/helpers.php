<?php

function assetImage($site , $itemno){
    return env('WEB5').'/equipment/'.$site.'/'.strtolower($itemno.'-p1.jpg');
}


?>