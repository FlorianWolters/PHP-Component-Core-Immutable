<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\ImmutableInterface;

/**
 * The interface {@see ImmutablePoint2DInterface} is an **Immutable Interface**
 * for the mutable class {@see Point2D}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Immutable
 * @since     Interface available since Release 0.1.0
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
