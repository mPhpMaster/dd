<?php

if (!function_exists('d2')) {
    function d2()
    {
	    $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 5);
	    $d = end($backtrace);
	    $d['file'] = ($d['file'] ?? null) ? "{$d['file']}\n" : '';
	    $d['class'] = $d['file'].(($d['class'] ?? null) ? "{$d['class']}::" : '');

	    $d['function'] = ($d['function'] ?? null) ? "{$d['function']}()" : '';
	    $d['line'] = ($d['line'] ?? null) ? "line {$d['line']}" : '';
	    $d = trim("{$d['class']}{$d['function']} {$d['line']}");
	    echo "\n<pre>{$d}\n\n</pre>\n\n";

	    $args = func_get_args();
        call_user_func_array('dump', $args);
        die();
    }
}

if (!function_exists('d')) {
    function d()
    {
	    $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 5);
	    $d = end($backtrace);
	    $d['file'] = ($d['file'] ?? null) ? "{$d['file']}\n" : '';
	    $d['class'] = $d['file'].(($d['class'] ?? null) ? "{$d['class']}::" : '');

	    $d['function'] = ($d['function'] ?? null) ? "{$d['function']}()" : '';
	    $d['line'] = ($d['line'] ?? null) ? "line {$d['line']}" : '';
	    $d = trim("{$d['class']}{$d['function']} {$d['line']}");
	    echo "\n<pre>{$d}\n\n</pre>\n\n";

        $args = func_get_args();
        call_user_func_array('dump', $args);
    }
}
