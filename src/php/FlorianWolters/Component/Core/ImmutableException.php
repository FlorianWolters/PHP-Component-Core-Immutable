<?php
namespace FlorianWolters\Component\Core;

use \BadMethodCallException;

/**
 * The exception class {@see ImmutableException} can be thrown when trying to
 * modify an **Immutable Object**.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Immutable
 * @since     Class available since Release 0.1.0
 * @see       ImmutableTrait
 */
class ImmutableException extends BadMethodCallException
{
}
