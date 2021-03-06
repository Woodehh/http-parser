<?php
/**
 * Author: Jairo Rodríguez <jairo@bfunky.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BFunky\HttpParser\Entity;

use BFunky\HttpParser\Exception\HttpParserBadFormatException;

class HttpDataValidation
{
    /**
     * @param string $httpLine
     * @return bool
     */
    public static function isField(string $httpLine): bool
    {
        return (strpos($httpLine, ':') !== false);
    }

    /**
     * @param string $method
     * @param string $path
     * @param string $protocol
     * @throws HttpParserBadFormatException
     */
    public static function checkHeaderOrRaiseError(string $method, string $path, string $protocol): void
    {
        if (empty($method) || empty($path) || empty($protocol)) {
            throw new HttpParserBadFormatException();
        }
    }
}