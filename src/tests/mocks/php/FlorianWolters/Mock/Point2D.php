<?php
/**
 * FlorianWolters\Mock\Point2D
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Immutable
 */

namespace FlorianWolters\Mock;

/**
 * The class {@see Point2D} represents a two-dimensional point.
 *
 * This class is mutable, since its state can be changed after construction.
 *
 * * It is not declared as `final`.
 * * It does provide mutator methods ("setters").
 * * It does not forbid access with the magic method `__set`.
 *
 * @since Class available since Release 0.1.0
 */
class Point2D implements ImmutablePoint2DInterface
{
    /**
     * The X coordinate of this Point2D.
     *
     * @var integer
     */
    private $xCoordinate;

    /**
     * The Y coordinate of this Point2D.
     *
     * @var integer
     */
    private $yCoordinate;

    /**
     * Initializes a new instance of the Point2D class.
     *
     * @param integer $xCoordinate The X coordinate of the Point2D.
     * @param integer $yCoordinate The Y coordinate of the Point2D.
     */
    public function __construct($xCoordinate, $yCoordinate)
    {
        $this->xCoordinate = $xCoordinate;
        $this->yCoordinate = $yCoordinate;
    }

    /**
     * {@inheritdoc}
     */
    public function getX()
    {
        return $this->xCoordinate;
    }

    /**
     * {@inheritdoc}
     */
    public function getY()
    {
        return $this->yCoordinate;
    }

    /**
     * Returns the X coordinate of this point.
     *
     * @param integer $xCoordinate The X coordinate of this point.
     *
     * @return void
     */
    public function setX($xCoordinate)
    {
        $this->xCoordinate = $xCoordinate;
    }

    /**
     * Returns the Y coordinate of this point.
     *
     * @param integer $yCoordinate The Y coordinate of this point.
     *
     * @return void
     */
    public function setY($yCoordinate)
    {
        $this->yCoordinate = $yCoordinate;
    }
}
