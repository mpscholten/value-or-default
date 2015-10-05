<?php

namespace MPScholten;

/**
 * Returns `$value` when `isset($value)` is true, otherwise it returns `$default`
 */
function valueOrDefault(&$value, $default) {
    if (isset($value)) {
        return $value;
    } else {
        return $default;
    }
}
