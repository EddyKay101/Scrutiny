<?php

if(!function_exists('dateFormat'))
{
    function dateFormat($format='d/m/Y h:ia', $givenDate=null)
    {
        return date($format, strtotime($givenDate));
    }
}

?>