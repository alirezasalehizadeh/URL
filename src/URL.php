<?php

declare(strict_types=1);

namespace Alirezasalehizadeh\URL;

class URL
{
    /**
     * URL-encodes string
     *
     * @param string $string
     * @return string
     */
    public static function encode(string $string): string
    {
        return urlencode($string);
    }

    /**
     * Decodes URL-encoded string
     *
     * @param string $string
     * @return string
     */
    public static function decode(string $string): string
    {
        return urldecode($string);
    }

    /**
     * Encodes data with MIME base64
     *
     * @param string $string
     * @return string
     */
    public static function encodeBase64(string $string): string
    {
        return base64_encode($string);
    }

    /**
     * Decodes data encoded with MIME base64
     *
     * @param string $string
     * @param boolean $strict
     * @return string|false
     */
    public static function decodeBase64(string $string, bool $strict = false): string|false
    {
        return base64_decode($string, $strict);
    }

    /**
     * Parse a URL and return its components
     *
     * @param string $string
     * @return array|string|integer|false|null
     */
    public static function parse(string $string): array|string|int|false|null
    {
        return parse_url($string);
    }

    /**
     * Fetches all the headers sent by the server in response to an HTTP request
     *
     * @param string $string
     * @param boolean $associative
     * @param resource $context
     * @return array|false
     */
    public static function getHeaders(string $string, bool $associative = false, $context = null): array|false
    {
        return get_headers($string, $associative, $context);
    }

    /**
     * Extracts all meta tag content attributes from a file and returns an array
     *
     * @param string $filename
     * @param boolean $useIncludePath
     * @return array|false
     */
    public static function getMetaTags(string $filename, bool $useIncludePath = false): array|false
    {
        return get_meta_tags($filename, $useIncludePath);
    }
}
