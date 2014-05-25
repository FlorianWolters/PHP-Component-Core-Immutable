<?php
/**
 * FlorianWolters\Component\Core\ImmutableException
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Immutable
 */

namespace FlorianWolters\Component\Core;

use \BadMethodCallException;

/**
 * The exception class {@see ImmutableException} can be thrown when trying to
 * modify an **Immutable Object**.
 *
 * @since Class available since Release 0.1.0
 * @see ImmutableTrait
 */
class ImmutableException extends BadMethodCallException
{
}
