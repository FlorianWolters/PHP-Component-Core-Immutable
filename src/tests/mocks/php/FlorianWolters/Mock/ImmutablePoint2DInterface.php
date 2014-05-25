<?php
/**
 * FlorianWolters\Mock\ImmutablePoint2DInterface
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Immutable
 */

namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\ImmutableInterface;

/**
 * The interface {@see ImmutablePoint2DInterface} is an **Immutable Interface**
 * for the mutable class {@see Point2D}.
 *
 * @since Interface available since Release 0.1.0
 */
interface ImmutablePoint2DInterface extends ImmutableInterface
{
    /**
     * @return integer
     */
    public function getX();

    /**
     * @return integer
     */
    public function getY();
}
