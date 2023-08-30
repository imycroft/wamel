<?php

function dd()
{
    echo '<pre>';
    var_dump($_SERVER);
    echo '</pre>';
    die();
}
