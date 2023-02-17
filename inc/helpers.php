<?php
/*
* Include inline SVG icons from /assets/icons/
*/
function showIcon($name) {
    echo file_get_contents(get_template_directory() . "/assets/icons/" . $name . ".svg");
}