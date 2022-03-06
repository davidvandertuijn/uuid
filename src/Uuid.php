<?php

namespace Davidvandertuijn;

/**
 * Universally Unique Identifier (UUID).
 */
class Uuid
{
    /**
     * Generate.
     *
     * @return string
     */
    public static function generate(): string
    {
        $s = strtoupper(md5(uniqid(rand(), true)));

        return substr($s, 0, 8).'-'.substr($s, 8, 4).'-'.substr($s, 12, 4).'-'.substr($s, 16, 4).'-'.substr($s, 20, 12);
    }
}
