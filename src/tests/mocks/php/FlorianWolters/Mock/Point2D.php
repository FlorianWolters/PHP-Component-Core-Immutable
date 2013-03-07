<?php
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
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-Immutable
 * @since     Class available since Release 0.1.0
 */
class Point2D implements ImmutablePoint2DInterface
{
    /**
     * @var integer
     */
    private $x;

    /**
     * @var integer
     */
    private $y;

    /**
     * @param integer $x
     * @param integer $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * {@inheritdoc}
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * {@inheritdoc}
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param integer $x
     *
     * @return void
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param integer $y
     *
     * @return void
     */
    public function setY($y)
    {
        $this->y = $y;
    }
}
