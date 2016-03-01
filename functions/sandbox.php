<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2/27/2016
 * Time: 5:56 PM
 */

/* -------------------------------------------------------------------------------- */
/* gets url path and break into a multi dimensional array
/* -------------------------------------------------------------------------------- */
function get_path() {
    $path = [];
    if (isset($_SERVER['REQUEST_URI'])) {

        $request_path = explode('?', $_SERVER['REQUEST_URI']);
        $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
        $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
        $path['call'] = utf8_decode($path['call_utf8']);

        if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
            $path['call'] = '';
        }

        $path['call_parts'] = explode('/', $path['call']);

        $path['query_utf8'] = urldecode($request_path[1]);
        $path['query'] = utf8_decode(urldecode($request_path[1]));
        $vars = explode('&', $path['query']);

        foreach ($vars as $var) {
            $t = explode('=', $var);
            $path['query_vars'][$t[0]] = $t[1];
        }
    }
    return $path;
}

/* -------------------------------------------------------------------------------- */
/* checks if page is active
/* -------------------------------------------------------------------------------- */

function selected_page($value1, $value2, $value3){

    if($value1 == $value2) {
        echo $value3;
    }
}