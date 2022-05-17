<?php

if(!function_exists('override_values')) {

    /**
     * Overrides some values by using the values specified in $overrides. The keys of the two arrays must match
     * in order to override a certain value contained in the $values array.
     * @param array $overrides
     * @param array $values
     * @return \Illuminate\Support\Collection
     */

    function override_values(array $overrides, array $values) {
        return collect($values)->map(function($value, $key) use ($overrides) {
            return isset($overrides[$key]) && is_string($overrides[$key]) ? $overrides[$key] : $value;
        });
    }
}

if (! function_exists('strip_divs')) {
    function strip_divs($str) {
        return preg_replace('/\<[\/]{0,1}div[^\>]*\>/i', '', $str);
    }
}
