<?php
function base_url(){
    return BASE_URL;
}

function dep($data){
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
}

?>